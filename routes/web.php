<?php

use App\Http\Controllers\FeatuerController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\SubscriberController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\TestmonialsController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/ // front routes
Route::name('front.')->controller(FrontController::class)->group(function(){
    Route::post('/subscriber/store' ,'subscriber')->name('subscriber.store');
    Route::get('/' , 'index')->name('index');
    //==================================
    Route::get('/about' , 'about')->name('about');
    //==================================
    Route::get('/services' , 'services')->name('services');
    //==================================
    Route::post('contact/store' , 'store')->name('contact.store');
    Route::get('/contact' , 'contact')->name('contact');
});

// ======================================
//admin routes
Route::name('admin.')->prefix(LaravelLocalization::setLocale(). '/admin')
->middleware([ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ])
->group(function (){
    //==================================
    Route::middleware('auth')->group(function(){
    //==================================
    Route::view('/' , 'admin.index')->name('index');
    //============================================ Services Routes
    Route::controller(ServiceController::class)->group(function (){
        Route::resource('services', ServiceController::class);
    });
     //============================================ Featuers Routes
     Route::controller(FeatuerController::class)->group(function (){
        Route::resource('featuers', FeatuerController::class);
    });
      //============================================ Messages Routes
      Route::controller(MessageController::class)->group(function (){
        Route::resource('messages', MessageController::class)->only(['index' , 'show' , 'destroy']);
    });

     //============================================ Subscribers Routes
     Route::controller(SubscriberController::class)->group(function (){
        Route::resource('subscribers', SubscriberController::class)->only(['index' , 'show' , 'destroy']);
    });
     //============================================ Tests Routes
    Route::controller(TestController::class)->group(function (){
        Route::resource('tests', TestController::class);
    });

        //============================================ Settings Routes
        Route::controller(SettingController::class)->group(function (){
            Route::resource('settings', SettingController::class)->only(['index' , 'update']);
        });



    });

require __DIR__.'/auth.php';

});





//==================================





//Route::get('/', function () {
  //  return view('front.index');
//});

/*Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});*/

