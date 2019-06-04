<?php
/**
 * Created by 陈东东
 * Author: 陈东东
 * 微信公号: 极客小寨工作室
 * Date: 2019/4/15
 * Time: 22:03
 */

namespace app\api\controller\v1;


use app\api\service\AppToken;
use app\api\service\UserToken;
use app\api\service\Token as TokenService;
use app\api\validate\AppTokenGet;
use app\api\validate\TokenGet;
use app\lib\exception\ParameterException;

/**
 * 获取令牌，相当于登录
 */
class Token
{
    /**
     * 用户获取令牌（登陆）
     * @url /token/user
     * @POST code
     * @note 虽然查询应该使用get，但为了稍微增强安全性，所以使用POST
     */
    public function getToken($code='')
    {   
        (new TokenGet())->goCheck();
        $wx = new UserToken($code);
        $token = $wx->get();
        return [
            'token' => $token
        ];
    }
     /**
     * 用户刷新令牌（刷新）
     * @url /token/verify
     * @POST token
     * @note 虽然查询应该使用get，但为了稍微增强安全性，所以使用POST
     */
    public function verifyToken($token='')
    {
        if(!$token){
            throw new ParameterException([
                'token不允许为空'
            ]);
        }
        $valid = TokenService::verifyToken($token);
        return [
            'isValid' => $valid
        ];
    }



    

    /**
     * 第三方应用获取令牌
     * @url /app_token?
     * @POST ac=:ac se=:secret
     */
    public function getAppToken($ac='', $se='')
    {
        header('Access-Control-Allow-Origin: *');
        header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
        header('Access-Control-Allow-Methods: GET');
        (new AppTokenGet())->goCheck();
        $app = new AppToken();
        $token = $app->get($ac, $se);
        return [
            'token' => $token
        ];
    }
   

}