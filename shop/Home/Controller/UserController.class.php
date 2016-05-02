<?php
//用户控制器

namespace Home\Controller;
use Think\Controller;  //注意这里的  use  不要写错了
use Think\Verify;
include_once(Common/Common/common.php);

class UserController extends Controller{


//用户登录
	public function login(){
        $user = D('User');
		//展现方法
        if( !empty($_POST) ){
            $vry = new Verify();
            if($vry->check($_POST['captcha'])){
                $userpwd = array(
                    'username'=>$_POST['username'],
                    'password'=>$_POST['password'],
                );
                $res = $user->where($userpwd)->find();
                if($res){
                    //$this ->redirect (地址分组/控制器/操作方法, 参数, 间隔时间, 提示信息)
                    session('username',$res['username']);
                    session('user_id',$res['user_id']);
                    $this ->redirect('Home/Index/index', array('username'=>$res['username']), 2, 'Login success');
                }else{
                    $arr = array('username'=>'error','password'=>'error');
                    $this->assign('errorInfo',$arr);
                }
            }else{
                $errorInfo = '验证码错误';
                $this->assign('error',$errorInfo);
            }
               
        }else{
                
                $this -> assign('errorInfo',$user->getError());
        }
            
            //$vrf = new Verify()
        
		$this->display();
		//$this->display('register');
	}
//验证码校验
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






//用户注册
	public function register(){
		$user = new \Model\UserModel();  //必须实例化普通model对象(内部有验证规则)
        //两个逻辑：展示、收集
        if(!empty($_POST)){
            //$z = $user -> add($_POST);
            $data = $user -> create(); //收集信息、表单自动验证
            if($data){
                //验证成功，就会通过$data体现收集到的表单信息
                //爱好的数组变为字符串
                $data['user_hobby'] = implode(',',$data['user_hobby']);

                // $mail='415873846@qq.com';
                // $title='邮箱激活';
                // $subject='';
                // $content = '111111111';
                // $attachment=null;
                // think_send_mail($mail,$title,$subject,$content,$attachment);
                

                $z = $user -> add($data);
                if($z)
                    $this -> redirect('User/login');
            }else{
                //验证失败，输出查看错误信息
                $this -> assign('errorInfo',$user->getError());
            }
        }
        $this -> display();
		
	}


}