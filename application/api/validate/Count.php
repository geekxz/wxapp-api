<?php
/**
 * Created by 陈东东
 * Author: 陈东东
 * 微信公号: 极客小寨工作室
 * Date: 2019/4/15
 * Time: 22:03
 */

namespace app\api\validate;

class Count extends BaseValidate
{
    protected $rule = [
        'count' => 'isPositiveInteger|between:1,15',
    ];
}
