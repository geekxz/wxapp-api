<?php
/**
 * Created by 陈东东
 * Author: 陈东东
 * 微信公号: 极客小寨
 * Date: 2019/4/15
 * Time: 22:03
 */

namespace app\api\model;

use think\Model;

class User extends BaseModel
{
    // protected $autoWriteTimestamp = true;

    /**
     * 用户是否存在
     * 存在返回uid，不存在返回0
     */
    public static function getByOpenID($openid)
    {
        $user = User::where('openid', '=', $openid)
            ->find();
        return $user;
    }
}
