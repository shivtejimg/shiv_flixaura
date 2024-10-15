<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use File;
use Illuminate\Support\Facades\Storage;
use Image;

class PortfolioController extends Controller
{
    public function createpcategory(Request $request)
    {
        if ($request->isMethod('post')) {
            $input = $request->all();
            unset($input['_token']);
            if ($request->file('image')) {
                $image =  Storage::disk('public_folder')->putFile('portfoli_image', $input['image'], 'public');
                $input['image'] = $image;
            }
            $checkname = DB::table('portfoliocategory')->where('name', $input['name'])->first();
            if (empty($checkname)) {
                DB::table('portfoliocategory')->insert($input);
                return redirect('my-admin/view-category')->with('success', 'Successfully Category Created');
            } else {
                return redirect()->back()->withInput($input)->with('error', 'Category Name Already Exist');
            }
        } else {
            return view('portfoliocategory.createpcategory');
        }
    }
    public function editpcategory(Request $request, $id)
    {
        if ($request->isMethod('post')) {
            $input = $request->all();
            unset($input['_token']);
            $checkname = DB::table('portfoliocategory')->where('id', '!=', $id)->where('name', $input['name'])->first();
            if (empty($checkname)) {
                if (!empty($request->file('image'))) {
                    $data = DB::table('portfoliocategory')->where('id', $id)->first();
                    if (!empty($data->image)) {
                        $filename = $data->image;
                        $filenamep = public_path() . '/' . $filename;
                        File::delete($filenamep);
                    }
                    $image =  Storage::disk('public_folder')->putFile('portfoli_image', $input['image'], 'public');
                    $input['image'] = $image;
                }
                DB::table('portfoliocategory')->where('id', $id)->update($input);
                return redirect('my-admin/view-category')->with('success', 'Successfully Category Updated');
            } else {
                return redirect()->back()->withInput($input)->with('danger', 'Category Name Already Exist');
            }
        } else {
            $data = DB::table('portfoliocategory')->where('id', $id)->first();
            return view('portfoliocategory.editpcategory', compact('data'));
        }
    }
    public function viewpcategory()
    {
        $collection = DB::table('portfoliocategory')->orderBy('id', 'DESC')->get();
        return view('portfoliocategory.viewpcategory', compact('collection'));
    }

    public function delepcategory($id)
    {
        $data = DB::table('portfoliocategory')->where('id', $id)->first();

        if (!empty($data)) {
            if (!empty($data->image)) {
                $filename = $data->image;
                $filenamep = public_path() . '/' . $filename;
                File::delete($filenamep);
            }
            DB::table('portfoliocategory')->where('id', $id)->delete();
            return redirect()->back()->with('success', 'Succesfully Deleted');
        } else {
            return redirect()->back()->with('danger', 'Data Not Exist');
        }
    }
    public function enbdisbpcategory($id)
    {
        $find = DB::table('portfoliocategory')->where('id', $id)->first();

        if (!empty($find)) {
            if ($find->status == 0) {
                DB::table('portfoliocategory')->where('id', $id)->update(['status' => 1]);
                return redirect()->back()->with('success', 'Successfully Enabled');
            } else {
                DB::table('portfoliocategory')->where('id', $id)->update(['status' => 0]);
                return redirect()->back()->with('danger', 'Successfully Disabled');
            }
        }
    }



    // PORTFOLIO SECTION 


