<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace backend\controllers;

use yii\web\Controller;

/**
 * Description of IndexController
 *
 * 
 */
class IndexController extends Controller{
    public $layout='ace';
    public function actionIndex(){
        return $this->render('index');

    }
    public function actionplay(){
    	return $this->render(){
    		    $userform = new UserForm();
                $userform->scenario = 'register';
                $array_news = TauOperinfo::find()->asArray()->all();
                if (\yii::$app->request->isPost) {
                    $userform->attributes = \yii::$app->request->post('UserForm');
                    if ($userform->validate()) {
                        $oper = new TauOperinfo();
                        $oper->id = $userform->id;
                        $oper->name = $userform->name;
                        $oper->cap  = $userform->cap;
                        $oper->tpl = $userform->tpl;
                        $oper->balance = $userform->balance;
                        $oper->time = time();
                        $oper->ip = $userform->ip;
                        $oper->listtime =time();
                        $oper->listip =$userform->listip ;
                        $oper->login  = $userform->login;
                        $oper->mingxi = $userform->mingxi;
                        $oper->state = $userform->state;
                        $oper->hand  = $userform->hand;
        }
        $ContentForm=new ContentForm();
        $brie=$TbaContent->findOne(1);
        return $this->render('member_management6.html');
    }
}














{
    //put your code here
}
