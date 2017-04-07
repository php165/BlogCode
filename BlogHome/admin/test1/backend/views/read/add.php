<?php

use yii\captcha\Captcha;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>
<?php

$form = ActiveForm::begin([
            'enableClientValidation' => TRUE, //关闭客户端
            'enableAjaxValidation' => FALSE, //开启ajax
//            'validationUrl' => 'index.php?r=user/ajaxvalidation', //执行基于Ajax验证URL
            'options' => [
                'class' => 'form-horizontal',
            ],
            'action' => '@web/index.php?r=oper/add',
            'fieldConfig' => [
                'template' => '{label}<div class="col-sm-9">{input}{hint}{error}</div>',
                'labelOptions' => [
                    'class' => 'col-sm-3 control-label no-padding-right'
                ],
                'inputOptions' => [
                    'class' => 'col-xs-10 col-sm-5'
                ],
                'errorOptions' => [
                    'class' => 'help-inline col-xs-12 col-sm-7 help-block'
                ]
            ]
        ])
?>
<?= $form->field($userform, 'OperName',['labelOptions'=>['label'=>'用户名']])->textInput() ?>
<?= $form->field($userform, 'Pwd',['labelOptions'=>['label'=>'密码']])->passwordInput() ?>
<?= $form->field($userform, 'rePwd')->passwordInput() ?>
<?= $form->field($userform, 'Email')->textInput() ?>
<?= $form->field($userform, 'Address')->textInput() ?>
<?= $form->field($userform, 'QQ')->textInput() ?>
<?= $form->field($userform, 'Mobile')->textInput() ?>
<?= $form->field($userform, 'action')->hiddenInput(['value' => 'register']); ?>
<?= Html::submitInput('添加', ['class' => 'btn btn-primary', 'id' => 'btn']) ?>
<?= Html::resetButton('重置', ['class' => 'btn', 'name' => 'submit-button']) ?>
<?php ActiveForm::end() ?>
