<?php
/**
 * Created by 陈东东
 * Author: 陈东东
 * 微信公号: 极客小寨工作室
 * Date: 2019/4/15
 * Time: 22:03
 */

namespace app\api\model;

use think\Model;

class BaseModel extends Model
{

    
    protected $hidden = ['delete_time'];
    /**
     * @param $id int 设置图片前缀域名
     * @return url
     */
    protected function  prefixImgUrl($value, $data){
        $finalUrl = $value;
        if($data['from'] == 1){
            $finalUrl = config('setting.img_prefix').$value;
        }
        return $finalUrl;
    }
}