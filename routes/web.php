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
//Route::get('/Admin', 'test@show');
Route::get('/about',function (){

    return view ('about');
    
    
});

route::get('/tester','OrderController@index');
Route::get('/cart/finish',function (){

        return view ('finish');
        
        
});

Route::get('/faq',function (){

        return view ('faq');
        
        
});

        Route::get('/cart/payment',function (){

            return view ('payment');
            
            
});
Route::get('/menu',function (){


            
    return view ('menu',['item'=>DB::table( 'items' )->get(),'foodcategory'=>DB::table( 'foodcategory' )->get(),'extra'=>DB::table('extra')->get() ] );

});

Route::get('/additem/{item}','OrderController@add')->name('addtocart');
Route::get('/removeitem/{item}','OrderController@remove')->name('removefromcart');


            Route::get('/cart',function (){

                return view ('cart');
                
                
 });
 Route::get('/items/{id}','test@show');
 
Route::get('/',function (){

return view ('index');


});


/*Route::get('/profile/{name}', function () {

    $name=request('name');
   
    return view('login',['name'=>$name]);

});
*/