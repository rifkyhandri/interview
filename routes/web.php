<?php

use Illuminate\Support\Facades\Route;

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


// kita coba pakai composer
// login
// Route::post('/','otentikasi\OtentikasiController@login')->name('login');
Route::get('index',function(){
    return view('index');
});
Route::get('/',function(){
    return view('welcome');
});
Auth::routes();
Route::get('/','Auth\LoginController@showLoginForm')->name('login');
Route::post('/','Auth\LoginController@login')->name('login');
Route::get('/dashboard',function(){
    $stock = \App\Stock::all();
    $web_name = \App\WebNames::get()->first();
    $event = DB::table('event')->get();
    $karyawan = DB::table('karyawan')->get();
    if(auth()->user()->role == 'SECURITY' ){
        return view('dashboard/dashboard_security');
    }
        return view('dashboard_utama',['karyawan'=>$karyawan,'event'=>$event,'stock'=>$stock,'nama_web'=>$web_name]);
    
});

    // route bisa semua orang lihat
    // Blog 
    Route::get('blog-index','Controller_Blogs_Web@index')->name('blog.index');
    Route::get('blog-index/{id}','Controller_Blogs_Web@show')->name('blog.show');
    // karir 
    Route::get('karir-index','Controller_Karir_Web@index')->name('karir.index');
    Route::get('karir-index/view','Controller_Karir_Web@view_job')->name('karir.view');
    // resume 
    Route::get('resume','Controller_Blogs_Web@resume')->name('resume');
    // profile
    Route::get('show_profile','ControllerKaryawan@profile_karyawan')->name('karyawan.profile');
    // event
    Route::get('show_event/{id}','ControllerEvent@show')->name('event.show');
    Route::get('event','ControllerEvent@index')->name('event.index');
    Route::get('show_event/daftar_pay/{id}','ControllerEvent@daftar_pay')->name('event_daftar_pay');
    Route::post('daftar_free','ControllerEvent@daftar_free')->name('daftar.free');
    // izin karyawan
    Route::get('/izin-karyawan','ControllerKaryawan@izin')->name('karyawan.izin');
    Route::get('/izin-karyawan/tambah','ControllerKaryawan@tambah_izin')->name('tambah.izin');
    Route::post('/izin-karyawan/tambah','ControllerKaryawan@create_izin')->name('create.izin');

    // Route::get('karyawan/{id}/profile', 'ControllerKaryawan@profile')->name('karyawan.profile');
    Route::get('toko_online','ControllerEcommerce@index')->name('toko_online.index');
// Route dengan posisi super_admin , HR
Route::group(['middleware' => ['auth','CheckRole:super_admin,HRD,SECURITY,procurement']], function () {

    // Karyawan 
    Route::get('karyawan','ControllerKaryawan@index')->name('karyawan.index');
    Route::get('karyawan/tambah','ControllerKaryawan@tambah')->name('karyawan.tambah');
    Route::post('karyawan','ControllerKaryawan@create')->name('karyawan.create');
    Route::get('karyawan/{id}/edit','ControllerKaryawan@edit')->name('karyawan.edit');
    Route::post('karyawan/{id}/update','ControllerKaryawan@update')->name('karyawan.update');
    Route::get('karyawan/{id}/delete','ControllerKaryawan@delete')->name('karyawan.delete');
    Route::get('/findDepartementName','ControllerKaryawan@findDepartementName')->name('find.departement');
    // izin karyawan
    Route::get('/izin-karyawan/edit/{id}','ControllerKaryawan@edit_izin')->name('edit.izin');
    Route::post('/izin-karyawan/update/{id}','ControllerKaryawan@update_izin')->name('update.izin');
    // Event
    Route::get('tambah','ControllerEvent@create')->name('event.tambah');
    Route::get('event/{id}/delete','ControllerEvent@destroy')->name('event.delete');
    Route::post('simpan','ControllerEvent@store')->name('event.simpan');

});

