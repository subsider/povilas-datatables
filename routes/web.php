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

use App\User;

Route::get('/', function () {
    $firstNames = User::select('first_name')->orderBy('first_name')->pluck('first_name')->unique();
    return view('welcome', compact('firstNames'));
});

Route::get('/api/users', function () {
    $query = User::select('id', 'first_name', 'last_name', 'email', 'created_at');

    if (request('filter-date')) {
        $filterDate = now()->year()->toDateString();
        $query->whereYear('created_at', $filterDate);
    }
    return datatables($query)
        ->setRowClass(function ($user) {
            return $user->id % 2 == 0 ? 'table-success' : 'table-warning';
        })
        ->toJson();
    //return datatables(\DB::table('users')->select('id', 'first_name', 'last_name', 'email'))->toJson();
})->name('api.users.index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
