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

        // $where=$car->field('goods_id')->select();
        // foreach ($where as $key => $value){
        //     $arr = $value['goods_id'];
        //     $info[] = $goods->where("goods_id=$arr")->select();
        // }//三维数组简化为二维数组
        // foreach($info as $key=>$value){
        //     foreach($value as $k => $v ){
        //         $inf[]= $v;
        //     }
        // }
        //根据购物车里面的数量进行分页
        $cnt = $car -> count();
        session('count',$cnt);//将商品的件数放进session中
        $per = 7;
        $page_obj = new \Tools\Page($cnt,$per);

        $sql = "SELECT  g.* FROM sw_car c,sw_goods g WHERE c.goods_id=g.goods_id ".$page_obj->limit; 
        $info = $car->query($sql);
        //var_dump($info);
        $pagelist = $page_obj -> fpage(array(2,3,4,5,6,7,8));

        $this->assign('pagelist',$pagelist);
        $this->assign('info',$info);



        // $cart = CartTool::getCart();
        // $car_goods_list = $cart->all();//获取商品列表

        // $goods_num = $cart->getNum();//商品个数

        // $goods_sum_price =$cart->getPrice();//总价格

        // $cart->addItem($goods_id,$goods_list['goods_name'],$goods_list['shop_price'],$goods_list['brand'],$goods_list['goods_thumb'],$num);//增加一件商品到购物车

        // $cart->clear();//清空购物车










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