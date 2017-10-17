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

// 建立一个给vuejs-cli-tutorial项目提供api数据的
// 中间件cors是解决跨域访问问题的
Route::middleware('cors:api')->get('/todos', function () {
    return response()->json([
        ['id' => 1, 'title' => 'Learn VueJS', 'completed' => false],
        ['id' => 2, 'title' => 'Coding', 'completed' => true]
    ]);
});