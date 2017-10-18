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

/**
 * 以下方法是提供给 liyingxuan/vuejs-cli-tutorial 教程配合使用提供api数据的，无实际应用意义
 * 需要 composer laravel-cors 来解决跨域访问问题的
 */
// 增
Route::post('/todo/create', function (Request $request) {
    $data = ['title' => $request->get('title'), 'completed' => false];
    // 正常流程$data入库，此处做演示，不实际连通数据库

    return response()->json($data);
});

// 删
Route::delete('/todo/{id}/delete', function ($id) {
    // 正常流程找到$id对应的数据在数据库中删除，此处做演示，不实际连通数据库

    return response()->json($id);
});

// 改
Route::patch('/todo/{id}/completed', function ($id) {
    // 正常流程completed取反入库，此处做演示，不实际连通数据库

    return response()->json($id);
});

// 查全部
Route::get('/todos', function () {
    $todos = [
        ['id' => 1, 'title' => 'Learn VueJS', 'completed' => false],
        ['id' => 2, 'title' => 'Coding', 'completed' => true]
    ];

    return response()->json($todos); // 测试使用，故没有直接使用DB
});
// 查一个
Route::get('/todo/{id}', function ($id) {
    $todos = [
        ['id' => 1, 'title' => 'Learn VueJS', 'completed' => false],
        ['id' => 2, 'title' => 'Coding', 'completed' => true]
    ];

    return response()->json($todos[$id - 1]); // 测试使用，故没有直接使用DB
});
