<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<title><?php echo ($title); ?></title>
	<meta name="keywords" content="[keywords]" />
	<meta charset="UTF-8" />
	<link rel="stylesheet" type="text/css" href="/quanquan/Public/Css/_GLOBAL.css" />
	
</head>
<div id="page-wrapper" class="site">
<header class="masthead" role="banner">
				<div class="x-navbar">
					<div class="x-navbar-inner">
						<div class="x-container max width">
							<h1 class="visually-hidden">全權文化傳播 全權影視製作 全權信息科技 全权文化传播 全权影视制作 全权信息科技</h1>
							<a href="index.html" class="x-brand img" title="全權">
								<img src="/quanquan/Public/WebResources/global/x-logo.png" alt="全權" />
							</a>
							<nav class="x-nav-wrap desktop" role="navigation">
								<ul id="menu-top-navigation" class="x-nav">
									<li id="menu-item" class="menu-item menu-item-type"><a href="index.html"><span>Home</span></a></li>
									<li id="menu-item" class="menu-item menu-item-type"><a href="business.html"><span>Business</span></a></li>
									<li id="menu-item" class="menu-item menu-item-type"><a href="photos.html"><span>Photos</span></a></li>
									<li id="menu-item" class="menu-item menu-item-type"><a href="http://v.baidu.com/v?ct=301989888&rn=20&pn=0&db=0&s=25&ie=utf-8&word=%E8%A3%B4%E6%99%93%E9%AA%8F" target="_blank"><span>Videos</span></a></li>
									<li id="menu-item" class="menu-item menu-item-type"><a href="artists.html"><span>Artists</span></a></li>
									<li id="menu-item"  class="sumu">
										<a href="#"><span class="more">More</span></a>
										<ul class="sub-menu">
											<li id="sub-menu-item"><a href="team_number.html"><span>Founder</span></a></li>
											<li id="sub-menu-item"><a href="star_photos.html"><span>Co-Star</span></a></li>
											<li id="sub-menu-item"><a href="http://image.baidu.com/search/index?tn=baiduimage&ps=1&ct=201326592&lm=-1&cl=2&nc=1&ie=utf-8&word=%E8%A3%B4%E6%99%93%E9%AA%8F" target="_blank"><span>More Pics</span></a></li>
											<li id="sub-menu-item"><a href="personal_order.html"><span>Personal order</span></a></li>
											<li id="sub-menu-item"><a href="contact_us.html"><span>Contact us</span></a></li>
										</ul>
									</li>
									<li id="menu-item" class="menu-item menu-item-type"><a href="#"><span></span></a></li>
									<li id="menu-item" class="menu-item menu-item-type"><a href="news.html"><span>News</span></a></li>
								</ul>
							</nav>
						</div>
					</div>
				</div>
			</header>
<link rel="stylesheet" type="text/css" href="/quanquan/Public/Css/index.css" />
<script type="text/javascript" src="/quanquan/Public/Js/jquery-2.1.1.js"></script>
<script type="text/javascript" src="/quanquan/Public/Js/unslider.js"></script>
<div class="x-main full" role="main">
				<div id="x-content-band-1" class="x-content-band white bg-image man">
					<div class="x-container max width">
						<p style="text-align:center;">
								<img class="quanquan" src="/quanquan/Public/<?php echo ($companys); ?>"/>
							</p>
								<h3 style="text-align:center">
							Some people hear their own inner voices with great clearness. And they live by what they hear.Such people become crazy, or they become legends ...
						</h3>
					</div>
				</div>

				<div class="banner">
					<ul>
						<?php if(is_array($bannerImg)): $i = 0; $__LIST__ = $bannerImg;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li style="width:<?php echo ($bannerWidth); ?>%;">
								<img src="/quanquan/Public/<?php echo ($vo["banner_image_url"]); ?>" />
							</li><?php endforeach; endif; else: echo "" ;endif; ?>
					</ul>
				</div>

				<div class="x-partner">
					<div class="pat-pic">
						<p><img src="/quanquan/Public/<?php echo ($coCompany); ?>"/><p>
					</div>
				</div>
			</div>
			<script type="text/javascript">

			    var unslider = $('.banner').unslider();

			    $('.unslider-arrow').click(function() {
			        var fn = this.className.split(' ')[1];

			        //  Either do unslider.data('unslider').next() or .prev() depending on the className
			        unslider.data('unslider')[fn]();
			    });
			 
			</script>



</html>