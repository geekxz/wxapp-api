<?php
/**
 * Created by 陈东东
 * Author: 陈东东
 * 微信公号: 极客小寨工作室
 * Date: 2019/4/15
 * Time: 22:03
 */
namespace app\api\model;


class BannerItem extends BaseModel
{
	// 设置隐藏字段
    protected $hidden = ['id', 'banner_id', 'delete_time'];

    /**
     * @param $id int 设置图片前缀域名
     * @return url
     */
    public function getUrlAttr($value, $data)
    {
        return $this->prefixImgUrl($value, $data);
    }
}
