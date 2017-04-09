<?php
namespace Home\Controller;
use Common\Controller\BaseController;
use Think\Exception\BusinessLogicException;

class IndexController extends BaseController {

    public function _initialize() {

    }

    public function index() {
        $this -> display('index');
    }
}