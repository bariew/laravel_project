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
foreach ([
    '/' => 'welcome',
] as $k => $v) {
    Route::get($k, function () use ($v) { return view($v);})->name($k);
}
// Module Controllers
Route::get('{module}/{controller}/{action}', function ($m, $c, $a) {
    /** @var \App\Http\Controllers\Controller $controller */
    $controller = app()->make('Modules\\'.ucfirst($m).'\Http\Controllers\\'.ucfirst($c).'Controller');
    return $controller->callAction($a, []);
});
