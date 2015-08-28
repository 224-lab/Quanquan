<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<title>[title]</title>
	<meta name="keywords" content="[keywords]" />
	<meta charset="UTF-8" />
</head>
<div class="fuck u">
<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; echo ($vo["title"]); ?>:<?php echo ($vo["content"]); ?><br/><?php endforeach; endif; else: echo "" ;endif; ?>
</div>
</html>