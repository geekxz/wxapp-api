<?php
/**
 * Created by 陈东东
 * User: 陈东东
 * 微信公号: 极客小寨
 * Date: 2019/4/16
 * Time: 16:22
 */

namespace app\lib\exception;
use think\Exception;

/**
 * 微信服务器异常
 */
class WeChatException extends BaseException
{
    public $code = 400;
    public $msg = 'wechat unknown error';
    public $errorCode = 999;
}