<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\BlogCategory;
use Illuminate\Support\Facades\Auth;
use App\Traits\SluggableTrait;

class BlogCategoryController extends Controller
{
    use SluggableTrait;
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        if($request->isMethod('post')){
            $input = $request->all();
            unset($input['_token']);
            $checkcategory = BlogCategory::where('title',$input['title'])->first();
            if(!empty($checkcategory)){
                return redirect()->back()->with('error','Title Already Exist !');
            }else{
                if(!empty($input['image'])){
                    $imageName = time().'.'.$request->image->extension();  
                    $request->image->move(public_path('blog'), $imageName);
                    $input['image']=$imageName;
                }
                $input['slug'] = SluggableTrait::generateSlug($input['title']);
                $input['writer'] = Auth::user()->id;
                BlogCategory::insert($input);
                return redirect()->route('blogcategory.view')->with('success','Successfully Added !');
            }
        }else{
            return view('blogcategory.addcategory');
        }
    }

    public function view()
    {
        $collection = BlogCategory::join('users','users.id','blogcategory.writer')->select('blogcategory.*','users.name as writername')->orderBy('id','DESC')->get();
        return view('blogcategory.viewcategory',compact('collection'));
    }

    public function edit(Request $request,$id)
    {
        if($request->isMethod('post')){
            $input = $request->all();
            unset($input['_token']);
            $checkcategory = BlogCategory::where('id','<>',$id)->where('title',$input['title'])->first();
            if(!empty($checkcategory)){
                return redirect()->back()->with('error','Title Already Exist !');
            }else{
                if(!empty($input['image'])){
                    $data = BlogCategory::where('id',$id)->first();
                    if(file_exists(public_path('blog/'.$data->image))) {
                        // Delete the file
                        unlink(public_path('blog/'.$data->image));
                    }
                    $imageName = time().'.'.$request->image->extension();  
                    $request->image->move(public_path('blog'), $imageName);
                    $input['image']=$imageName;
                }
                $input['slug'] = SluggableTrait::generateSlug($input['title']);
                BlogCategory::where('id',$id)->update($input);
                return redirect()->route('blogcategory.view')->with('success','Successfully Updated !');
            }
        }else{
            $collection = BlogCategory::where('id',$id)->first();
            return view('blogcategory.editcategory',compact('collection'));
        }
    }

    public function delete(Request $request,$id)
    {
        $data = BlogCategory::where('id',$id)->first();
        if(file_exists(public_path('blog/'.$data->image))) {
            // Delete the file
            unlink(public_path('blog/'.$data->image));
        }
        BlogCategory::where('id',$id)->delete();
        return redirect()->back()->with('error', 'Successfully Deleted !');
    }

    public function enbdiscategory($id)
    {
        $find = DB::table('blogcategory')->where('id', $id)->first();

        if (!empty($find)) {
            if ($find->status == 0) {
                DB::table('blogcategory')->where('id', $id)->update(['status' => 1]);
                return redirect()->back()->with('success', 'Successfully Enabled');
            } else {
                DB::table('blogcategory')->where('id', $id)->update(['status' => 0]);
                return redirect()->back()->with('danger', 'Successfully Disabled');
            }
        }
    }
}
