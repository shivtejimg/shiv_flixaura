<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class CityController extends Controller
{
    public function add_city(Request $request)
    {
        if ($request->isMethod('post')) {
            $input = $request->all();
            // dd($input);
            unset($input['_token']);
            $find = DB::table('city')->where('city_name', $input['city_name'])->first();
            if (empty($find)) {
                DB::table('city')->insert($input);
                return redirect('/my-admin/add-city')->with('success', 'Successfully Add');
            } else {
                return redirect('/my-admin/add-city')->with('error', 'City Already Exist');
            }
        } else {
            return view('city.addcity');
        }
    }

    public function view_city()
    {
        $collection = DB::table('city')->orderBy('id','DESC')->get();
        return view('city.viewcity',compact('collection'));
    }
   
    public function update_location(Request $request)
    {
        // dd($request->all());
        $find = DB::table('city')->where('id', $request->id)->first();
        // dd($find);
        if (!empty($find)) {
            if ($find->top_location == 0) {
                DB::table('city')->where('id', $request->id)->update(['top_location' => 1]);
                echo 'Successfully Enabled';
            } else {
                DB::table('city')->where('id', $request->id)->update(['top_location' => 0]);
                echo 'Successfully Disabled';
            }
        }
    }

    public function delepity($id)
    {
        DB::table('city')->where('id', $id)->delete();
        return redirect()->back()->with('success', 'Succesfully Deleted');
    }
}
