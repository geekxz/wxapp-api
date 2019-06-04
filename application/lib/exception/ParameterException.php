<?php
/**
 * Created by PhpStorm.
 * User: 陈东东
 * Date: 2019/4/15
 * Time: 14:00
*/

namespace app\lib\exception;

/**
 * Class ParameterException
 * 通用参数类异常错误
 */
class ParameterException extends BaseException
{
    public $code = 400;
    public $msg = "参数错误";
    public $errorCode = 10000;
}