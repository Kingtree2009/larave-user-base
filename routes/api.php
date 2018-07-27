<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

/*
 * currencyList
 */

Route::get('/currencyList','CommonController@listCurrency');

/*
 * cust and manage user register and login
 */
Route::post('/customer/register', 'CustomerUserController@register');

Route::post('/customer/login', 'CustomerUserController@login');

Route::post('/manage/login', 'ManageController@login');

//get countries;

Route::get('/common/country/list','CommonController@listCountries');

Route::get('/common/city/list/{countryId}','CommonController@listCities');

Route::get('/common/region/list/{countryId}','CommonController@listRegions');


/*
 * get china province city county
 */

Route::get('/common/province/list','CommonController@listProvince');

Route::get('/common/city/list/{provinceId}','CommonController@listChinaCities');

Route::get('/common/county/list/{cityId}','CommonController@listCounties');



/*
 * 路由分组
 */

Route::middleware(['token'])->group(function () {

    Route::get('/test', 'TestController@test');

    //操作员重置密码
    Route::post('/manage/password/reset','ManageController@resetPassword');

//新建操作员
    Route::post('/manage/ordinary/create', 'ManageController@createManager');

    //修改同事密码,状态
    Route::put('/colleague/{id}','ManageController@updateOperator');

    //get legal list
    Route::get('/colleague/{page}/{per_page}','ManageController@listOperator');
    //get legal list
    Route::get('/colleague/{id}','ManageController@getOperatorDetail');

    //manage user logout
    Route::post('/manage/logout','ManageController@logout');

    //manage info
    Route::get('/manage/info','ManageController@getInfo');

    //cust info
    Route::get('/customer/info','CustomerUserController@getInfo');
    //cust update
    Route::post('/customer/update','CustomerUserController@customerUpdate');
    //cust change password
    Route::post('/customer/chgPassword','CustomerUserController@resetPassword');


    //customer add receiver address
    Route::post('/address','CustomerUserController@addReceAddress');

    //customer delete receiver address
    Route::delete('/address/{id}','CustomerUserController@deleteAddress');

    //customer set default address
    Route::post('/address/default','CustomerUserController@setDefaultAddress');

    //customer update address
    Route::put('/address/{main_id}','CustomerUserController@updateAddress');

    //address detail
    Route::get('/address/{main_id}','CustomerUserController@getAddress');

    //address list
    Route::get('/address','CustomerUserController@getAddressList');



});





Route::post('/stores', 'StoreController@creatStore');