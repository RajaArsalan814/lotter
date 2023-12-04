<?php

use Illuminate\Support\Facades\Route;
// For Admin
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\AgentController;
use App\Http\Controllers\LotteryController;
use App\Http\Controllers\Admin\MasterController;


// For User
use App\Http\Controllers\User\UserController as UController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();



Route::controller(\App\Http\Controllers\FrontController::class)->group(function () {

  //  route::get('/','index')->name('index');
   route::get('/','user_login')->name('user-login')->middleware('guest');
   route::post('loginAdminProcess','loginAdminProcess')->name('loginAdminProcess');

   route::get('user-register','userRegister')->name('user-register');
   route::post('user-register-process','RegisterProcess')->name('user-register-process');

   Route::get('forgot-password', 'forgotPasswords')->name('forgot-password');
   Route::post('forgotPassword', 'forgotPassword')->name('forgotPassword');
   Route::post('updatePassword', 'updatePassword')->name('updatePassword');
   route::get('resetpassword/{id}','resetpassword')->name('resetpassword');

   route::get('search','search')->name('search');
   route::get('get-products','getProducts')->name('get-products');
   route::get('search/{name}','searchProduct')->name('search.products');

   route::get('home_page','home_page')->name('home_page');
   route::get('next_page','next_page')->name('next_page');
   route::get('submit_data','submit_data')->name('submit_data');
   route::get('hit_me','hit_me')->name('hit_me');


});



Route::middleware(['auth'])->prefix('admin')->group(function()
{
    Route::resource('users', UserController::class);
    Route::resource('agent', AgentController::class);
    Route::resource('master', MasterController::class);

    Route::controller(MasterController::class)->group(function ()
    {
        Route::post('my_store', 'my_store')->name('master.my_store');
    });


    Route::controller(AgentController::class)->group(function ()
    {
        Route::get('users_get/{id}', 'users_get')->name('users_get');
    });

    Route::resource('setting', SettingController::class);
    Route::resource('roles', RoleController::class);

    Route::controller(UserController::class)->group(function ()
    {
        Route::get('user_edit/{id}', 'user_edit')->name('user_edit');
        Route::post('user_update', 'user_update')->name('user_update');
    });


    Route::controller(AdminController::class)->group(function ()
      {
          Route::get('dashboard', 'dashboard')->name('dashboard');
          Route::get('profile', 'profile')->name('profile');
          Route::get('change-status', 'change_status')->name('change-status');
          Route::get('list', 'list')->name('list');
          route::post('profile-update','profileUpdate')->name('profile-update');
          Route::post('who_win','who_win')->name('who_win');
    });


    Route::controller(LotteryController::class)->group(function ()
    {
        Route::get('lottery', 'index')->name('lottery.index');
        Route::get('create', 'create')->name('lottery.create');
        Route::post('store', 'store')->name('lottery.store');
        Route::get('edit/{id}', 'edit')->name('lottery.edit');
        Route::post('update','update')->name('lottery.update');
        Route::get('lottery_add_on', 'add_on')->name('lottery.add_on');
        Route::post('add_on_store', 'add_on_store')->name('lottery.add_on_store');
        Route::get('add_on_index', 'add_on_index')->name('lottery.add_on_index');
        Route::get('my_lottery', 'my_lottery')->name('lottery.my_lottery');
        Route::get('all_lotteries', 'all_lotteries')->name('lottery.all_lotteries');
        Route::get('lottery_set_edit/{id}', 'lottery_set_edit')->name('lottery.lottery_set_edit');
        Route::post('lottery_set_update', 'lottery_set_update')->name('lottery.lottery_set_update');
    });

});

Route::middleware(['auth','can:isUser'])->prefix('user')->group(function(){
    Route::controller(UController::class)->group(function () {
  });
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('logout', [App\Http\Controllers\HomeController::class, 'logout'])->name('logout');
Route::get('/check',function(){
  return "asdads";
});

Route::get('cron_call_function', [App\Http\Controllers\LotteryController::class, 'cron_call_function']);



