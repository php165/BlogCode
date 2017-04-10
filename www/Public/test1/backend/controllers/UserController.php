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
class BannerController extends actionControllers{
    public function actionindex() {

                $active = 0;
                $item = new UserForm();
                $Add = ArrayHelper::map(T::find()->where(['type' => '1'])->all(), 'description', 'description');
                $userForm = new UserForm();
                $tau_operinfo = new TauOperinfo();
                $userForm->scenario = 'login';
                $userForm->scenario = 'register';
                $array_news = TauOperinfo::find()->asArray()->all();
                return $this->render('index.html');
                if (\yii::$app->request->isPost) {
                    return $this->actionAdd();
                }
            }
    public function actionAdd










{
    //put your code here
}
