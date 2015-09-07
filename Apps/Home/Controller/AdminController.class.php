<?php 
namespace Admin\Controller;
use Think\Controller;

class AdminController extends Controller {
	public function upload() {
		import ( 'ORG.Net.UploadFile' );
		$upload = new UploadFile ();
		$upload->maxSize = 3145728;
		$upload->allowExt = array ('jpg','gif','png','jpeg');
		$upload->savePath = './Public/Uploads';
		if (! $upload->upload ()) {
			$this->error ( $upload->getErrorMsg () );
		} else {
			$this->success ();
		}
	}
}	
?>