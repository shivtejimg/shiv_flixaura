<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
    public function dashboard()
    {
        $data['activecategory'] = DB::table('portfoliocategory')->where('status',1)->count();
        $data['totalcategory'] = DB::table('portfoliocategory')->count();
        $data['activeportfolio'] = DB::table('portfolio')->where('status',1)->count();
        $data['totalportfolio'] = DB::table('portfolio')->count();
        $data['activebooking'] = DB::table('booking')->where('status',0)->count();
        $data['totalbooking'] = DB::table('booking')->count();
        $data['activecontactus'] = DB::table('contactus')->where('status',0)->count();
        $data['totalcontactus'] = DB::table('contactus')->count();
        $data['topcity'] = DB::table('city')->where('top_location',1)->count();
        $data['totalcity'] = DB::table('city')->count();
        $data['activeimage'] = DB::table('photographerportfolio')->where('userid',Auth::user()->id)->where('status',1)->count();
        $data['totalimage'] = DB::table('photographerportfolio')->where('userid',Auth::user()->id)->count();
        return view('admin.dashboard',compact('data'));
    }

    public function index()
    {
        return view('home');
    }

    public function createexpertise(Request $request)
    {
        if ($request->isMethod('post')) {
            $input = $request->all();
            // dd($input);

            unset($input['_token']);
            if (count($request->file('image')) != 3) {
                return redirect()->back()->withInput($input)->with('danger', 'Please Select Only 3 Image');
            }
            if ($request->file('image')) {
                $images = $request->file('image');
                // dd($images);
                DB::table('expertise')->where('category_id',$input['category_id'])->delete();
                foreach ($images as $value) {
                    $image =  Storage::disk('public_folder')->putFile('expertiseimage', $value, 'public');
                    $input['image'] = $image;
                    // dd($input);
                    DB::table('expertise')->insert($input);
                }
                return redirect()->back()->with('success', 'Image upload successfully');
            }
        } else {
            $data = DB::table('portfoliocategory')->get();
            return view('homepage.createexpertise', compact('data'));
        }
    }
    public function editexpertise(Request $request, $id)
    {
        if ($request->isMethod('post')) {
            $input = $request->all();
            unset($input['_token']);


            if ($request->file('image')) {
                $images = $request->file('image');
                $data = DB::table('expertise')->where('id', $id)->first();
                if (!empty($data->image)) {
                    $filename = $data->image;
                    $filenamep = public_path() . '/' . $filename;
                    File::delete($filenamep);
                }

                $img = $request->file('image');
                // dump($img);die;
                $image =  Storage::disk('public_folder')->putFile('expertiseimage', $img, 'public');
                $input['image'] = $image;
                DB::table('expertise')->where('id', $id)->update($input);
            }
            

            return redirect('my-admin/view-expertise')->with('success', 'Successfully Expertise Updated');
        } else {
            $data = DB::table('expertise')->where('id', $id)->first();
            $category = DB::table('portfoliocategory')->get();
            return view('homepage.editexpertise', compact('data', 'category'));
        }
    }
    public function viewexpertise()
    {
        $category = DB::table('portfoliocategory')->get();
        $collection = DB::table('expertise')->join('portfoliocategory', 'portfoliocategory.id', '=', 'expertise.category_id')->orderBy('id','DESC')->select('expertise.*','portfoliocategory.name')->get();
        return view('homepage.viewexpertise', compact('category','collection'));
    }
    public function deleexpertise($id)
    {
        $data = DB::table('expertise')->where('id', $id)->first();

        if (!empty($data)) {
            if (!empty($data->image)) {
                $filename = $data->image;
                $filenamep = public_path() . '/' . $filename;
                File::delete($filenamep);
            }
            DB::table('expertise')->where('id', $id)->delete();
            return redirect()->back()->with('success', 'Succesfully Deleted');
        } else {
            return redirect()->back()->with('danger', 'Data Not Exist');
        }
    }

    public function viewcarrier()
    {
        $collection = DB::table('careers')->where('status','!=',2)->orderBy('id','DESC')->select('careers.*')->get();
        return view('carrier.viewcarrier',compact('collection'));
    }

    public function enbdisbcarrier($id)
    {
        $find = DB::table('careers')->where('id', $id)->first();

        if (!empty($find)) {
            if ($find->status == 1) {
                DB::table('careers')->where('id', $id)->update(['status' => 0]);
                return redirect()->back()->with('success', 'Successfully Changed');
            }
        }
    }

    public function deletecarrier($id)
    {
        $find = DB::table('careers')->where('id', $id)->first();

        if (!empty($find)) {
            DB::table('careers')->where('id', $id)->update(['status' => 2]);
            return redirect()->back()->with('success', 'Successfully Deleted');
        }
    }
}
