<?php
namespace Admin\Controller;
use Think\Controller;
use Think\Verify;

class ManagerController extends Controller {
    public function login(){
    	if(!empty($_POST)){
    		$vry = new Verify();
    		if($vry->check($_POST['captcha'])){
    			$usn = $_POST['admin_user'];
    			$pwd = $_POST['admin_psd'];
    			if($usn=='admin'&&$pwd=='admin'){
    				$this ->redirect('Admin/Index/index', array('username'=>$usn), 2, 'Login success');
    			}else{
    				$username = '用户名或密码错误!';
    				$this->assign('error',$username);
    			}
    			
    		}else{
    			$captcha = '验证码错误!';
    			$this->assign('captcha',$captcha);
    		}
    	}
		$this->display();
    }

    public function logout(){
    	echo "该功能尚未实现";
    }

    function verifyImg(){
    	$cfg=array(
    		'imageH'    =>  30,               // 验证码图片高度
	        'imageW'    =>  100,               // 验证码图片宽度
	        'fontSize'  =>  14,
	        'length'    =>  4,               // 验证码位数
	        'fontttf'   =>  '4.ttf',              // 验证码字体，不设置随机获取
    	);
    	
        $very = new \Think\Verify($cfg);
        $very->entry();

    }
}