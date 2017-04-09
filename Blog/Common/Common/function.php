<?php 

    //业务逻辑异常
    function SE($msg, $type = "", $code = 0) {
        throw new \Think\Exception\BusinessLogicException($msg, $code);
    }

    //数据库连接
    function get_db_connection()
    {
        return "mysql://root:@localhost/blogcode";
    }

    //自定义模型类  以后还要改
    function ND($name='',$layer='', $tablePrefix='', $connection='') {
        if(empty($name)) return new Think\Model;
        static $_model  =   array();
        if(empty($connection)){
            $connection = get_db_connection();
        }
        $layer          =   $layer? : C('DEFAULT_M_LAYER');
        if(isset($_model[$name.$layer]))
            return $_model[$name.$layer];
        $class          =   parse_res_name($name,$layer);
        if(class_exists($class)) {
            $model      =   new $class(basename($name),$tablePrefix,$connection);
        }elseif(false === strpos($name,'/')){
            // 自动加载公共模块下面的模型
            if(!C('APP_USE_NAMESPACE')){
                import('Common/'.$layer.'/'.$class);
            }else{
                $class      =   '\\Common\\'.$layer.'\\'.$name.$layer;
            }
            $model      =   class_exists($class)? new $class($name,$tablePrefix,$connection) : new Think\Model($name,$tablePrefix,$connection);
        }else {
            Think\Log::record('D方法实例化没找到模型类'.$class,Think\Log::NOTICE);
            $model      =   new Think\Model(basename($name),$tablePrefix,$connection);
        }
        $_model[$name.$layer]  =  $model;
        return $model;
    }