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

            return view ('menu');
            
            
});

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