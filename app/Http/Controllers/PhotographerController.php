<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Illuminate\Auth\Events\Registered;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class PhotographerController extends Controller
{

    public function viewrequests()
    {
        $collection = DB::table('photographerrequest')->where('status',0)->orderBy('id','DESC')->get();
        return view('photographer.viewphotographerrequest',compact('collection'));
    }

    public function viewphotographers()
    {
        $collection = DB::table('photographerrequest')->where('status',2)->orderBy('id','DESC')->get();
        return view('photographer.viewphotographers',compact('collection'));
    }
   

    public function approverequest($id)
    {
        $userdata = DB::table('photographerrequest')->where('id', $id)->first();
        $user = User::create([
            'name' => $userdata->name,
            'email' => $userdata->email,
            'mobile' => $userdata->mobile,
            'image' => $userdata->image,
            'aadhar' => $userdata->aadhar,
            'address' => $userdata->address,
            'password' => Hash::make($userdata->password),
        ]);
        $user->assignRole('photographer');
        event(new Registered($user));
        DB::table('photographerrequest')->where('id', $id)->update(['status'=>2]);
        return redirect()->back()->with('success', 'Succesfully Approved');
    }

    public function rejectrequest($id)
    {
        DB::table('photographerrequest')->where('id', $id)->update(['status'=>1]);
        return redirect()->back()->with('success', 'Succesfully Rejected');
    }


}
