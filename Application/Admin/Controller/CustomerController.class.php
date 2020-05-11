<?php

namespace Admin\Controller;
use Common\Controller\AdminBaseController;

/**
 * 后台权限管理
 */
class CustomerController extends AdminBaseController {

//******************权限***********************
    /**
     * 权限列表
     */
    public function index() {
        $RegionObj = M('region');
        $CustomerObj = M('customer');
        $bannerObj = M('banner');
        $customerlist = $CustomerObj->select();
        $bannerlist = $bannerObj->select();
        $whereprovince['top_parentid'] = 0;
        $listprovince = $RegionObj->where($whereprovince)->select();
//        var_dump($customerlist);exit;
        $assign = array(
            'customer_list' => $customerlist,
            'banner_list' => $bannerlist,
            "province_list"=>$listprovince
        );
        $this->assign($assign);
        $this->display();
    }

    /**
     * 添加权限
     */
    public function add() {
        if (I('post.')){
            echo 1;
        }else{
            $RegionObj = M('region');
            $bannerObj = M('banner');
            $bannerlist = $bannerObj->order('sort')->select();
            $whereprovince['top_parentid'] = 0;
            $listprovince = $RegionObj->where($whereprovince)->select();
            $assign = array(
                'banner_list' => $bannerlist,
                "province_list"=>$listprovince
            );
            $this->assign($assign);

            $this->display();
        }
       /* $data = I('post.');
        unset($data['id']);
        $data['name'] = trim($data['name'], "/");

        $AuthRule = D('Customer');
        $result = $AuthRule->addData($data);
        if ($result) {
            $this->success('添加成功', U('Admin/Rule/index'));
        } else {
            $this->error($AuthRule->getError());
        }*/
    }

    /**
     * 修改权限
     */
    public function edit() {
       /* $data = I('post.');
        $map = array(
            'id' => $data['id']
        );
        $data['name'] = trim($data['name'], "/");

        $AuthRule = D('Customer');
        $result = $AuthRule->editData($map, $data);
        if ($result !== false) {
            $this->success('修改成功', U('Admin/Rule/index'));
        } else {
            $this->error($AuthRule->getError());
        }*/
    }

    /**
     * 删除权限
     */
    public function delete() {
        /*$id = I('get.id');
        $map = array(
            'id' => $id
        );
        $result = D('Customer')->deleteData($map);
        if ($result) {
            $this->success('删除成功', U('Admin/Rule/index'));
        } else {
            $this->error('请先删除子权限');
        }*/
    }


    //获取地级市
    public function get_city(){
        $listObj = M('region');

        $where['top_parentid'] = I('province_id');
        $where['level'] = 2;
        $list = $listObj->where($where)->select();
        $data=array('status'=>0,'city'=>$list);
        header("Content-type: application/json");
        exit(json_encode($data));
    }

    //获取地级县
    public function get_district(){
        $listObj = M('region');
        $where['parent_id'] = I('city_id');
        $where['level'] = 3;
        $list = $listObj->where($where)->select();
        $data=array('status'=>0,'district'=>$list);
        header("Content-type: application/json");
        exit(json_encode($data));
    }


}
