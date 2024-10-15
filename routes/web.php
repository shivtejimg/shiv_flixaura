<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\WebController;
use Spatie\Sitemap\SitemapGenerator;
use App\Http\Controllers\SitemapController;
use App\Http\Controllers\PhotographerController;
use App\Http\Controllers\ImagestockController;
use App\Http\Controllers\PhotographerportfolioController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\BlogCategoryController;
use App\Http\Controllers\ClientController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::fallback(function () {
    return view('errors.404');
});



/*--------------  ADMIN ROUTES STARTS -----------------*/
Route::group(['prefix' => 'my-admin'], function () {
    
    Route::group(['auth','middleware' => ['role:admin|photographer|user']], function () {
        Route::any('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');

        Route::middleware('auth')->group(function () {
            Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
            Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
            Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
            Route::get('/password', [ProfileController::class, 'editpass'])->name('password.edit');
            Route::post('/password', [ProfileController::class, 'updatepass'])->name('updatepass.update');
        });

         /*
        |--------------------------------------------------------------------------
        | Image Stock Manager
        |--------------------------------------------------------------------------
        // */
        // Route::any('/add-image', [ImagestockController::class, 'createimagestock'])->name('createimagestock');
        // Route::any('/edit-image/{id}', [ImagestockController::class, 'editimagestock'])->name('editimagestock');
        // Route::any('/delete-image/{id}', [ImagestockController::class, 'deleimagestock'])->name('deleimagestock');
        // Route::any('/enbdisbimage/{id}', [ImagestockController::class, 'enbdisbimagestock'])->name('enbdisbimagestock');
        // Route::any('/view-images', [ImagestockController::class, 'viewimagestock'])->name('viewimagestock');

         /*
        |--------------------------------------------------------------------------
        | Photographer Portfolio Manager
        |--------------------------------------------------------------------------
        */
        Route::any('/add-photoportfolio', [PhotographerportfolioController::class, 'createphotoportfolio'])->name('createphotoportfolio');
        Route::any('/edit-photoportfolio/{id}', [PhotographerportfolioController::class, 'editphotoportfolio'])->name('editphotoportfolio');
        Route::any('/delete-photoportfolio/{id}', [PhotographerportfolioController::class, 'delephotoportfolio'])->name('delephotoportfolio');
        Route::any('/enbdisbphotoportfolio/{id}', [PhotographerportfolioController::class, 'enbdisbphotoportfolio'])->name('enbdisbphotoportfolio');
        Route::any('/view-photoportfolio', [PhotographerportfolioController::class, 'viewphotoportfolio'])->name('viewphotoportfolio');

    });

    Route::group(['auth','middleware' => ['role:admin']], function () {
        Route::any('/settings', [SettingController::class, 'index'])->name('settings');

        /*
        |--------------------------------------------------------------------------
        | Portfolio Category Manager
        |--------------------------------------------------------------------------
        */
        Route::any('add-category', [PortfolioController::class, 'createpcategory'])->name('category.createpcategory');
        Route::any('edit-category/{id}', [PortfolioController::class, 'editpcategory'])->name('category.editpcategory');
        Route::any('delete-category/{id}', [PortfolioController::class, 'delepcategory'])->name('category.delepcategory');
        Route::any('view-category', [PortfolioController::class, 'viewpcategory'])->name('category.viewpcategory');
        Route::any('enbdisbpcategory/{id}', [PortfolioController::class, 'enbdisbpcategory'])->name('category.enbdisbpcategory');

        /*
        |--------------------------------------------------------------------------
        | Portfolio Manager
        |--------------------------------------------------------------------------
        */
        Route::any('/add-portfolio', [PortfolioController::class, 'createportfolio'])->name('portfolio.createportfolio');
        Route::any('/edit-portfolio/{id}', [PortfolioController::class, 'editportfolio'])->name('portfolio.editportfolio');
        Route::any('/delete-portfolio/{id}', [PortfolioController::class, 'deleportfolio'])->name('portfolio.deleportfolio');
        Route::any('/portfolio_muldelete', [PortfolioController::class, 'portfolio_muldelete'])->name('portfolio.portfolio_muldelete');
        Route::any('/enbdisbportfolio/{id}', [PortfolioController::class, 'enbdisbportfolio'])->name('portfolio.enbdisbportfolio');
        Route::any('/book-now', [PortfolioController::class, 'book_now'])->name('portfolio.book_now');
        Route::any('/view-portfolio', [PortfolioController::class, 'viewportfolio'])->name('portfolio.viewportfolio');

        /*
        |--------------------------------------------------------------------------
        | Contact Manager
        |--------------------------------------------------------------------------
        */
        Route::any('/view-booking', [ContactController::class, 'viewbooking'])->name('contact.viewbooking');
        Route::any('/enbdisbcontact/{id}', [ContactController::class, 'enbdisbcontact'])->name('contact.enbdisbcontact');
        Route::any('/deletecontact/{id}', [ContactController::class, 'deletecontact'])->name('contact.deletecontact');
        Route::any('/view-contact', [ContactController::class, 'viewcontact'])->name('contact.viewcontact');
        Route::any('/enbdisbcontactus/{id}', [ContactController::class, 'enbdisbcontactus'])->name('contact.enbdisbcontactus');
        Route::any('/deletecontactus/{id}', [ContactController::class, 'deletecontactus'])->name('contact.deletecontactus');


        /*
        |--------------------------------------------------------------------------
        | City Manager
        |--------------------------------------------------------------------------
        */
        Route::any('/add-city',[CityController::class, 'add_city'])->name('city.add_city');
        Route::any('/view-city',[CityController::class, 'view_city'])->name('city.view_city');
        Route::any('/updatelocation', [CityController::class, 'update_location'])->name('city.update_location');
        Route::any('/delete/{id}', [CityController::class, 'delepity'])->name('city.delepity');


        /*
        |--------------------------------------------------------------------------
        | HOME PAGE Manager
        |--------------------------------------------------------------------------
        */
        Route::any('/create-expertise',[HomeController::class, 'createexpertise'])->name('city.createexpertise');
        Route::any('/edit-expertise/{id}',[HomeController::class, 'editexpertise'])->name('city.editexpertise');
        Route::any('/deleexpertise/{id}',[HomeController::class, 'deleexpertise'])->name('city.deleexpertise');
        Route::any('/expertisedatatable', [HomeController::class, 'expertisedatatable'])->name('city.expertisedatatable');
        Route::any('/expertise_muldelete', [HomeController::class, 'expertise_muldelete'])->name('city.expertise_muldelete');
        Route::any('/enbdisbexpertise/{id}', [HomeController::class, 'enbdisbexpertise'])->name('city.enbdisbexpertise');
        Route::any('/view-expertise', [HomeController::class, 'viewexpertise'])->name('city.viewexpertise');


        /*
        |--------------------------------------------------------------------------
        | Photographer Manager
        |--------------------------------------------------------------------------
        */
        Route::any('/view-photographersRequest',[PhotographerController::class, 'viewrequests'])->name('photographer.viewrequests');
        Route::any('/approverequest/{id}', [PhotographerController::class, 'approverequest'])->name('photographer.approverequest');
        Route::any('/rejectrequest/{id}', [PhotographerController::class, 'rejectrequest'])->name('photographer.rejectrequest');
        Route::any('/view-photographers',[PhotographerController::class, 'viewphotographers'])->name('photographer.viewphotographers');


         /*
        |--------------------------------------------------------------------------
        | Photographers Category Manager
        |--------------------------------------------------------------------------
        */
        Route::any('add-photocategory', [PhotographerportfolioController::class, 'createpphotocategory'])->name('category.createpphotocategory');
        Route::any('edit-photocategory/{id}', [PhotographerportfolioController::class, 'editpphotocategory'])->name('category.editpphotocategory');
        Route::any('delete-photocategory/{id}', [PhotographerportfolioController::class, 'delepphotocategory'])->name('category.delepphotocategory');
        Route::any('view-photocategory', [PhotographerportfolioController::class, 'viewpphotocategory'])->name('category.viewpphotocategory');
        Route::any('enbdisbphotocategory/{id}', [PhotographerportfolioController::class, 'enbdisbphotocategory'])->name('category.enbdisbphotocategory');


        //Blog
        Route::any('add-blogcategory',[BlogCategoryController::class, 'index'])->name('blogcategory.index');
        Route::any('view-blogcategory',[BlogCategoryController::class, 'view'])->name('blogcategory.view');
        Route::any('edit-blogcategory/{id}',[BlogCategoryController::class, 'edit'])->name('blogcategory.edit');
        Route::any('delete-blogcategory/{id}',[BlogCategoryController::class, 'delete'])->name('blogcategory.delete');
        Route::any('enbdiscategory/{id}', [BlogCategoryController::class, 'enbdiscategory'])->name('blogcategory.enbdiscategory');



        Route::any('add-blog',[BlogController::class, 'index'])->name('blog.index');
        Route::any('view-blog',[BlogController::class, 'view'])->name('blog.view');
        Route::any('edit-blog/{id}',[BlogController::class, 'edit'])->name('blog.edit');
        Route::any('delete-blog/{id}',[BlogController::class, 'delete'])->name('blog.delete');



         /*
        |--------------------------------------------------------------------------
        | Client Manager
        |--------------------------------------------------------------------------
        */
        Route::any('add-clientslider', [ClientController::class, 'createclientslider'])->name('client.createclientslider');
        Route::any('delete-clientslider/{id}', [ClientController::class, 'deleclientslider'])->name('client.deleclientslider');
        Route::any('view-clientslider', [ClientController::class, 'viewclientslider'])->name('client.viewclientslider');
        Route::any('enbdisbpclientslider/{id}', [ClientController::class, 'enbdisbclientslider'])->name('client.enbdisbclientslider');


        Route::any('view-carrier',[HomeController::class, 'viewcarrier'])->name('carrier.view');
        Route::any('/enbdisbcarrier/{id}', [HomeController::class, 'enbdisbcarrier'])->name('carrier.enbdisbcarrier');
        Route::any('/deletecarrier/{id}', [HomeController::class, 'deletecarrier'])->name('carrier.deletecarrier');
        /*
        |--------------------------------------------------------------------------
        | Website Manager
        |--------------------------------------------------------------------------
        */

        Route::any('/homepage', [WebController::class, 'homepage'])->name('website.homepage');

    });
});


