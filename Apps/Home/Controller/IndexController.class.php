<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller{
    public function index(){
//     	$this->display('')
        $Data     = M('Data');// 实例化Data数据模型
        $result     = $Data->find(2);
        $this->assign('result',$result);
        $this->display();
    }
   
    //photos
	public function photos(){
		$Form = M('Artists');
		//读取数据
		$list = $Form->limit(12)->select();
		$this->assign('list',$list);
		$this->display();
	}
}