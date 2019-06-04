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
class Banner extends BaseController
{

	/**
	 * 获取Banner信息
	 * @url     /banner/:id
	 * @http    get
	 * @param   int $id banner id
	 * @return  array of banner item , code 200
	 * @throws  MissException
	 */
	public function getBanner($id)
	{
		$uid = Token::getCurrentUid();	// 获取uid
		var_dump($uid);die;
		// AOP 面向切面编程
		(new IDMustBePositiveInt())->goCheck();
		
		$banner = BannerModel::getBannerById($id);	
		if (!$banner) {
			throw new BannerMissException();			
		}
		return $banner;
	}
}