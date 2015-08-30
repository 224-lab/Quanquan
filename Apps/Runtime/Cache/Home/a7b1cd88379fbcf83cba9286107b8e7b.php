<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<title>[title]</title>
	<meta name="keywords" content="[keywords]" />
	<meta charset="UTF-8" />
</head>
<div id="page-wrapper" class="site">
	<div class="b-main" role="main">
		<div class="Artmenu">
			<nav class="nav-collapse">
				<ul>
					<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="#artist<?php echo ($vo["id"]); ?>" data-scroll>
							<?php echo ($vo["artist_name"]); ?>
						</a></li><?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>
			</nav>
				<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><section id="artist<?php echo ($vo["id"]); ?>">
						<div class="starImg">
							<img src="/quanquan/Public/<?php echo ($vo["artist_main_image_url"]); ?>" /></div>
								       	 	<div class="starName">
							<p><?php echo ($vo["artist_name"]); ?></p>
						</div>
						<div class="starIntro">
							<p><?php echo ($vo["artist_text"]); ?></p>
						</div>
							<div class="fuckpng">
								<img src="/quanquan/Public/<?php echo ($vo["artist_first_image_url"]); ?>" />
								<img src="/quanquan/Public/<?php echo ($vo["artist_second_image_url"]); ?>" />
								<img src="/quanquan/Public/<?php echo ($vo["artist_third_image_url"]); ?>" />
							</div>
						</div>
					</section><?php endforeach; endif; else: echo "" ;endif; ?>

		</div>
	</div>
</div>

</html>