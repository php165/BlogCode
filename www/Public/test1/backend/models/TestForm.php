<?php


namespace backend\models;

use yii\base\Model;

class UserForm extends Model {

    /**
     * 属性
     */
    public $head;               //标题
    public $media;               //媒体
    public $man;               //发稿人
    public $time;               //时间
    public $state;             //状态
    public $hand;                  //操作
    /**
     * 属性标签
     */
    public function attributeLabels() {
        return [
            'head' => '标题',
            'media' => '媒体',
            'man' => '发稿人',
            'time' => '时间',
            'state' => '状态',
            'hand' => '操作',
        ];
    }

   
    }

    /**
     * 场景
     */
    public function scenarios() {
        return [
            'test' => ['hand', 'media', 'man', 'time', 'state', 'hand'], //用户场景
            
        ];
    }

}
