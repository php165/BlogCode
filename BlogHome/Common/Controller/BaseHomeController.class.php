<?php  
namespace Common\Controller;
use Think\Controller;
use Think\Exception\BusinessLogicException;

class BaseHomeController extends Controller
{
    public function _empty()
    {
        echo "empty1";
    }
}