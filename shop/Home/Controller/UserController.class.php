<?php
//用户控制器

namespace Home\Controller;
use Think\Controller;  //注意这里的  use  不要写错了
use Think\Verify;
// include_once(Common/Common/common.php);

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
                    cookie('username',$res['username']);
                    cookie('user_id',$res['user_id']);
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
        ob_end_clean();  //解决验证码吗错误无法显示的问题
        $very->entry(1);

        // import("ORG.Util.Image");
        // Image::buildImageVerify($cfg);
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
                $z = $user -> add($data);
                $urlencode = md5($data['password']).htmlspecialchars($data['username']);
    $content=<<<EOF
        亲爱的{$username}您好~！感谢您注册我们网站<br/>
        请点击此链接激活帐号即可登陆！<br/>
        <a href="{}">{$urlencode}</a>
        <br/>
        如果点此链接无反映，可以将其复制到浏览器中来执行，链接的有效时间为24小时。      
EOF;
                if($z){
                    sendMail($data['user_email'], '激活邮件', $content);
                    $this -> redirect('User/login',array(),3,'register success! please looking your email !');
                }
                    
                }
            }else{
                //验证失败，输出查看错误信息
                $this -> assign('errorInfo',$user->getError());
            }
        $this->display();
	}


}