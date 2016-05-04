<?php 


	namespace Home\Controller;
	use Think\Controller;

	/**
	* 
	*/
	class CarController extends Controller{//注意这里不要多了括号
		
		 function showcar()//注意这里面不要多了参数
		{
//这里还要判断session中是否存在用户，否则跳转到首页给用户浏览或登录
		$login='visible';
        $layout='hidden';
        $register = 'visible';
        $userinfo = 'hidden';
        $username = session('username');

        $car = D('Car');//实例化对象并连接数据库Car;
       	$goods = D('Goods');

        //根据购物车里面的数量进行分页
        $cnt = $car -> count();
        session('count',$cnt);//将商品的件数放进session中
        $per = 7;
        $page_obj = new \Tools\Page($cnt,$per);

        $sql = "SELECT c.*,g.* FROM sw_car c,sw_goods g WHERE c.goods_id=g.goods_id ".$page_obj->limit; 
        $info = $car->query($sql);
        //var_dump($info);
        $pagelist = $page_obj -> fpage(array(2,3,4,5,6,7,8));

        $this->assign('pagelist',$pagelist);
        $this->assign('info',$info);
//返回购物车的总金额
        $sumMoney = $car->sum('money');
        $this->assign('sumMoney',$sumMoney);

//页面头顶的问候语
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


//购物车里取消购买某个商品，则删除购物车里面的记录，
//如果要实现用户的足迹，可以设置is_delete键来实现逻辑删除，而非物理删除，
//便于后台管理者知道用户添加过哪些商品
        public function cancel(){
            $car = D('Car');
            $cid = $_GET['cid'];
            $car->where("goods_id=$cid")->delete();
            $this->redirect('showcar');
        }


        public function addnumber(){
                $goods = D('Goods');
                $car = D('Car');
                $id = $_GET['id'];

                $data = $car->where("goods_id=$id")->find();
                var_dump($data);
                $ginfo = $goods->where("goods_id=$id")->find();
                var_dump($ginfo);
                
                $data['number'] += 1;
                $data['money'] = strval(floatval($data['number'])*floatval($ginfo['goods_price']));
                var_dump($data);
                $res = $car->where("goods_id=$id")->save($data);
                var_dump($res);
                if($res){
                    $this->redirect('showcar');
                }else{
                    $this->error();
                }
        }

        public function subnumber(){
                 $goods = D('Goods');
                 $car = D('Car');
                 $id = $_GET['id'];

                 $data = $car->where("goods_id=$id")->find();
                //var_dump($data);
                $ginfo = $goods->where("goods_id=$id")->find();

                if(  intval($data['number']) >=2 ){
                    $data['number'] -= 1;        
                }else{
                    $data['number'] = 1;
                }
                $data['money'] = strval(floatval($data['number'])*floatval($ginfo['goods_price']) );
                //var_dump($data);
                $res = $car->where("goods_id=$id")->save($data);
                //var_dump($res);
                
                $this->redirect('showcar');
            
        }


	}


 ?>