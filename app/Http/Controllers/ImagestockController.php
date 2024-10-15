<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class ImagestockController extends Controller
{
    public function createimagestock(Request $request)
    {
        if ($request->isMethod('post')) {
            $input = $request->all();
            unset($input['_token']);
            if ($request->file('image')) {
                $image = $request->file('image');
                $image =  Storage::disk('public_folder')->putFile('imagestock', $image, 'public');
                $input['image'] = $image;
                $input['userid'] = Auth::user()->id;
                DB::table('imagestocks')->insert($input);
                return redirect()->back()->with('success', 'Image upload successfully');
            }
        } else {
            $data = DB::table('portfoliocategory')->get();
            return view('imagestock.createimage', compact('data'));
        }
    }
    public function editimagestock(Request $request, $id)
    {
        if ($request->isMethod('post')) {
            $input = $request->all();
            unset($input['_token']);
            if ($request->file('image')) {
                $images = $request->file('image');
                $data = DB::table('imagestocks')->where('id', $id)->first();
                if (!empty($data->image)) {
                    $filename = $data->image;
                    $filenamep = public_path() . '/' . $filename;
                    File::delete($filenamep);
                }
                $img = $request->file('image');
                $image =  Storage::disk('public_folder')->putFile('imagestock', $img, 'public');
                $input['image'] = $image;
            }
            DB::table('imagestocks')->where('id', $id)->update($input);

            return redirect('my-admin/view-images')->with('success', 'Successfully Image Updated');
        } else {
            $data = DB::table('imagestocks')->where('id', $id)->first();
            $category = DB::table('portfoliocategory')->get();
            return view('imagestock.editimage', compact('data', 'category'));
        }
    }
    public function viewimagestock()
    {
        $category = DB::table('portfoliocategory')->get();
        if (Auth::user()->hasrole('admin')) {
            $collection = DB::table('imagestocks')->join('portfoliocategory', 'portfoliocategory.id', '=', 'imagestocks.categoryid')->select('imagestocks.*', 'portfoliocategory.name as categoryname')->orderBy('id', 'DESC')->get();
        } else {
            $collection = DB::table('imagestocks')->join('portfoliocategory', 'portfoliocategory.id', '=', 'imagestocks.categoryid')->where('imagestocks.userid',Auth::user()->id)->select('imagestocks.*', 'portfoliocategory.name as categoryname')->orderBy('id', 'DESC')->get();
        }

        return view('imagestock.viewimages', compact('category', 'collection'));
    }

    public function deleimagestock($id)
    {
        $data = DB::table('imagestocks')->where('id', $id)->first();

        if (!empty($data)) {
            if (!empty($data->image)) {
                $filename = $data->image;
                $filenamep = public_path() . '/' . $filename;
                File::delete($filenamep);
            }
            DB::table('imagestocks')->where('id', $id)->delete();
            return redirect()->back()->with('success', 'Succesfully Deleted');
        } else {
            return redirect()->back()->with('danger', 'Data Not Exist');
        }
    }
    public function enbdisbimagestock($id)
    {
        $find = DB::table('imagestocks')->where('id', $id)->first();

        if (!empty($find)) {
            if ($find->status == 0) {
                DB::table('imagestocks')->where('id', $id)->update(['status' => 1]);
                return redirect()->back()->with('success', 'Successfully Enabled');
            } else {
                DB::table('imagestocks')->where('id', $id)->update(['status' => 0]);
                return redirect()->back()->with('danger', 'Successfully Disabled');
            }
        }
    }
}