Route::group(['middleware' => ['auth','CheckRole:super_admin']], function () {
    // System Login
    Route::get('system_module','ControllerDepartementKaryawan@system_module')->name('system.index');
    Route::get('system_module/{id}/delete','ControllerDepartementKaryawan@delete_departement')->name('delete.departement');
    // Departement->super_admin    
    Route::get('departement','ControllerDepartementKaryawan@departement_index')->name('departement.index');
    Route::post('departement/Create','ControllerDepartementKaryawan@create_departement')->name('departement.create');
    Route::post('departement_sub/Create','ControllerDepartementKaryawan@create_sub')->name('departement_sub.create');
    Route::post('departement_sm/Create','ControllerDepartementKaryawan@create_sm')->name('departement_sm.create');
    Route::get('departement/edit/{id}','ControllerDepartementKaryawan@panggil_departement')->name('departement.panggil');
    // Setting_Departement
    Route::get('setting_Departement','ControllerDepartementKaryawan@system_module')->name('departement.MD');
    // Kategori Product
    Route::get('product_categori','ControllerProductCat@index')->name('index.product');
    Route::get('edit/{id}','ControllerProductCat@edit')->name('edit.product');
    Route::post('product_categori/post','ControllerProductCat@create')->name('create.product');
    // Route::post('product_categori/{id}','ControllerProductCat@update')->name('update.product');
    Route::get('/product_categori/{id}/delete','ControllerProductCat@delete')->name('delete.product');
    Route::get('/product_categories/{id}/delete','ControllerProductCat@delete_sub');
    Route::get('/product_categories_sm/{id}/delete','ControllerProductCat@delete_sub');


    // route save Product sub
    Route::post('product_categori/post_sub','ControllerProductCat@create_sub')->name('create_sub.product');
    
    // route save Product sm
    Route::post('product_categori/post_sm','ControllerProductCat@create_sm')->name('create_sm.product');
    
});
Route::group(['middleware' => ['auth','CheckRole:super_admin,PURCHASING']], function () {
    // Suplier Route
    Route::get('suplier','ControllerSuplai@index')->name('suplier.index');
    Route::post('suplier/tambahsuplier','ControllerSuplai@create')->name('suplier.simpan');
    Route::get('suplier/profile/{id}','ControllerSuplai@profile')->name('suplier.profile');
    Route::get('suplier/ubah/{id}','ControllerSuplai@ubah')->name('suplier.ubah');
    Route::post('suplier/update/{id}','ControllerSuplai@update')->name('suplier.update');   
    Route::get('suplier/{id}/delete','ControllerSuplai@delete')->name('delete.suplier');
    Route::post('suplier/{id}/addbrand','ControllerSuplai@addbrand')->name('add.brand');
    // Brands Route
    Route::get('brands','BrandController@index')->name('brands1');
    Route::get('/tambahbrand','BrandController@tambah')->name('tambah.brand');
    Route::post('/tambahbrand','BrandController@simpan')->name('simpan.brand');
    Route::delete('brands/delete/{id}','BrandController@delete')->name('delete.brand');
    Route::get('brands/edit_brands/{id}','BrandController@edit')->name('edit.brand');
    Route::post('brands/update','BrandController@update')->name('update.brand');
});
Route::group(['middleware' => ['auth','CheckRole:super_admin,WAREHOUSE']], function () {
    // Warehouse
    Route::get('warehouse','WarehouseLocationController@index')->name('Warehouse');
    Route::get('Warehouse_location_category','WarehouseLocationController@index_location')->name('Warehouse_wloc');
    Route::get('tambah_warehouse_location','WarehouseLocationController@tambah')->name('tambah.wloc');
    Route::post('tambah_warehouse_location','WarehouseLocationController@simpan')->name('simpan.wloc');
    Route::delete('warehouse/delete/{id}','WarehouseLocationController@delete')->name('delete.wloc');
    Route::get('warehouse/edit_wloc/{id}','WarehouseLocationController@edit')->name('edit.wloc');
    Route::post('warehouse/update','WarehouseLocationController@update')->name('update.wloc');
});

Route::group(['middleware' => ['auth','CheckRole:super_admin,INVENTARIS']], function () {
    Route::get('/comp_profile','ControllerCompanyProfile@companyProfile')->name('comp_profile');
    Route::get('stock_in','ControllerStock@index')->name('stock.index');
    // Route::get('/json-catsub','ControllerStock@catsub')->name('stock.catsub');
    Route::get('/stock_in/catsub/{id}','ControllerStock@catsub')->name('sub');
    Route::get('/stock_in/catsm/{id}','ControllerStock@catsm')->name('sm');
    Route::get('/stock_in/{id}','ControllerStock@destroy')->name('stock.delete');
    // masuk stock
    Route::post('/stock_create','ControllerStock@create')->name('stock.create');
    Route::post('/stock_create_sub','ControllerStock@create_sub')->name('stock.create_sub');
    Route::get('kontent','ControllerKontentWebsite@index')->name('index.kt');
    Route::post('kontent/post','ControllerKontentWebsite@create')->name('create.kt');
    // stock by item
    Route::get('/stock-byitem','ControllerStockbyItem@index')->name('stockbyitem');    
    Route::post('/stock-byitem/{id}/update','ControllerStockbyItem@update')->name('updatebyitem');    
    Route::get('/stock-byitem/{id}/delete','ControllerStockbyItem@destroy')->name('deletebyitem');   
    // stock by warehouse
    Route::get('/stock-by-warehouse','ControllerStockbyWarehouse@index')->name('indexbygudang');

});
Route::group(['middleware' => ['auth','CheckRole:super_admin,INVENTARIS']], function () {

    Route::get('/menu_cms','ControllerCMS@index')->name('cms.index');
    Route::get('/menu_cms/brand-cat','ControllerCMS@brandcat')->name('cms_brand_cat');
    Route::post('/menu_cms/brand-cat','ControllerCMS@createbrandcat')->name('cms_brand_cat_create');

});
Route::group(['middleware' => ['auth','CheckRole:super_admin,PURCHASING']], function () {

    // manage to purchase_order(PO)
    Route::get('/purchasing','ControllerPurchaseOrder@index')->name('purchasing.index');
    Route::get('/purchasing/create','ControllerPurchaseOrder@create')->name('purchasing.create');
    Route::get('/purchasing/create/{id_suplier}','ControllerPurchaseOrder@get_produk')->name('produk_purchase.get');
    Route::post('/purchasing/create','ControllerPurchaseOrder@store')->name('store.purchase');
    Route::get('/purchasing/aproved/{id}','ControllerPurchaseOrder@aproved')->name('aproved.purchase');
    Route::get('/purchasing/detail/{id}','ControllerPurchaseOrder@detail')->name('detail.purchase');
    Route::get('/purchasing/detail/delete/{id}','ControllerPurchaseOrder@detail_delete')->name('detail.delete');
    Route::put('/purchasing/update_qty/{id}','ControllerPurchaseOrder@update_qty')->name('update_qty');

    // Manage to Goods Receipt(GR)
    Route::get('/goods_receipt','Controller_GR@index')->name('gr.index');
});



// error
Route::get('error','ControllerError@index')->name('error.index');
// logout
Route::get('logout','otentikasi\OtentikasiController@logout')->name('logout');

// Toko Online 
Route::get('myform',array('as'=>'myform','uses'=>'ControllerCities@myform'));
Route::get('myform/ajax/{id}',array('as'=>'myform.ajax','uses'=>'ControllerCities@myformAjax'));










