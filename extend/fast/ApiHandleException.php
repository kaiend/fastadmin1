<?php
/**
 * Created by PhpStorm.
 * User: Windows 10
 * Date: 2018-01-27
 * Time: 12:14
 */

namespace fast;


use fast\ApiException;
use think\exception\Handle;

class ApiHandleException extends  Handle {

    /**
     * http 状态码
     * @var int
     */
    public $httpCode = 500;

    public function render(\Exception $e) {

        if(config('app_debug') == true) {
            return parent::render($e);
        }
        if ($e instanceof ApiException) {
            $this->httpCode = $e->httpCode;
        }
        return  show(0, $e->getMessage(), [], $this->httpCode);

    }
}