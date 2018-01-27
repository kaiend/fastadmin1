<?php

// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

//如果有定义绑定后台模块则禁用路由规则 
/*if (\think\Route::getBind('module') == 'admin'){
    return [];
}*/

/*return [
    //别名配置,别名只能是映射到控制器且访问时必须加上请求的方法
    '__alias__'   => [
    ],
    //变量规则
    '__pattern__' => [
    ],
//        域名绑定到模块
//        '__domain__'  => [
//            'admin' => 'admin',
//            'api'   => 'api',
//        ],
];*/
use think\Route;
Route::get('tests','api/tests/index');
Route::put('tests/:id','api/tests/update');
Route::resource('tests','api/tests');
Route::get('demo','api/demo/test1');
Route::any('demo','api/demo');
