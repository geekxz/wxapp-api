<?php
/**
 * Created by 陈东东
 * User: 陈东东
 * Date: 2019/4/14
 * Time: 17:40
 */
namespace app\api\model;

use think\Db;


class Banner extends BaseModel
{
    public function items(){
        return $this->hasMany('BannerItem', 'banner_id', 'id');
    }
    /**
     * @param $id int banner所在位置
     * @return Banner
     */
    public static function getBannerById($id)
    {
        $result = self::with(['items'])
            ->find($id);

        return $result;
    }
}
