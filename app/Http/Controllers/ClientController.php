<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use File;
use Illuminate\Support\Facades\Storage;
use Image;

class ClientController extends Controller
{
    public function createclientslider(Request $request)
    {
        if ($request->isMethod('post')) {
            $input = $request->all();
            unset($input['_token']);
            if ($request->file('image')) {
                $image =  Storage::disk('public_folder')->putFile('clientslider', $input['image'], 'public');
                $input['image'] = $image;
            }
            DB::table('clientslider')->insert($input);
            return redirect('my-admin/view-clientslider')->with('success', 'Successfully Slider Added');
        } else {
            return view('clientslider.createclientslider');
        }
    }
    public function viewclientslider()
    {
        $collection = DB::table('clientslider')->orderBy('id', 'DESC')->get();
        return view('clientslider.viewpclientslider', compact('collection'));
    }

    public function deleclientslider($id)
    {
        $data = DB::table('clientslider')->where('id', $id)->first();

        if (!empty($data)) {
            if (!empty($data->image)) {
                $filename = $data->image;
                $filenamep = public_path() . '/' . $filename;
                File::delete($filenamep);
            }
            DB::table('clientslider')->where('id', $id)->delete();
            return redirect()->back()->with('success', 'Succesfully Deleted');
        } else {
            return redirect()->back()->with('danger', 'Data Not Exist');
        }
    }
    public function enbdisbclientslider($id)
    {
        $find = DB::table('clientslider')->where('id', $id)->first();

        if (!empty($find)) {
            if ($find->status == 0) {
                DB::table('clientslider')->where('id', $id)->update(['status' => 1]);
                return redirect()->back()->with('success', 'Successfully Enabled');
            } else {
                DB::table('clientslider')->where('id', $id)->update(['status' => 0]);
                return redirect()->back()->with('danger', 'Successfully Disabled');
            }
        }
    }
}
