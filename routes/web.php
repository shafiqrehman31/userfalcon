<?php


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

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('user')->group(function () {
    Route::get('cache-clear', function() {
        $exitCode = Artisan::call('cache:clear');
         return 'cache:cleared';
    });
    Route::get('config-clear', function() {
        $exitCode = Artisan::call('config:clear');
         return 'config:cleared';
    });
    Route::get('route-clear', function() {
        $exitCode = Artisan::call('route:clear');
        return 'route:cleared';
    });
    Route::get('view-clear', function() {
        $exitCode = Artisan::call('view:clear');
        return 'view:cleared';
    });
    Route::get('/', 'UserController@ShowUserLoginPage');
    Route::get('login', 'UserController@ShowUserLoginPage');
    Route::post('dologin', 'UserController@LoginUser');
    Route::get('dologin', 'UserController@LoginUser');

    //Route::post('login', 'UserController@ShowUserLoginPage');
    Route::post('logout', 'UserController@LogoutUser');
    Route::get('logout', 'UserController@LogoutUser');
    Route::get('register', 'UserController@ShowUserRegistrationPage');
    Route::post('register', 'UserController@UserResgisteration');
    Route::get('forgot-password', 'UserController@ForgotPasswordView');
    Route::post('reset_password_without_token', 'UserController@validatePasswordRequest');
    Route::post('reset_password_with_token', 'UserController@resetPassword');
    Route::get('reset_password/{id}', 'UserController@showUpdatePasswordView');
    Route::post('update_password', 'UserController@updatePassword');
    Route::get('password/reset/{token}', 'UserController@validateToken');
    Route::get('reset-password-view/{token?}{email?}', 'UserController@ShowUpdatePasswordView');
    Route::post('update-password', 'UserController@UpdatePassword');
    //Auth::routes();
    //Route::get('dashboard', 'DashboardController@index')->name('home');

});






Route::prefix('user')->middleware(['validAdmin'])->group(function () {

    //Route::get('updateUserFontCSS', 'FontController@updateUserFontCSS');


    Route::get('dashboard', 'DashboardController@index')->name('home');



    /*Image Category*/

    //Route::get('home', [HomeController::Class, 'Index']);
    //User Controller
    Route::get('accountdetails', 'UserController@ShowUserProfile');
    Route::post('update-profile-image', 'UserController@UpdateProfileImage');
    Route::post('update-password-profile', 'UserController@UpdatePasswordProfile');

    //withdrawals
    Route::get('withdrawals', 'WithdrawalController@index');
    Route::get('request-withdrawal', 'WithdrawalController@CreatePage');
    Route::post('request-withdrawal', 'WithdrawalController@CreateWithdrawal');

    //Deposit
    Route::get('deposit', 'DepositController@index');
    Route::get('new-deposit', 'DepositController@CreatePage');
    Route::post('new-deposit', 'DepositController@CreateDeposit');
    Route::get('cash-box-deposit', 'DepositController@CreateCashBoxPage');
    Route::post('cash-box-deposit', 'DepositController@CreateCashBox');



    Route::get('cash-box', function () {
        return view('cash-box');
    });
    Route::get('profit-calculator', function () {
        return view('profit-calculator');
    });
    Route::get('donations', function () {
        return view('donations');
    });
    Route::get('add-donation', function () {
        return view('add-donations');
    });


    Route::get('sold', function () {
        return view('sold');
    });
    Route::get('referuser', function () {
        return view('referuser');
    });
    Route::get('yourpartner', function () {
        return view('yourpartner');
    });

    Route::get('six-month-promo-investment', function () {
        return view('six-month-promo-investment');
    });
    Route::get('six-month-promo-list', function () {
        return view('six-month-promo-list');
    });


});

Route::prefix('admin')->group(function () {

    
    //get route
    Route::get('/', 'AdminController@index');
    Route::get('login', 'AdminController@Login');
    Route::get('dashboard', 'AdminController@Dashboard');
    Route::get('user', 'AdminController@listUserView');
    Route::get('user/adduser', 'AdminController@create');
    Route::get('user/edit/{id}', 'AdminController@edit')->name('showEdit');
    Route::get('user/logout', 'AdminController@logout');
    Route::get('/profile', 'AdminController@showAdminProfile');
    Route::get('forgot-password', 'AdminController@ForgotPasswordView');


    Route::get('user/destroy/{id}', 'AdminController@destroy');
    
    
    //post route
    Route::post('user', 'AdminController@ListUsers');
    Route::post('login', 'AdminController@AdminLogin');
    Route::post('user/adduser', 'AdminController@store');
    Route::post('user/update', 'AdminController@update');
    Route::post('reset_password_without_token', 'AdminController@validatePasswordRequest');

    // Auth::routes(['verify' => true]);
    // Route::get('/', function () {
    //     return view('welcome');
    // });
      
         
    // Route::get('/home', 'HomeController@index')->name('home');

    
    // Route::resource('AdminController', AdminController::class);

    
});

