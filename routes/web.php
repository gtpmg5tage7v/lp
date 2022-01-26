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

Route::middleware('throttle:10,1')->group(function () {
    Auth::routes(['register' => false, 'reset' => false, 'verify' => false]);
});
Route::middleware('auth:api', 'throttle:60,1')->group(function () {
    Route::get('/home', 'HomeController@index')->name('home');

//createを増やせば広告コード分け
Route::get('create', 'MemberController@create')->name('member.create');
Route::get('123create', 'MemberController@create2')->name('member2.create');
Route::get('456create', 'MemberController@create3')->name('member3.create');




Route::post('payment/process/', 'PaymentController@Payment')->name('payment.process'); 
Route::get('thanks', 'PaymentController@Thanks')->name('thanks');





//銀行振込&代金引換
Route::post('oncash/charge/', 'PaymentController@OnCash')->name('oncash.charge');
});


Route::group(['middleware' => 'auth','throttle:60,1'], function () {
    

//admin画面
Route::get('admin/home', 'OrderController@index');

Route::get('admin/pading/order', 'OrderController@NewOrder')->name('admin.neworder');
Route::get('admin/view/order/{id}', 'OrderController@ViewOrder');

Route::get('admin/payment/accept/{id}', 'OrderController@PaymentAccept');
Route::get('admin/payment/cancel/{id}', 'OrderController@PaymentCancel');

Route::get('admin/accept/payment', 'OrderController@AcceptPayment')->name('admin.accept.payment');

Route::get('admin/cancel/order', 'OrderController@CancelOrder')->name('admin.cancel.order');

Route::get('admin/process/payment', 'OrderController@ProcessPayment')->name('admin.process.payment');
Route::get('admin/success/payment', 'OrderController@SuccessPayment')->name('admin.success.payment');

Route::get('admin/delevery/process/{id}', 'OrderController@DeleveryProcess');
Route::get('admin/delevery/done/{id}', 'OrderController@DeleveryDone');


Route::get('admin/search', 'OrderController@Search')->name('admin.search');

});