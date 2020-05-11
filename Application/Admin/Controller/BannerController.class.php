<?php

namespace Admin\Controller;
use Common\Controller\AdminBaseController;

/**
 * 后台权限管理
 */
class BannerController extends AdminBaseController {

//******************权限***********************
    /**
     * 权限列表
     */
    public function index() {
        $bannerObj = M('banner');
        $bannerlist = $bannerObj->select();
        $assign = array(
            'banner_list' => $bannerlist,
        );
        $this->assign($assign);
        $this->display();
    }

    /**
     * 添加权限
     */
    public function add() {
        if (I('post.')){
            $data = I('post.');
            unset($data['id']);
            $data['name'] = trim($data['name'], "/");

            $Banner = D('Banner');
            $result = $Banner->addData($data);
            if ($result) {
                $this->success('添加成功', U('Admin/Banner/index'));
            } else {
                $this->error($Banner->getError());
            }
        }else{
            $this->display();
        }

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


}
