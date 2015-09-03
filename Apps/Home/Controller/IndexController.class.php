<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller{
    public function index(){
//     	$this->display('')
        $Banner     = M('Banner');// 实例化Data数据模型
        $topBanner   = $Banner->where('flag=1')->select();
        $indexMap = 'WebResources/world-map.png';
        $coCompany = 'WebResources/companys.png';
        $quanquanCompanys = 'WebResources/qq.png';
        $width = $Banner->where('flag=1')->count();
        $width = 100/$width;
        $this->assign('bannerImg',$topBanner);
        $this->assign('background',$indexMap);
        $this->assign('coCompany',$coCompany);
        $this->assign('companys',$quanquanCompanys);
        $this->assign('bannerWidth',$width);
        $this->display();
    }
   
    //photos
	public function artists(){
		$Form = M('Artists');
		//读取数据
		$list = $Form->limit(20)->select();
		$title = '藝人介紹';
		$this->assign('list',$list);
		$this->assign('title',$title);
		$this->display();
	}
}