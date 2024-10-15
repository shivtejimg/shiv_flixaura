<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use DB;
use App\Traits\SettingsTrait;

class FrontController extends Controller
{
    public function homepage()
    {
        if (request()->isMethod('post')) {

            $input = request()->except('_token');

            if (empty($input['input'])) {
                return back()->with('error', 'Please provide data to update');
            }

            if (!empty($input['input'])) {
                foreach ($input['input'] as $name => $value) {

                    # if logo
                    if (is_file($value)) {
                        $image = $value;
                        $destination = public_path();
                        $filename = $name . '.png';
                        $data['value'] = SettingsTrait::logoUpload($image, $destination, $filename);

                        if ($data['value'] == '') {
                            return redirect()->back()->with('danger', 'Invalid extension of file you uploaded. You can only upload image.');
                        }

                        $data['name'] = $name;
                        $data['value'] = $value = $data['value'];
                    } else {
                        $data['name'] = $name;
                        $data['value'] = $value;
                    }

                    $is_exists = DB::table('homepage')
                        ->where('name', $name)
                        ->first();

                    if (!empty($is_exists) and !empty($value)) {
                        DB::table('homepage')
                            ->where('name', $name)
                            ->update($data);
                    } else if (!empty($value)) {
                        DB::table('homepage')
                            ->insert($data);
                    }
                }
            }

            return redirect()->back()->with('success', 'Done');
        } else {
            $homepage = DB::table('homepage')
                ->pluck('value', 'name')
                ->toArray();

            $homepage = (object) $homepage;
            return view('webchange.homepage', compact('homepage'));
        }
    }
}
