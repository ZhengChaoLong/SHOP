<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index($pid=null){

//用户是否登录
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


                //获取商品分类列表
                $cate = new \Model\CategoryModel();
                $Category=$cate->getCategory();
                $this->assign('Category',$Category);//映射值


//商品展示         
                $goods = D('Goods');
               //获取数据库中的总条数;
               $cnt = $goods->count();
               $per=8;
               //实例化分页类对象
               $page_obj = new \Tools\Page($cnt,$per);
               //制作一条sql语句，获取每页显示的数据
               
//通过传过来的id判断是要显示全部商品还是显示某个类别的商品
//默认为空，则显示商品表中所有的商品
               $pid = $_GET['pid'];
                if($pid==null){
                    $sql ="select * from sw_goods order by goods_id desc ";
                }else{
                    $result = $cate->where("cat_id=$pid")->find();
                    //var_dump($result);
                    if($result['parent_id']==false){//这是顶级分类
                        $result = $cate->where("parent_id=$pid")->select();
                        //var_dump($result);
                        foreach($result as $k=>$v){
                            $arrid[]=$v['cat_id'];//存储顶底分类的子分类id，下面要通过所有子分类的id查找出商品，
                            //这里没有做出算法的优化---------未完善--------
                        }
                        $sql ="select * from sw_goods where goods_category_id=$arrid[0] OR goods_category_id=$arrid[1] order by goods_id desc ";
                    }else{
                        $sql ="select * from sw_goods where goods_category_id=$pid order by goods_id desc ";
                    }                 
                }
               $sql = $sql.$page_obj->limit;
               $info = $goods->query($sql);
               $pagelist = $page_obj->fpage(array(2,3,4,5,6,7,8));

               $this->assign('pagelist',$pagelist);

               $this->assign("info",$info);
                //var_dump($info);

          

        $this->display();
    }


//商品加入购物车
        public function joincat(){
            $car = D('Car');
            if(session('username')){
                $data['goods_id']=$_GET['goods_id'];
                $is_exit = $car->where($data)->find();
                //var_dump($is_exit);
                if($is_exit==null){ //如果购物车不存在该商品，则把该商品加入购物车
                    $car->add($data);
                } 
                //如果该商品已经存在购物车了，则直接返回首页，并提示成功加入购物车.
                $this->redirect('index',array(),2,'成功加入购物车！(joinging the car success!)');
            }else{
                $this->redirect('User/login',array(),2,'   Please login first  ');
            }
             
        }


//退出
    public function layout(){
        session('username',null);
        session('user_id',null);
        cookie('username',null);
        cookie('user_id',null);
        $this->redirect('index');

    }



   
}