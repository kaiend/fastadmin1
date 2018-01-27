<?php
/**
 * Created by PhpStorm.
 * User: Windows 10
 * Date: 2018-01-27
 * Time: 10:54
 */

namespace app\api\controller;


use think\Controller;
//use app\common\controller\Api;
use fast\ApiHandleException;
use fast\ApiException;

class tests extends Controller
{
    public function index()
    {
        return[
            'kaiss',
            'ssk',
        ];
    }
    public function update($id =0)
    {
        //halt(input('put.'));
        //return $id;
    }

    /**
     * post 新增
     * @return mixed
     */
    public function save()
    {
        $data =input('post.');
        if ($data['mt']!=1){
            //exception('ooo');
           throw new ApiException('您的数据不合法',400);
        }
       /* if ($data['ids']){
            echo 1;exit;
        }*/
        return show(1,'od',input('post.'),201);
    }

}