<?php
/**
 * Created by 陈东东
 * User: 陈东东
 * Date: 2019/4/14
 * Time: 17:40
 */
namespace app\api\validate;


class IDMustBePositiveInt extends BaseValidate
{
    protected $rule = [
        'id' => 'require|isPositiveInteger',
    ]; 

    protected $message = [
        'ids' => 'ids参数必须为正整数,兄弟,仔细看文档啊!'
    ];   
}
