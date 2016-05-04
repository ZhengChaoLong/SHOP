<?php 

namespace Model;
use Think\Model;
class CategoryModel extends Model{


//循环遍历获取分类
public  function getCategory()
	{
		$data = array();
		// 先取出所有的分类
		$allCat = $this->select();
		// 再从所有的分类中取出顶级的
		foreach ($allCat as $k => $v)
		{
			if($v['parent_id'] == 0)
			{
				// 循环找这个顶级分类的二级分类
				foreach ($allCat as $k1 => $v1)
				{
					if($v1['parent_id'] == $v['cat_id'])
					{
						
						$v['children'][] = $v1;
					}
				}
				$data[] = $v;
			}
		}
		return $data;
	}


}