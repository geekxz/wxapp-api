<?php
/**
 * Created by 陈东东
 * User: 陈东东
 * Date: 2019/4/16
 * Time: 13:16
 */

namespace app\api\validate;


class IDCollection extends BaseValidate
{
    protected $rule = [
        'ids' => 'require|checkIDs',
    ];

    protected $message = [
        'ids' => 'ids参数必须为以逗号分隔的多个正整数,兄弟,仔细看文档啊!'
    ];
    /**
     * 检测ids参数
     * @param   string $value ids
     * @return  bool 
     * @throws  MissException
     */
    protected function checkIDs($value){
    	$values = explode(',', $value);
        if (empty($values)) {
            return false;
        }
        foreach ($values as $id) {
            if (!$this->isPositiveInteger($id)) {
                return false;
            }
        }
        return true;
    }
    
}
