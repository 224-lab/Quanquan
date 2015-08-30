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
	public function artists(){
		$Form = M('Artists');
		//读取数据
		$list = $Form->limit(12)->select();
		$title = '藝人介紹';
		$this->assign('list',$list);
		$this->assign('title',$title);
		$this->display();
	}
}