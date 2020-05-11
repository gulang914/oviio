<?php

namespace Home\Controller;

use Common\Controller\HomeBaseController;

/**
 * 首页Controller
 */
class IndexController extends HomeBaseController {

    /**
     * 首页
     */
    public function index() {
        $this->display();
    }

}
