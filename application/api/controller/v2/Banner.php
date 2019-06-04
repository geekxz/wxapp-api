<?php
/**
 * Created by 陈东东
 * User: 陈东东
 * Date: 2019/4/14
 * Time: 17:40
 */

namespace app\api\controller\v2;

/**
 * Banner资源
 */ 
class Banner
{

	/**
	 * 获取Banner信息
	 * @url     /banner/:id
	 * @http    get
	 * @param   int $id banner id
	 * @return  array of banner item , code 200
	 * @throws  MissException
	 */
	public function getBanner()
	{
		return 'This is v2 version';
	}
}