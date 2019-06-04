<?php
/**
 * Created by 陈东东
 * User: 陈东东
 * 微信公号: 极客小寨
 * Date: 2019/4/16
 * Time: 16:22
 */

namespace app\api\controller;


use app\api\service\Token;
use think\Controller;

class BaseController extends Controller
{
    protected function checkExclusiveScope()
    {
        Token::needExclusiveScope();
    }

    protected function checkPrimaryScope()
    {
        Token::needPrimaryScope();
    }

    protected function checkSuperScope()
    {
        Token::needSuperScope();
    }
}