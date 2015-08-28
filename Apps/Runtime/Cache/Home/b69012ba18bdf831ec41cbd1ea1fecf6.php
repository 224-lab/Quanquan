<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<title>[title]</title>
	<meta name="keywords" content="[keywords]" />
	<meta charset="UTF-8" />
</head>
<div class="fuck u">
<FORM method="post"  action="/quanquan/index.php/Home/Form/update">
标题：<INPUT type="text" name="title" value="<?php echo ($vo["title"]); ?>"><br/>
内容：<TEXTAREA name="content" rows="5" cols="45"><?php echo ($vo["content"]); ?></TEXTAREA>
<INPUT type="hidden" name="id" value="<?php echo ($vo["id"]); ?>">
<INPUT type="submit" value="提交">
</FORM>
</div>
</html>