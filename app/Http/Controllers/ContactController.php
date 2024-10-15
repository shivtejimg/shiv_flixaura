<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use DB;

class ContactController extends Controller
{
    public function viewbooking()
    {
        $collection = DB::table('booking')->join('city','city.id','=','booking.location')->where('status','!=',2)->orderBy('id','DESC')->select('booking.*','city.city_name')->get();
        return view('contact.viewbooking',compact('collection'));
    }
    public function enbdispcategory($id)
    {
        $find = DB::table('category')->where('id', $id)->first();

        if (!empty($find)) {
            if ($find->status == 0) {
                DB::table('category')->where('id', $id)->update(['status' => 1]);
                return redirect()->back()->with('success', 'Successfully Enabled');
            } else {
                DB::table('category')->where('id', $id)->update(['status' => 0]);
                return redirect()->back()->with('danger', 'Successfully Disabled');
            }
        }
    }

    public function viewcontact()
    {
        $collection = DB::table('contactus')->where('status','!=',2)->orderBy('id','DESC')->get();
        return view('contact.viewcontact',compact('collection'));
    }
    public function enbdisbcontactus($id)
    {
        $find = DB::table('contactus')->where('id', $id)->first();

        if (!empty($find)) {
            if ($find->status == 0) {
                DB::table('contactus')->where('id', $id)->update(['status' => 1]);
                return redirect()->back()->with('success', 'Successfully Changed');
            }
        }
    }

    public function deletecontactus($id)
    {
        $find = DB::table('contactus')->where('id', $id)->first();

        if (!empty($find)) {
            DB::table('contactus')->where('id', $id)->update(['status' => 2]);
            return redirect()->back()->with('success', 'Successfully Deleted');
        }
    }



    public function enbdisbcontact($id)
    {
        $find = DB::table('booking')->where('id', $id)->first();

        if (!empty($find)) {
            if ($find->status == 0) {
                DB::table('booking')->where('id', $id)->update(['status' => 1]);
                return redirect()->back()->with('success', 'Successfully Changed');
            }
        }
    }

    public function deletecontact($id)
    {
        $find = DB::table('booking')->where('id', $id)->first();

        if (!empty($find)) {
            DB::table('booking')->where('id', $id)->update(['status' => 2]);
            return redirect()->back()->with('success', 'Successfully Deleted');
        }
    }

}
