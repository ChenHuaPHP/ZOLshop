<?php namespace Admin\Model;

use Hdphp\Model\Model;

class ShopAttr extends Model{

	//数据表
	protected $table = "shop_attr";

	//完整表名
	protected $full = false;

	//自动验证
	protected $validate=array(
		//字段名: 表单字段名
		//验证方法: 函数或模型方法
		//验证条件: 1有字段时验证(默认)	2值不为空时验证  	3必须验证 
		//验证时间: 1 插入时验证		2更新时空时验证 	3全部情况验证 (默认)
		array('attr_name','required','类型名称不能为空',3,3),
	);

	//自动完成
	protected $auto=array(
		//字段名: 表单字段名
		//处理方法: 函数或模型方法
		//方法类型: string(字符串 默认)  function(函数)  method(模型方法)
		//验证条件: 1有字段时处理(默认)	2值不为空时 3必须处理
		//处理时间: 1 插入时  2更新时 3全部情况 (默认)
		//array('字段名','处理方法','方法类型',验证条件,验证时间),
	);


	public function getAll()
	{
		return $this->get();
	}

	public function store()
	{
		if($this->create()){
			return $this->add();
		}
	}

	public function getOne()
	{
		$attr_id = Q('attr_id');
		return $this->where('attr_id',$attr_id)->first();
	}

	public function one($attr_id)
	{
		return $this->where('attr_id',$attr_id)->first();
	}


	public function edit()
	{
		if($this->create()){
			return $this->save();
		}
	}

	public function getAttrList()
	{
		$shop_type_id = Q('shop_type_id');
		return $this->where('shop_type_id',$shop_type_id)->orderBy('attr_type','DESC')->get();
	}

	//时间操作
	protected $timestamps=false;

	//允许插入的字段
	protected $insertFields=array();

	//允许更新的字段
	protected $updateFields=array();

	//前置方法 比如: _before_add 为添加前执行的方法
	protected function _before_add(){}
	protected function _before_delete(){}
	protected function _before_save(&$data){}

	protected function _after_add(){}
	protected function _after_delete(){}
	protected function _after_save(){}

}