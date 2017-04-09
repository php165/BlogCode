<?php 

    //业务逻辑异常
    function SE($msg, $type = "", $code = 0) {
        throw new \Think\Exception\BusinessLogicException($msg, $code);
    }

    //数据库连接
    function get_db_connect()
    {
        
    }