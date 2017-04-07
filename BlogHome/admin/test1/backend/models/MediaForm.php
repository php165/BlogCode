<?php


namespace backend\models;

use yii\base\Model;

class UserForm extends Model {

    /**
     * 属性
     */
    public $id;               //id
    public $name;               //媒体名称
    public $zone;               //地区
    public $class;               //分类
    public $state;             //状态
    public $hand;                  //操作
    /**
     * 属性标签
     */
    public function attributeLabels() {
        return [
            'id' => 'id',
            'name' => '媒体名称',
            'zone' => '地区',
            'class' => '分类',
            'state' => '状态',
            'hand' => '操作'，
        ];
    }

   
    }

    /**
     * 场景
     */
    public function scenarios() {
        return [
            'media' => ['ip', 'name', 'cap', 'tpl', 'time', 'ip', 'listtime', 'listip'], //用户场景
            
        ];
    }

}
