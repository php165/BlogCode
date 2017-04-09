<?php  
namespace Common\Controller;
use Think\Controller;
use Think\Exception\BusinessLogicException;

class BaseController extends Controller {
    const ERROR_INFO = "未知错误";
    
    public function _initialize() {

    }

    public function _empty() {
        echo "empty1";
    }
}