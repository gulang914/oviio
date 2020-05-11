<?php

namespace Common\Model;

use Common\Model\BaseModel;

/**
 * 权限规则model
 */
class BannerModel extends BaseModel {

    protected $_validate = array(
        array('name','require','权限不能为空',1),
    );

    /**
     * 编辑时验证权限是否重复
     */
    protected function _checkNameUn($options){
        $data = $options;
        $map = array(
            'id' => array('neq',$data['id']),
            'name' => array('eq',$data['name'])
        );
        $name = $this->where($map)->find();
        if( $name ){
            return false;
        }{
            return true;
        }
    }


    /**
     * 删除数据
     * @param	array	$map	where语句数组形式
     * @return	boolean			操作是否成功
     */
    public function deleteData($map) {
        $count = $this
            ->where(array('pid' => $map['id']))
            ->count();
        if ($count != 0) {
            return false;
        }
        $result = $this->where($map)->delete();
        return $result;
    }

}
