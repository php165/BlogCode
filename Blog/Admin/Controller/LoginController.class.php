<?php
namespace Admin\Controller;
use Think\Controller;
use Org\Net\IpLocation;
class LoginController extends Controller {
	//加载登陆页面
	public function index(){
		
      
		$this -> display();
	}

	//输出验证码
	public function code(){
		$Verify = new \Think\Verify();
		$Verify->fontSize = 30;
		$Verify->length   = 3;
		$Verify->useNoise = false;
		$Verify->entry();
	}
		
	//执行登陆
	public function login(){
      // var_dump($_POST);
      // 验证验证码
      $Verify = new \Think\Verify();
      $res = $Verify->check($_POST['code']);
      if($res){
      	//验证账号
      	$mod = M("vip");
      	$user = $mod -> where('vip_name="'.$_POST['vip_name'].'"')->find();
      	// dump($user);exit;
      	if($user){
      		//验证密码
      		if(md5($_POST['password'])==$user['password']){
               //用户信息存储到session中
               // 
      			session('user',$user);
               $data['update_time']=date('Y-m-d H:i:s');
               $data['login_ip'] = get_client_ip();
               $num=$user['num'];
               $data['num'] = $num + 1;
               $data['id'] = $user['id'];
              // dump($data);die;
               //执行数据修改
               $p = $mod -> save($data);
               //exit;

               $this -> success('登录成功',U('Admin/Index/index'));
      		}else{
      			$this -> error('密码错误');
      		}

      	}else{
      		$this -> error('账号不存在');
      	}
      }else{
      	//验证码失败
      	$this -> error('验证码失败');
      }

   }

   //退出登陆
	public function loginOut(){
		
      session('user',null);
   $this -> redirect('Admin/Login/index');
   
    
	}
	

}