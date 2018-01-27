<?php
/**
 * Created by PhpStorm.
 * User: kaiend
 * Date: 2017-01-27
 * Time: 15:57
 */

namespace app\api\controller;


use think\Controller;
use fast\Aes;
use fast\Auth;

/**
 * API公共控制器
 * Class Common
 * @package app\api\controller
 */
class Common extends Controller
{

    /**
     * 初始化方法
     */
    public function _initialize()
    {
        $this->checkRequestAuth();
        $this->testAes();

    }

    /**
     * 检查每次APP请求的数据合法性
     */
    public function checkRequestAuth()
    {
        $headers = request()->header();
        //todo

        //sign

    }

    public function testAes()
    {
        $data=[
          'did'=>'12345dg',
            'version'=> 1,
        ];
       echo  Auth::setSign($data);exit;

       /*$str = 'sRCvj52mZ8G+u2OdHYwmysvczmCw+RrAYWiEaXFI/5A=';
       echo (new Aes())->decrypt($str);exit;*/
    }

}