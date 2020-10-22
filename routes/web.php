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
Route::get('/', function(){
    if(Auth::user()){
        // return view('home');
        return view('maps');
    }
    return view('auth.login');
});

// Route::get('/', function () {
//     // return 'Login should be here';
//     if(Auth::user()){
//         return view('home');
//     }
//     return view('auth.login');
// });

Auth::routes();
Auth::routes();
Route::get('/maps', function(){ return view('maps'); });
Route::get('/home', 'HomeController@index')->name('home');
Route::resource('crimes', 'CrimesController');
Route::resource('locations', 'LocationsController');
Route::resource('categories', 'CategoriesController');
Route::get('/load', 'LoadLoacationsController@make')->name('make');
