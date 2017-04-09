<?php
namespace Home\Controller;
use Common\Controller\BaseController;
use Think\Exception\BusinessLogicException;

class IndexController extends BaseController {

    public function _initialize() {

    }

    public function index() {
        if(IS_POST) {
            $data['username'] = I('post.username');
            $data['password'] = I('post.password');
            $this -> ajaxReturn(D('Index') -> test($data));
        }else {
            $this -> display('index');
        }
    }
}