<?php
namespace Home\Controller;
use Common\Controller\BaseHomeController;

class IndexController extends BaseHomeController {
    public function index(){
        if(IS_POST)
        {
            $data['username'] = I('post.username');
            $data['password'] = I('post.password');
            $this -> ajaxReturn(D('Index') -> test($data));
        }else
        {
            $this -> display('index');
        }
    }

}