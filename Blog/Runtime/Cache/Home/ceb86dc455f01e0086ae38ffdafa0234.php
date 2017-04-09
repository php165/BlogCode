<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <script type="text/javascript" src="/BlogCode/www/Public/Js/jquery.min.js"></script>
</head>
<body>
    账号:<input id="username" type="text" value=""/>
    <br/>
    密码:<input id="password" type="password" value=""/>
    <br/>
    <a id="tijiao" href="javascript:void(0)">提交</a>
</body>
</html>
<script type="text/javascript">
    $("#tijiao").click(function(){
        var username = $("#username").val();
        var password = $("#password").val();
        $.post("<?php echo U('Index/index');?>",{'username':username,'password':password},function(res){
                if(res['status'] == 0)
                {
                    alert(res['info']);
                }else
                {
                    alert(res['info']);
                }
        });
    });
</script>