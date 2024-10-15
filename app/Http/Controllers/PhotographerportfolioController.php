<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Image;

class PhotographerportfolioController extends Controller
{

    public function createpphotocategory(Request $request)
    {
        if ($request->isMethod('post')) {
            $input = $request->all();
            unset($input['_token']);
            if ($request->file('image')) {
                $image =  Storage::disk('public_folder')->putFile('photographerportfolio_image', $input['image'], 'public');
                $input['image'] = $image;
            }
            $checkname = DB::table('photographercategory')->where('name', $input['name'])->first();
            if (empty($checkname)) {
                DB::table('photographercategory')->insert($input);
                return redirect('my-admin/view-photocategory')->with('success', 'Successfully Category Created');
            } else {
                return redirect()->back()->withInput($input)->with('error', 'Category Name Already Exist');
            }
        } else {
            return view('photographercategory.createpcategory');
        }
    }
    public function editpphotocategory(Request $request, $id)
    {
        if ($request->isMethod('post')) {
            $input = $request->all();
            unset($input['_token']);
            $checkname = DB::table('photographercategory')->where('id', '!=', $id)->where('name', $input['name'])->first();
            if (empty($checkname)) {
                if (!empty($request->file('image'))) {
                    $data = DB::table('photographercategory')->where('id', $id)->first();
                    if (!empty($data->image)) {
                        $filename = $data->image;
                        $filenamep = public_path() . '/' . $filename;
                        File::delete($filenamep);
                    }
                    $image =  Storage::disk('public_folder')->putFile('photographerportfolio_image', $input['image'], 'public');
                    $input['image'] = $image;
                }
                DB::table('photographercategory')->where('id', $id)->update($input);
                return redirect('my-admin/view-photocategory')->with('success', 'Successfully Category Updated');
            } else {
                return redirect()->back()->withInput($input)->with('danger', 'Category Name Already Exist');
            }
        } else {
            $data = DB::table('photographercategory')->where('id', $id)->first();
            return view('photographercategory.editpcategory', compact('data'));
        }
    }
    public function viewpphotocategory()
    {
        $collection = DB::table('photographercategory')->orderBy('id', 'DESC')->get();
        return view('photographercategory.viewpcategory', compact('collection'));
    }

    public function delepphotocategory($id)
    {
        $data = DB::table('photographercategory')->where('id', $id)->first();

        if (!empty($data)) {
            if (!empty($data->image)) {
                $filename = $data->image;
                $filenamep = public_path() . '/' . $filename;
                File::delete($filenamep);
            }
            DB::table('photographercategory')->where('id', $id)->delete();
            return redirect()->back()->with('success', 'Succesfully Deleted');
        } else {
            return redirect()->back()->with('danger', 'Data Not Exist');
        }
    }
    public function enbdisbphotocategory($id)
    {
        $find = DB::table('photographercategory')->where('id', $id)->first();

        if (!empty($find)) {
            if ($find->status == 0) {
                DB::table('photographercategory')->where('id', $id)->update(['status' => 1]);
                return redirect()->back()->with('success', 'Successfully Enabled');
            } else {
                DB::table('photographercategory')->where('id', $id)->update(['status' => 0]);
                return redirect()->back()->with('danger', 'Successfully Disabled');
            }
        }
    }