// Route::get("/sitemap.xml", [SitemapsController::class, 'Posts'])->name('website.Posts');

Route::get('/', [WebController::class, 'index'])->name('website.webhomepage');
Route::get('/book-now', [WebController::class, 'book_now'])->name('website.book_now');
Route::get('about-us', [WebController::class, 'ourTeam'])->name('website.about_us');
Route::get('contact-us', [WebController::class, 'ourTeam2'])->name('website.contact_us');


Route::get('gallery', [WebController::class, 'ourTeam1'])->name('website.gallery');
// Route::get('blog', [WebController::class, 'blognew'])->name('website.blog');
Route::get('blog-details',[WebController::class, 'blogDetails'])->name('blog.details');


// Route::get('contact-us', [WebController::class, 'contact_us'])->name('website.contact_us');
Route::any('contactus', [WebController::class, 'contactus'])->name('website.contactus');
Route::any('contactsendmail', [WebController::class, 'contactsendmail'])->name('website.contactsendmail');
Route::any('sendbooknow', [WebController::class, 'booknow'])->name('website.booknow');
Route::any('/bookingsendmail', [WebController::class, 'bookingsendmail'])->name('website.bookingsendmail');
Route::get('/portfolio-categories', [WebController::class, 'categories'])->name('portfolio-categories');
Route::get('/portfolio/{slug}', [WebController::class, 'wedding_photography'])->name('website.wedding_photography');
Route::get('/simple-category/{slug}', [WebController::class, 'single_category'])->name('website.single_category');
Route::any('/login', [WebController::class, 'login'])->name('website.login');
Route::any('/loginphotographer', [WebController::class, 'loginphotographer'])->name('website.loginphotographer');
Route::any('/register', [WebController::class, 'register'])->name('website.register');
Route::get('/photographer/{slug}', [WebController::class, 'photographerportfolio'])->name('website.photographerportfolio');
Route::any('/photogrphers-category', [WebController::class, 'photographercategory'])->name('website.photographercategory');
Route::any('/blog', [WebController::class, 'blog'])->name('website.blog');
Route::any('/career', [WebController::class, 'career'])->name('website.career');
Route::post('/careersubmit', [WebController::class, 'careersubmit'])->name('website.career.submit');
Route::get('/blogs/category/{category}', [WebController::class, 'blogs'])->name('website.blogscategory');
Route::get('/blog/{slug}', [WebController::class, 'singleBlog'])->name('website.singleBlog');

Route::get('services/haldi', [WebController::class, 'haldiindex'])->name('services.haldi');
Route::get('services/mehendi', [WebController::class, 'mehendiindex'])->name('services.mehendi');
Route::get('services/engagement', [WebController::class, 'engagementindex'])->name('services.engagement');
Route::get('services/wedding-photography', [WebController::class, 'weddingphotographyindex'])->name('services.wedding-photography');
Route::get('services/candid-photography', [WebController::class, 'candidphotographyindex'])->name('services.candid-photography');
Route::get('services/pre-wedding-photoshoot', [WebController::class, 'preweddingphotoshootindex'])->name('services.pre-wedding-photoshoot');





Route::get('/thankyou', function () {
    return view('frontend.thankyoupage.index');
})->name('thankyou-page');
Route::get('/sitemap', [SitemapController::class, 'index']);
Route::get('/sitemap.xml', [SitemapController::class, 'sitemap']);

Route::get('our-partner', function () {
    return view('frontend.our-partner.index');
})->name('our-partner');
Route::get('/baby-shoot', [WebController::class, 'babyShoot'])->name('website.babyShoot');


require __DIR__ . '/auth.php';