    public function createportfolio(Request $request)
    {
        if ($request->isMethod('post')) {
            $input = $request->all();
            unset($input['_token']);

            if ($request->file('image') && $input['type'] == 'image') {
                $images = $request->file('image');
                // dd($images);
                foreach ($images as $value) {
                    $image =  Storage::disk('public_folder')->putFile('portfoli_image', $value, 'public');
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
                    $imgFile->save(public_path('imagepw') . '/' . $parts[1]);
                    // dd($input);
                    DB::table('portfolio')->insert($input);
                }
                return redirect()->back()->with('success', 'Image upload successfully');
            }
            if ($input['type'] == 'video') {
                $images = $request->file('image');
                foreach ($images as $value) {
                    $image =  Storage::disk('public_folder')->putFile('portfoli_image', $value, 'public');
                    $input['image'] = $image;
                    $input['video'] = $input['video'];
                    $input['title'] = $input['title'];
                    DB::table('portfolio')->insert($input);
                }

                return redirect()->back()->with('success', 'Video upload successfully');
            }
        } else {
            $data = DB::table('portfoliocategory')->get();
            return view('portfolio.createportfolio', compact('data'));
        }
    }
    public function editportfolio(Request $request, $id)
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
                $image =  Storage::disk('public_folder')->putFile('portfoli_image', $img, 'public');
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
                $imgFile->save(public_path('imagepw') . '/' . $parts[1]);
                // dd($input);
                DB::table('portfolio')->where('id', $id)->update($input);

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
                    $image =  Storage::disk('public_folder')->putFile('portfoli_image', $img, 'public');
                    $input['image'] = $image;
                }


                $input['video'] = $input['video'];
                $input['title'] = $input['title'];

                // dd($input);
                DB::table('portfolio')->where('id', $id)->update($input);
                // return redirect()->back()->with('success','Video upload Updated');
            }

            return redirect('my-admin/view-portfolio')->with('success', 'Successfully Portfolio Updated');
        } else {
            $data = DB::table('portfolio')->where('id', $id)->first();
            $category = DB::table('portfoliocategory')->get();
            return view('portfolio.editportfolio', compact('data', 'category'));
        }
    }
    public function viewportfolio(Request $request)
    {
        $category = DB::table('portfoliocategory')->get();
        if (isset($request->type)) {
            $collection = DB::table('portfolio')->join('portfoliocategory', 'portfoliocategory.id', '=', 'portfolio.category_id')->where('portfolio.type', $request->type);
        } else {
            $collection = DB::table('portfolio')->join('portfoliocategory', 'portfoliocategory.id', '=', 'portfolio.category_id')->where('portfolio.type', 'image');
        }

        if (isset($request->category)) {
            $collection = $collection->where('portfolio.category_id', $request->category)->select('portfolio.*', 'portfoliocategory.name as categoryname')->orderBy('id', 'DESC')->get();
        } else {
            $collection = $collection->select('portfolio.*', 'portfoliocategory.name as categoryname')->orderBy('id', 'DESC')->get();
        }

        return view('portfolio.viewportfolio', compact('category', 'collection'));
    }

    public function deleportfolio($id)
    {
        $data = DB::table('portfolio')->where('id', $id)->first();

        if (!empty($data)) {
            if (!empty($data->image)) {
                $filename = $data->image;
                $filenamep = public_path() . '/' . $filename;
                File::delete($filenamep);
            }
            DB::table('portfolio')->where('id', $id)->delete();
            return redirect()->back()->with('success', 'Succesfully Deleted');
        } else {
            return redirect()->back()->with('danger', 'Data Not Exist');
        }
    }
    public function enbdisbportfolio($id)
    {
        $find = DB::table('portfolio')->where('id', $id)->first();

        if (!empty($find)) {
            if ($find->status == 0) {
                DB::table('portfolio')->where('id', $id)->update(['status' => 1]);
                return redirect()->back()->with('success', 'Successfully Enabled');
            } else {
                DB::table('portfolio')->where('id', $id)->update(['status' => 0]);
                return redirect()->back()->with('danger', 'Successfully Disabled');
            }
        }
    }
    public function book_now(Request $request)
    {
        // dd($request->id);
        $find = DB::table('portfolio')->where('id', $request->id)->first();
        // dd($find);
        if (!empty($find)) {
            if ($find->book_now == 0) {
                DB::table('portfolio')->where('id', $request->id)->update(['book_now' => 1]);
                echo 'Successfully Enabled';
            } else {
                DB::table('portfolio')->where('id', $request->id)->update(['book_now' => 0]);
                echo 'Successfully Disabled';
            }
        }
    }

    public function portfolio_muldelete(Request $request)
    {
        if ($request->isMethod('post')) {
            $values = $request->input('hg_cart');
            $final = explode(',', $values);
            foreach ($final as $id) {
                $teams = DB::table('portfolio')->where('id', $id)->first();
                // $a = $teams->toArray();
                if (!empty($teams)) {
                    if (!empty($teams->image)) {
                        $filename = $teams->image;
                        $filenamep = public_path() . '/' . $filename;
                        File::delete($filenamep);
                    }
                    DB::table('portfolio')->where('id', $id)->delete();
                }
            }
            // return redirect()->back()->with('success', 'Contest Deleted Sucessfully');
            return 1;
            die;
        }
        // return redirect()->back()->with('success', 'Sorry,failed to delete!!');
        return 2;
        die;
    }
}
