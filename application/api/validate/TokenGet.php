<?php
/**
 * Created by 陈东东
 * Author: 陈东东
 * 微信公号: 极客小寨工作室
 * Date: 2019/4/15
 * Time: 22:03
 */
 
namespace app\api\validate;

class TokenGet extends BaseValidate
{
    protected $rule = [
        'code' => 'require|isNotEmpty'
    ];
    
    protected $message=[
        'code' => '没有code还想拿token？做梦哦'
    ];
}
