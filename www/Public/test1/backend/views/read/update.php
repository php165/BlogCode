<?php

use yii\captcha\Captcha;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<?php

$form = ActiveForm::begin([
            'enableClientValidation' => FALSE, //关闭客户端
            'enableAjaxValidation' => TRUE, //开启ajax
            'validationUrl' => 'index.php?r=oper/ajaxyan', //执行基于Ajax验证URL
            'options' => [
                'class' => 'form-horizontal'
            ],
            'action' => \yii::getAlias('@web') . '/index.php?r=oper/update',
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

<?= $form->field($userform, 'password')->passwordInput() ?>
<?= $form->field($userform, 'Pod')->passwordInput() ?>
<?= $form->field($userform, 'rePwd')->passwordInput() ?>
<?= Html::submitButton('更改', ['class' => 'btn btn-primary', 'id' => 'update_btn']) ?>
<?= Html::resetButton('重置', ['class' => 'btn', 'name' => 'submit-button']) ?>
<?php ActiveForm::end() ?>
