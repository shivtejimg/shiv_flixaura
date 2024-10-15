<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\Career;
use Illuminate\Http\RedirectResponse;
use DB;
use App\Traits\SettingsTrait;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\Blog;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMailable;

class WebController extends Controller
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

    public function login(Request $request)
    {
        if (Auth::check()) {
            return redirect()->route('dashboard');
        } else {
            return view('frontend.photographer.login');
        }
    }

    public function loginphotographer(LoginRequest $request): RedirectResponse
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed
            $request->session()->regenerate();
            return redirect()->intended(RouteServiceProvider::HOME);
        }

        // Authentication failed
        return redirect()->route('website.login')->with('error', 'Invalid credentials. Please try again.');
    }

    public function register(Request $request)
    {
        if (Auth::check()) {
            return redirect()->route('dashboard');
        } else {
            if ($request->isMethod('post')) {

                $input = $request->all();
                unset($input['_token']);
                $dataemail = DB::table('photographerrequest')->where('email', $input['email'])->first();
                $datamobile = DB::table('photographerrequest')->where('mobile', $input['mobile'])->first();
                if (!empty($dataemail)) {
                    return redirect()->back()->with('error', 'Email already exists!'); // Save error message in session and redirect back
                }
                if (!empty($datamobile)) {
                    return redirect()->back()->with('error', 'Mobile already exists!');
                }
                if (!empty($request->image)) {
                    $image = $request->image;
                    $destination = public_path('/users/profile/');
                    $filename = 'USER' . rand(1000, 9999) . now()->timestamp . '.png';
                    $info = pathinfo($filename);
                    $imageNamee = $info['filename'];
                    $newfilename = $imageNamee . "." . $info['extension'];
                    $image->move($destination, $newfilename);
                    $input['image'] = asset('public/users/profile/' . $newfilename);
                }
                DB::table('photographerrequest')->insert($input);
                return redirect()->back()->with('success', 'Your Detail Submitted Successfully! Flixaura Team Will Contact You Soon');
            } else {
                return view('frontend.photographer.register');
            }
        }
    }

    public function index()
    {
        $expertise = DB::table('expertise')->join('portfoliocategory', 'expertise.category_id', '=', 'portfoliocategory.id')->select('expertise.*', 'portfoliocategory.name')->get()->groupby('category_id');

        $clientslider = DB::table('clientslider')->orderBy('id','DESC')->get();
        return view('frontend.index', compact('expertise', 'clientslider'));
    }

    public function book_now()
    {
        $cityid = $_GET['id'] ?? '';
        $cities = DB::table('city')->get();
        $category = DB::table('portfoliocategory')->get();
        return view('frontend.book-now.index', compact('cities', 'cityid', 'category'));
    }
    public function about_us()
    {
        return view('frontend.about-us.index');
    }
    public function contact_us()
    {
        return view('frontend.contact-us.index');
    }

    public function categories()
    {
        $data = DB::table('portfoliocategory')->where('status', 1)->orderBy('id', 'DESC')->get();
        return view('frontend.categories.index', compact('data'));
    }
    public function single_category($slug)
    {

        $trimmed = str_replace('-', ' ', $slug);
        $categories = DB::table('portfoliocategory')->where('status', 1)->get();
        $portfoliocategory = DB::table('portfoliocategory')->where('name', $trimmed)->where('status', 1)->first();
        $data = DB::table('portfolio')->where('category_id', $portfoliocategory->id)->where('status', 1)->get();

        return view('frontend.single-category.index', compact('data', 'portfoliocategory', 'categories'));
    }

    public function wedding_photography($slug)
    {
        $trimmed = str_replace('-', ' ', $slug);
        $categories = DB::table('portfoliocategory')->where('name', '!=', $trimmed)->where('status', 1)->get();
        $portfoliocategory = DB::table('portfoliocategory')->where('name', $trimmed)->where('status', 1)->first();
        $data = DB::table('portfolio')->where('category_id', $portfoliocategory->id)->where('status', 1)->orderBy('id', 'DESC')->get();
        return view('frontend.portfolio.index', compact('data', 'portfoliocategory', 'categories'));
    }

    public function booknow(Request $request)
    {
        if ($request->isMethod('post')) {
            $input = $request->all();
            $datamessage['subject'] = $input["featured"] . ' - Flixaura';
            $loca = DB::table('city')->where('id', $input["location"])->first();
            $data['content'] = '<html><head><title>' . $datamessage["subject"] . '</title></head><body><table border="1" cellpadding="5" cellspacing="0" style="width: 100%;"><tr><th>Name</th><td>' . $input["name"] . '</td></tr><tr><th>Mobile</th><td>' . $input["mobile"] . '</td></tr><tr><th>Email</th><td>' . $input["email"] . '</td></tr><tr><th>Location</th><td>' . $loca->city_name . '</td></tr><tr><th>Featured</th><td>' . $input["featured"] . '</td></tr><tr><th>Date</th><td>' . date('j-M-Y', strtotime($input["from_date"]))  . ' - ' . date('j-M-Y', strtotime($input["to_date"]))  . '</td></tr>';

            if (isset($input['package'])) {
                $data['content'] .= '<tr><th>Package</th><td>' . $input["package"] . '</td></tr>';
            }

            $data['content'] .= '</table></body></html>';


            unset($input['_token']);
            DB::table('booking')->insert($input);
            $datamessage['content'] = SettingsTrait::commonmailformat($data['content'], env('APP_NAME'));
            Mail::to('flixaura@gmail.com')->send(new SendMailable($datamessage));
            return 1;
        }
    }

    public function contactus(Request $request)
    {

        if ($request->isMethod('post')) {
            $rules = array(
                'name' => 'required',
                'mobile' => 'required',
                'email' => 'required',
                'subject' => 'required',
                'message' => 'required',
            );
            $validator = Validator::make(request()->all(), $rules);
            if ($validator->fails()) {
                // dd($validator->errors());
                return response()->json($validator->errors());
                die;
                // ->withErrors($validator)
                // ->withInput(request()->except('password'));
            } else {
                $input = $request->all();

                unset($input['_token']);
                DB::table('contactus')->insert($input);

                return true;
            }
        }
    }

    public function photographerportfolio($slug)
    {
        $trimmed = str_replace('-', ' ', $slug);
        $categories = DB::table('photographercategory')->where('name', '!=', $trimmed)->where('status', 1)->get();
        $portfoliocategory = DB::table('photographercategory')->where('name', $trimmed)->where('status', 1)->first();
        $data = DB::table('photographerportfolio')->join('users', 'users.id', '=', 'photographerportfolio.userid')->where('photographerportfolio.category_id', $portfoliocategory->id)->where('status', 1)->select('photographerportfolio.*', 'users.name as uname', 'users.image as uimage')->orderBy('photographerportfolio.id','DESC')->get();
        return view('frontend.photographer.portfolio', compact('data', 'portfoliocategory', 'categories'));
    }


    public function photographercategory()
    {
        $categories = DB::table('photographercategory')->where('status', 1)->get();
        return view('frontend.photographer.category', compact('categories'));
    }

    public function blogs(Request $request, $category)
    {
        if (empty($category)) {
            $categoryd = DB::table('blogcategory')->inRandomOrder()->first();
            $category = $categoryd->slug;
        }
        $blog = Blog::join('users', 'users.id', '=', 'blog.writer')->join('blogcategory', 'blogcategory.id', '=', 'blog.category_id')->where('blogcategory.slug', $category)->select('blog.*', 'users.name as username', 'users.image as userimage')->orderBy('blog.id','DESC')->get();
        $category = DB::table('blogcategory')->where('slug', $category)->first();
        if (empty($blog)) {
            return redirect()->back();
        } else {
            return view('frontend.blog.singalblog.index', compact('blog', 'category'));
        }
    }

    public function blog(Request $request)
    {
        $blog = Blog::join('users', 'users.id', '=', 'blog.writer')->join('blogcategory', 'blogcategory.id', '=', 'blog.category_id')->select('blog.*', 'users.name as username', 'users.image as userimage', 'blogcategory.title as catname', 'blogcategory.slug as catslug')->orderBy('blog.id','DESC')->get();
        if (empty($blog)) {
            return redirect()->back();
        } else {
            return view('frontend.blog.index', compact('blog'));
        }
    }

    public function career()
    {
        return view('frontend.career.index');
    }
    public function careersubmit(Request $request)
    {
        // dd($request->all());
        $validation  = $request->validate([

            'name' => 'required',
            'email' => 'required|email',
            'mobile' => 'required|numeric|digits:10',
            'job' => 'required',
            'address' => 'required',
            'description' => 'required',
            'resume' => 'required|file|max:10000|mimes:pdf',
        ]);

        if ($request->file('resume') != "") {
            $validation['job_title'] = $request['job'];
            $validation['bio'] = $request['description'];
            $validation['resumefile'] = rand(1, 1000) . $request->file('resume')->store('', '');
            $request->file('resumefile')->move(public_path('/resume_file'), $validation['resumefile']);
            Career::create($validation);
            return response()->json();
        }
    }



    public function singleBlog(Request $request, $slug)
    {
        $blog = Blog::join('users', 'users.id', '=', 'blog.writer')->where('slug', $slug)->select('blog.*', 'users.name as username', 'users.image as userimage')->first();
        $topblog = Blog::join('blogcategory', 'blogcategory.id', '=', 'blog.category_id')->select('blog.*', 'blogcategory.title as catname', 'blogcategory.slug as catslug')->inRandomOrder()->limit(5)->get();
        $relavantcategory = DB::table('blogcategory')->get();
        if (empty($blog)) {
            return redirect()->back();
        } else {
            return view('frontend.blog.index', compact('blog', 'topblog', 'relavantcategory'));
        }
    }

    public function ourTeam(Request $request)
    {
        return view('frontend.about.index');
    }


    public function ourTeam1(Request $request)
    {
        return view('frontend.gallery.index');
    }

    public function ourTeam2(Request $request)
    {
        return view('frontend.contact-us.index');
    }

    // public function blognew(Request $request)
    // {
    //     return view('frontend.blog.index');
    // }

    public function babyShoot(Request $request)
    {
        $cities = DB::table('city')->get();
        $category = DB::table('portfoliocategory')->get();
        $babyshoot = DB::table('portfolio')->where('category_id',7)->where('type','image')->orderBy('id','DESC')->get();
        return view('frontend.baby-shoot.index',compact('cities','category','babyshoot'));
    }
    public function haldiindex(){
        return view('frontend.our-services.haldi.index');
    }
    public function mehendiindex(){
        return view('frontend.our-services.mehendi.index');
    }
    public function engagementindex(){
        return view('frontend.our-services.engagement.index');
    }
    public function weddingphotographyindex(){
        return view('frontend.our-services.wedding-photography.index');
    }
    public function candidphotographyindex(){
        return view('frontend.our-services.candid-photography.index');
    }
    public function preweddingphotoshootindex(){
        return view('frontend.our-services.pre-wedding-photoshoot.index');
    }
    public function blogDetails(){
        return view('frontend.blog.blog-details.index');
    }
}
