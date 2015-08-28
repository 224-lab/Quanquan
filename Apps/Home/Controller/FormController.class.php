<?php
namespace Home\Controller;
use Think\Controller;
class FormController extends Controller{
	public function insert(){
		$Form = D('Form');
		if($Form->create()){
			$result = $Form -> add();
			if($result){
				$this->success('数据添加成功！');
			}
			else{
				$this->error('数据添加错误！');
			}
		}
		else{
			$this->error($Form->getError());
		}
	}
	
	
	public function select(){
		$Form = M('Photos');
		//读取数据
		$list = $Form->limit(10)->select();
		$this->assign('list',$list);
		$this->display();
	}
	
	public function edit($id=1){
		$Form = M('Form');
		$this->assign('vo',$Form->find($id));
		$this->display();
	}
	
	public function update(){
		$Form = D('Form');
		if($Form->create()){
			$result = $Form->save();
			if($result){
				$this->success('操作成功！');
// 				$this->display('index:index');
			}else{
				$this->error('写入错误！');
			}
		}else{
			$this->error($Form->getError());
		}
	}
}