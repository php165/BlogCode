<?php


namespace backend\models;

use yii\base\Model;

class UserForm extends Model {

    /**
     * 属性
     */
    public $head;               //标题
    public $media;               //媒体
    public $time;               //时间
    public $state;               //状态

    /**
     * 属性标签
     */
    public function attributeLabels() {
        return [
            'head' => '标题',
            'media' => '媒体',
            'time' => '时间',
            'state' => '状态',
    }

    }

    /**
     * 场景
     */
    public function scenarios() {
        return [
            'read' => ['head', 'media', 'time', 'state'], //稿件场景
            
        ];
    }

}
