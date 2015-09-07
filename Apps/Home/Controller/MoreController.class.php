<?php
namespace Home\Controller;
use Think\Controller;
class MoreController extends Controller{
    //photos
	public function co_star(){
        $Stars = M('Co_stars');
        $list = $Stars->limit(20)->select();
        $this->assign('list',$list);
		$this->display();
	}

    function upload(){
        $tmp_name = $_FILES['upfile']['tmp_name'];
        $file = $_FILES["upfile"];  //上傳文件名稱
        move_uploaded_file($tmp_name,'tmp/'.$file['name']);  //將上傳文件移動到指定目錄待解壓

    }
    public function co_star_edit(){
        if($_POST['submit'] and $_POST['index']!=""){
            $Stars = M('Co_stars');
            $index = $_POST['index'];
            $star = $Stars->where('photo_index='.$index)->find();

            if($_POST['title'] !=""){
                $data['photo_title'] = $_POST['title'];
            }

            $tmp_name = $_FILES['upfile']['tmp_name'];
            $file = $_FILES["upfile"];  //上傳文件名稱
            //C('__PUBLIC__')爲 /Quanquan/Public
            move_uploaded_file($tmp_name, 'Public/WebResources/co_star/'.$file['name']);  //將上傳文件移動到指定目錄

            if($file['name']){
                unlink($star['photo_url']);
                $data['photo_url'] = C('__PUBLIC__').'/WebResources/co_star/'.$file['name'];
            }

            if($Stars->where('photo_index='.$index)->save($data)){
                echo '修改成功';
            }else{
                echo $star['photo_url'];
            }

        }else{
            echo '未輸入數據';
        }
        $this->display();
    }
}