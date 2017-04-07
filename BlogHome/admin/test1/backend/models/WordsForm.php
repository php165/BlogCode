<?php


namespace backend\models;

use yii\base\Model;

class UserForm extends Model {

    /**
     * 属性
     */
    public $id;               //id
    public $word;               //过滤词
    public $time;               //发布时间
    public $state;               //状态
    public $hand;             //操作

    /**
     * 属性标签
     */
    public function attributeLabels() {
        return [
            'id' => 'id',
            'word' => '过滤词',
            'time' => '发布时间',
            'state' => '状态',
            'time' => '注册时间',
            'ip' => '注册ip',
        ];
    }

   
    }

    /**
     * 场景
     */
    public function scenarios() {
        return [
            'word' => ['id', 'word', 'time', 'state', 'time', 'ip'], //违禁词场景
            
        ];
    }

}
