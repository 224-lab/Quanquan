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
    public function photos(){
        $photos = M('Photos');
        $group1 = $photos->where('groupid=1')->select();
        $group2 = $photos->where('groupid=2')->select();
        $group3 = $photos->where('groupid=3')->select();
        $group4 = $photos->where('groupid=4')->select();
        $group5 = $photos->where('groupid=5')->select();
        $groups = array(
            1=>'group1',
            2=>'group2',
            3=>'group3',
            4=>'group4',
            5=>'group5'
        );
        $position = array(
            1=>'lefttop',
            2=>'righttop',
            3=>'middle',
            4=>'leftbottom',
            5=>'rightbottom'
        );
        $this->assign('position',$position);
        $this->assign('groups',$groups);
        $this->assign('group1',$group1);
        $this->assign('group2',$group2);
        $this->assign('group3',$group3);
        $this->assign('group4',$group4);
        $this->assign('group5',$group5);
        $this->display();
    }
   
    //artists
	public function artists(){
		$Form = M('Artists');
		//读取数据
		$list = $Form->limit(20)->select();
		$title = '藝人介紹';
		$this->assign('list',$list);
		$this->assign('title',$title);
		$this->display();
	}
	
	public function business(){
		$content = M('business');
		$list = $content->limit(3)->select();
		$title = '公司介紹';
		$this->assign('title',$title);
		$this->assign('list',$list);
		$this->display();
	}
}