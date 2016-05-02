<?php 

namespace Admin\Controller;
use Think\Controller;

/**
* 		
*/
class GoodsController extends Controller
{
	

//展示商品
	public function showlist()
	{
		//$goods = new GoodsModel();//报错，在本空间内寻找
		// $goods = new \Model\GoodsModel();
		// $info = $goods->where('goods_delete=1')->order('goods_id desc')->select();
       $goods = D('Goods');
       //获取数据库中的总条数;
       $cnt = $goods->count();
       $per=7;
       //实例化分页类对象
       $page_obj = new \Tools\Page($cnt,$per);
       //制作一条sql语句，获取每页显示的数据
       $sql ="select * from sw_goods order by goods_id desc ".$page_obj->limit;
       $info = $goods->query($sql);

       $pagelist = $page_obj->fpage(array(2,3,4,5,6,7,8));
       $this->assign('pagelist',$pagelist);
		$this->assign("info",$info);
		$this->display();
	}

//添加商品
	public function tianjia(){
		//实例化基类模型，并操作sw_goods数据表;
		$goods = D('Goods');

		if(!empty($_POST)){
         
            //收集表单信息
        
            $z = $goods -> add($_POST);
            if($z){
                //$this ->redirect (地址分组/控制器/操作方法, 参数, 间隔时间, 提示信息)
                $this ->redirect('showlist', array(), 2, 'tian jia shangpin success');
            }else{
                $this ->redirect('tianjia', array(), 2, 'tian jia shangpin fail');
            }
        }else{
            $this -> display();//展示表单
        }
	}

//修改，更新商品
	public function upd($goods_id){
		$goods = D('Goods');
        //两个逻辑：展示、收集
        if(!empty($_POST)){
           
           $z = $goods->where("goods_id=$goods_id")->save($_POST);
           //这里没有添加条件的话则返回false，这还是由于tp设置了这样机制
            if($z){
                $this ->redirect('showlist', array(), 2, 'update success');
            }else{
               $this ->redirect('upd', array('goods_id'=>$goods_id), 2, 'update fail');
            }
        }else{
            //根据$goods_id获得被修改商品的信息
            //数据查询find()方法，通过一维数组返回一条记录信息
            $info = $goods->find($goods_id);
            $this -> assign('info',$info);
            $this -> display();
        }
	}

	public function del($goods_id){   
	//这里实现的是逻辑删除，在数据库中并没有删除，而是将删除字段设为真。方便后期对数据库的查看和维护。
			$goods = D('Goods');
			$goods->goods_delete=0;
			$z = $goods->where("goods_id=$goods_id")->save();
            if($z){
                $this ->redirect('showlist', array(), 2, 'delete success');
            }else{
               $this ->redirect('showlist', array(), 2, 'delete fail');
            }
	}


}
	
 ?>