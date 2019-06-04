<?php
/**
 * Created by 陈东东
 * User: 陈东东
 * Date: 2019/4/14
 * Time: 17:40
 */

namespace app\api\validate;


use app\lib\exception\ParameterException;
use think\Exception;
use think\Request;
use think\Validate;

/**
 * Class BaseValidate
 * 验证类的基类
 */
class BaseValidate extends Validate
{
    /**
     * 检测所有客户端发来的参数是否符合验证类规则
     * 基类定义了很多自定义验证方法
     * 这些自定义验证方法其实，也可以直接调用
     * @throws ParameterException
     * @return true
     */
    public function goCheck()
    {
        //必须设置contetn-type:application/json
        $request = Request::instance();
        $params = $request->param();
        $result = $this->batch()->check($params);

        if (!$result) {
            $e = new ParameterException(
                [
                    // $this->error有一个问题，并不是一定返回数组，需要判断
                    'msg' => $this->error,
                ]);
            throw $e;
        }
        return true;
    }

    protected function isPositiveInteger($value, $rule = '', $data = '', $field = '')
    {
        if (is_numeric($value) && is_int($value+0) && ($value + 0) > 0) {
            return true;
        }else{
            return false;
        }
    }

    protected function isNotEmpty($value, $rule='', $data='', $field='')
    {
        if (empty($value)) {
            return $field . '不允许为空';
        } else {
            return true;
        }
    }

    
}