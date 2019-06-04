<?php
/**
 * Created by PhpStorm.
 * User: 陈东东
 * Date: 2019/4/15
 * Time: 14:00
*/

namespace app\lib\exception;

/**
 * token验证失败时抛出此异常 
 */
class ForbiddenException extends BaseException
{
    public $code = 403;
    public $msg = '权限不够';
    public $errorCode = 10001;
}