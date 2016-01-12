<?php namespace Admin\Model;

use Hdphp\Model\Model;

class Article extends Model{

	//数据表
	protected $table = "shop_article";

	//完整表名
	protected $full = false;

	//自动验证
	protected $validate=array(
		//字段名: 表单字段名
		//验证方法: 函数或模型方法
		//验证条件: 1有字段时验证(默认)	2值不为空时验证  	3必须验证 
		//验证时间: 1 插入时验证		2更新时空时验证 	3全部情况验证 (默认)
		//array('字段名','验证方法','提示信息',验证条件,验证时间),
	);

	//自动完成
	protected $auto=array(
		//字段名: 表单字段名
		//处理方法: 函数或模型方法
		//方法类型: string(字符串 默认)  function(函数)  method(模型方法)
		//验证条件: 1有字段时处理(默认)	2值不为空时 3必须处理
		//处理时间: 1 插入时  2更新时 3全部情况 (默认)
		array('create_at','time','function',3,1),
	);

	public function getAll()
	{
		return $this->orderBy('article_id','DESC')->get();
	}

	//添加文章
	public function store()
	{
		if($this->create()){
			return $this->add();
		}
	}

	//添加文章
	public function edit()
	{
		if($this->create()){
			return $this->save();
		}
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