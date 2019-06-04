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
class TokenException extends BaseException
{
    public $code = 401;
    public $msg = 'Token已过期或无效Token';
    public $errorCode = 10001;
}