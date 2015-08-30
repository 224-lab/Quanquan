<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<title><?php echo ($title); ?></title>
	<meta name="keywords" content="[keywords]" />
	<meta charset="UTF-8" />
</head>
<link rel="stylesheet" type="text/css" href="/Quanquan/Public/Css/artists.css" />
<script type="text/javascript" src="/Quanquan/Public/Js/responsive-nav.js"></script>
<div id="page-wrapper" class="site">
	<div class="b-main" role="main">
		<div class="Artmenu">
			<nav class="nav-collapse">
				<ul>
					<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if($vo["id"] == 1): ?><li class="active">
								<a  href="#artist<?php echo ($vo["id"]); ?>" data-scroll><?php echo ($vo["artist_name"]); ?></a>
							</li>
						<?php else: ?> 
							<li>
								<a href="#artist<?php echo ($vo["id"]); ?>" data-scroll><?php echo ($vo["artist_name"]); ?></a>
							</li><?php endif; endforeach; endif; else: echo "" ;endif; ?>
				</ul>
			</nav>
		</div>
		<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><section id="artist<?php echo ($vo["id"]); ?>">
				<div class="starImg">
					<img src="/Quanquan/Public/<?php echo ($vo["artist_main_image_url"]); ?>" />
				</div>
				<div class="starName">
					<p><?php echo ($vo["artist_name"]); ?></p>
				</div>
				<div class="starIntro">
					<p><?php echo ($vo["artist_text"]); ?></p>
				</div>
					<div class="fuckpng">
						<img src="/Quanquan/Public/<?php echo ($vo["artist_first_image_url"]); ?>" />
						<img src="/Quanquan/Public/<?php echo ($vo["artist_second_image_url"]); ?>" />
						<img src="/Quanquan/Public/<?php echo ($vo["artist_third_image_url"]); ?>" />
					</div>
				</div>
			</section><?php endforeach; endif; else: echo "" ;endif; ?>
	</div>
</div>
<script type="text/javascript" src="/Quanquan/Public/Js/fastclick.js"></script>
<script type="text/javascript" src="/Quanquan/Public/Js/scroll.js"></script>
<script type="text/javascript" src="/Quanquan/Public/Js/fixed-responsive-nav.js"></script>

</html>