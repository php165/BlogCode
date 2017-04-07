<?php


namespace backend\models;

use yii\base\Model;

class UserForm extends Model {

    /**
     * 属性
     */
    public $id;               //ip
    public $name;               //用户名
    public $cap;               //公司名
    public $tpl;               //电话
    public $time;             //注册时间
    public $ip;                  //注册ip
    public $listtime;                //最近注册时间
    public $listIP;                 //最近注册IP
    public $login;                 //登录数
    public $mingxi;                 //明细
    public $state;                   //状态
    public $hand;                  //操作
    /**
     * 属性标签
     */
    public function attributeLabels() {
        return [
            'id' => ' ',
            'name' => '用户名称',
            'cap' => '公司名称',
            'tpl' => '电话',
            'time' => '注册时间',
            'ip' => '注册ip',
            'listtime' => '最近注册时间',
            'listip' => '最近注册ip',
            'login' => '登录数',
            'mingxi' => '明细',
            'hand' => '操作',
        ];
    }

   
    }

    /**
     * 场景
     */
    public function scenarios() {
        return [
            'register' => ['ip', 'name', 'cap', 'tpl', 'time', 'ip', 'listtime', 'listip'], //用户场景
            
        ];
    }

}
