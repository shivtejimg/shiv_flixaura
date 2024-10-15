<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Blog;
use Illuminate\Support\Facades\Auth;
use App\Traits\SluggableTrait;

class BlogController extends Controller
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
            $checkcategory = Blog::where('title',$input['title'])->first();
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
                Blog::insert($input);
                return redirect()->route('blog.view')->with('success','Successfully Added !');
            }
        }else{
            $data = DB::table('blogcategory')->get();
            return view('blog.addblog',compact('data'));
        }
    }

    public function view()
    {
        $collection = Blog::join('blogcategory','blogcategory.id','blog.category_id')->join('users','users.id','blog.writer')->select('blog.*','blogcategory.title as categoryname','users.name as writername')->orderBy('id','DESC')->get();
        return view('blog.viewblog',compact('collection'));
    }

    public function edit(Request $request,$id)
    {
        if($request->isMethod('post')){
            $input = $request->all();
            unset($input['_token']);
            $checkcategory = Blog::where('id','<>',$id)->where('title',$input['title'])->first();
            if(!empty($checkcategory)){
                return redirect()->back()->with('error','Title Already Exist !');
            }else{
                if(!empty($input['image'])){
                    $data = Blog::where('id',$id)->first();
                    if(file_exists(public_path('blog/'.$data->image))) {
                        // Delete the file
                        unlink(public_path('blog/'.$data->image));
                    }
                    $imageName = time().'.'.$request->image->extension();  
                    $request->image->move(public_path('blog'), $imageName);
                    $input['image']=$imageName;
                }
                $input['slug'] = SluggableTrait::generateSlug($input['title']);
                Blog::where('id',$id)->update($input);
                return redirect()->route('blog.view')->with('success','Successfully Updated !');
            }
        }else{
            $data = DB::table('blogcategory')->get();
            $collection = Blog::where('id',$id)->first();
            return view('blog.editblog',compact('data','collection'));
        }
    }

    public function delete(Request $request,$id)
    {
        $data = Blog::where('id',$id)->first();
        if(file_exists(public_path('blog/'.$data->image))) {
            // Delete the file
            unlink(public_path('blog/'.$data->image));
        }
        Blog::where('id',$id)->delete();
        return redirect()->back()->with('error', 'Successfully Deleted !');
    }
}
