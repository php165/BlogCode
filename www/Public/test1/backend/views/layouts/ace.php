<?php
use backend\assets\AceAsset;
use yii\helpers\Html;

AceAsset::register($this);
?>

<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="en">
<head>
     <?php $this->head() ?>
<meta charset="utf-8" />
<title>帮你修后台管理系统</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
 <?= Html::csrfMetaTags() ?>
<!--<link href="ass/css/bootstrap.min.css" rel="stylesheet" />
<link rel="stylesheet" href="ass/css/font-awesome.min.css" />
<link rel="stylesheet" href="ass/css/ace.min.css" />
<link rel="stylesheet" type="text/css" href="ass/css/style.css">-->
</head>
<body>
    <?php $this->beginBody() ?>
<div class="navbar navbar-default"> 
    <div class="navbar-container">
        <div class="navbar-header pull-left"> 
            <a href="#" class="navbar-brand"> 
                <small>帮你修管理后台 </small>
            </a>
         </div><!-- /.navbar-header -->
        <div class="navbar-header pull-right">
            <ul class="nav ace-nav">
                <li > 
                    <a data-toggle="dropdown" href="#" class="dropdown-toggle"> 
                        <i class="icon-user bigger-140"></i>yonghuming
                    </a>
                    <ul class="user-menu pull-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
                        <li>
                            <a href="">
                                <i class="icon-edit"></i>
                                修改密码
                            </a>
                        </li>
                    </ul>
                </li>
                <li > 
                    <a href="#"> 
                        <i class="icon-off bigger-130"></i>退出
                    </a>
                </li>
            </ul><!-- /.ace-nav --> 
        </div><!-- /.navbar-header --> 
    </div><!-- /.navbar-container--> 
</div><!-- /.navbar--> 
<div class="main-container">
    <div class="main-container-inner">
       <?=$this->render('slider')?>
      
    </div><!-- /.main-container-inner -->
    <div class="main-content">
        <?= $content?>
    </div>
</div><!-- /.main-container -->

<!--<script src='ass/js/jquery-1.7.2.min.js'></script> 
<script src="ass/js/ace-extra.min.js"></script> 
<script src="ass/js/bootstrap.min.js"></script> 
<script src="ass/js/ace.min.js"></script> -->
</body>
<?php $this->endBody() ?>
</html>
<?php $this->endPage() ?>
