<?php
/**
 * Created by 陈东东
 * User: 陈东东
 * 微信公号: 极客小寨
 * Date: 2019/4/15
 * Time: 22:40
 */

namespace app\api\controller\v1;

use app\api\controller\BaseController;
use app\api\validate\IDMustBePositiveInt;
use app\api\model\Banner as BannerModel;
use app\lib\exception\BannerMissException;

use app\api\service\Token;

use think\Exception;
/**
 * Banner资源
 */ 
class Test extends BaseController
{

	// 测试通过token获取用户信息
	public function getUid()
	{
		$uid = Token::getCurrentUid();
		var_dump($uid);
	}
}