    public function createphotoportfolio(Request $request)
    {
        if ($request->isMethod('post')) {
            $input = $request->all();
            unset($input['_token']);

            if ($request->file('image') && $input['type'] == 'image') {
                $images = $request->file('image');
                foreach ($images as $value) {
                    $image =  Storage::disk('public_folder')->putFile('photographerportfolio_image', $value, 'public');
                    $input['image'] = $image;
                    $parts = explode("/", $image);
            
                    // Apply watermark
                    $imgFile = Image::make($value->getRealPath());
                    $watermark = Image::make(public_path('/frontend_assets/img/header/logo.png'));
                    $opacity = 0.2;
                    $watermark->opacity($opacity * 100); // Convert opacity from decimal to percentage
            
                    // Calculate watermark position
                    $watermarkWidth = $watermark->width();
                    $watermarkHeight = $watermark->height();
                    $imageWidth = $imgFile->width();
                    $imageHeight = $imgFile->height();
                    $x = ($imageWidth - $watermarkWidth) / 2;
                    $y = ($imageHeight - $watermarkHeight) / 2;
            
                    // Apply watermark in the center
                    $imgFile->insert($watermark, 'center');
            
                    // Save the watermarked image
                    $imgFile->save(public_path('imagepw').'/'.$parts[1]); 
            
                    $input['userid'] = Auth::user()->id;
                    DB::table('photographerportfolio')->insert($input);
                }
                return redirect()->back()->with('success', 'Image upload successfully');
            }
            if ($input['type'] == 'video') {
                $images = $request->file('image');
                foreach ($images as $value) {
                    $image =  Storage::disk('public_folder')->putFile('photographerportfolio_image', $value, 'public');
                    $input['image'] = $image;
                    $input['video'] = $input['video'];
                    $input['title'] = $input['title'];
                    $input['userid'] = Auth::user()->id;
                    DB::table('photographerportfolio')->insert($input);
                }

                return redirect()->back()->with('success', 'Video upload successfully');
            }
        } else {
            $data = DB::table('photographercategory')->get();
            return view('photographerportfolio.createportfolio', compact('data'));
        }
    }
    public function editphotoportfolio(Request $request, $id)
    {
        if ($request->isMethod('post')) {
            $input = $request->all();
            unset($input['_token']);


            if ($request->file('image') && $input['type'] == 'image') {
                // dd('hi');
                unset($input['video']);
                $images = $request->file('image');
                $data = DB::table('portfolio')->where('id', $id)->first();
                if (!empty($data->image)) {
                    $filename = $data->image;
                    $filenamep = public_path() . '/' . $filename;
                    File::delete($filenamep);
                }

                $img = $request->file('image');
                // dump($img);die;
                $image =  Storage::disk('public_folder')->putFile('photographerportfolio_image', $img, 'public');
                $input['image'] = $image;
                $parts = explode("/", $image);
            
                    // Apply watermark
                    $imgFile = Image::make($img->getRealPath());
                    $watermark = Image::make(public_path('/frontend_assets/img/header/logo.png'));
                    $opacity = 0.2;
                    $watermark->opacity($opacity * 100); // Convert opacity from decimal to percentage
            
                    // Calculate watermark position
                    $watermarkWidth = $watermark->width();
                    $watermarkHeight = $watermark->height();
                    $imageWidth = $imgFile->width();
                    $imageHeight = $imgFile->height();
                    $x = ($imageWidth - $watermarkWidth) / 2;
                    $y = ($imageHeight - $watermarkHeight) / 2;
            
                    // Apply watermark in the center
                    $imgFile->insert($watermark, 'center');
            
                    // Save the watermarked image
                    $imgFile->save(public_path('imagepw').'/'.$parts[1]); 
                // dd($input);
                DB::table('photographerportfolio')->where('id', $id)->update($input);

                // return redirect()->back()->with('success','Image upload Updated');
            }
            if ($input['type'] == 'video') {
                $images = $request->file('image');
                $data = DB::table('portfolio')->where('id', $id)->first();
                if (!empty($request->file('image'))) {
                    $filename = $data->image;
                    $filenamep = public_path() . '/' . $filename;
                    File::delete($filenamep);
                    $img = $request->file('image');
                    // dump($img);die;
                    $image =  Storage::disk('public_folder')->putFile('photographerportfolio_image', $img, 'public');
                    $input['image'] = $image;
                }


                $input['video'] = $input['video'];
                $input['title'] = $input['title'];

                // dd($input);
                DB::table('photographerportfolio')->where('id', $id)->update($input);
                // return redirect()->back()->with('success','Video upload Updated');
            }

            return redirect('my-admin/view-photoportfolio')->with('success', 'Successfully Portfolio Updated');
        } else {
            $data = DB::table('photographerportfolio')->where('id', $id)->first();
            $category = DB::table('photographercategory')->get();
            return view('photographerportfolio.editportfolio', compact('data', 'category'));
        }
    }
    public function viewphotoportfolio()
    {
        $category = DB::table('photographercategory')->get();
       
        if (Auth::user()->hasrole('admin')) {
            $collection = DB::table('photographerportfolio')->join('photographercategory', 'photographercategory.id', '=', 'photographerportfolio.category_id')->select('photographerportfolio.*', 'photographercategory.name as categoryname')->orderBy('id', 'DESC')->get();
        } else {
            $collection = DB::table('photographerportfolio')->join('photographercategory', 'photographercategory.id', '=', 'photographerportfolio.category_id')->select('photographerportfolio.*', 'photographercategory.name as categoryname')->where('photographerportfolio.userid',Auth::user()->id)->orderBy('id', 'DESC')->get();
        }
        return view('photographerportfolio.viewportfolio', compact('category', 'collection'));
    }

    public function delephotoportfolio($id)
    {
        $data = DB::table('photographerportfolio')->where('id', $id)->first();

        if (!empty($data)) {
            if (!empty($data->image)) {
                $filename = $data->image;
                $filenamep = public_path() . '/' . $filename;
                File::delete($filenamep);
            }
            DB::table('photographerportfolio')->where('id', $id)->delete();
            return redirect()->back()->with('success', 'Succesfully Deleted');
        } else {
            return redirect()->back()->with('danger', 'Data Not Exist');
        }
    }
    public function enbdisbphotoportfolio($id)
    {
        $find = DB::table('photographerportfolio')->where('id', $id)->first();

        if (!empty($find)) {
            if ($find->status == 0) {
                DB::table('photographerportfolio')->where('id', $id)->update(['status' => 1]);
                return redirect()->back()->with('success', 'Successfully Enabled');
            } else {
                DB::table('photographerportfolio')->where('id', $id)->update(['status' => 0]);
                return redirect()->back()->with('danger', 'Successfully Disabled');
            }
        }
    }
}
