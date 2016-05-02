<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        
        
        $username = session('username');
        $login='visible';
        $layout='hidden';
        $register = 'visible';
        $userinfo = 'hidden';     
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

    public function layout(){
        session('username',null);
        // session_unset();
        // session_destroy();
        $this->redirect('index');

    }
}