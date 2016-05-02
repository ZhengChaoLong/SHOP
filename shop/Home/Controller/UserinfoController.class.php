<?php 


	namespace Home\Controller;
	use Think\Controller;

	/**
	* 
	*/
	class UserinfoController extends Controller{//注意这里不要多了括号
		
		 function showinfo()//注意这里面不要多了参数
		{
            //判断用户是否登录，如果没有登录则跳转到首页；
        if(!session('username')){
            $this ->redirect('Home/Index/index');
        }
		$login='visible';
        $layout='hidden';
        $register = 'visible';
        $userinfo = 'hidden';
        $username = session('username');

        $user = D('User');//实例化对象并连接数据库User;
        $arr = array(
        		'username'=>$username,
        	);
        $info = $user->where($arr)->find();
        //$arr = $info['user_hobby'];
        //$info['user_hobby'] = explode(",",$arr);
        $this->assign('info',$info);
        //var_dump($info);
        if($username!=null){
        	$layout = 'visible';
            $login = 'hidden';
            $register = 'hidden';
            $userinfo = 'visible';
        	$username = '<span style="color:red;">亲爱的'.$username.'用户,欢迎回来！</span>';   	
        	$this->assign('username',$username);
        }
        $this->assign('register',$register);
        $this->assign('userinfo',$userinfo);
        $this->assign('login',$login);
        $this->assign('layout',$layout);
		$this->display();
		}

	}

 ?>