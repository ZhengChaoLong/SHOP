<?php 


	namespace Home\Controller;
	use Think\Controller;

	/**
	* 
	*/
	class GoodsController extends Controller{//注意这里不要多了括号
		
		 function showlist()//注意这里面不要多了参数
		{

			
			$this->display();
		}


		public function detail(){
			$this->display();
		}
	}

 ?>