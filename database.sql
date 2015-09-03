/*Photos_create*/
CREATE TABLE IF NOT EXISTS `quanquan_photos`(
`id`int(8)unsigned NOT NULL AUTO_INCREMENT,
`photo_href`varchar(255) NOT NULL,
`phpto_album`varchar(50) NOT NULL,
`photo_title`varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET="utf8";

/*Photos_insert*/
INSERT INTO `quanquan_photos`(`photo_href`,`phpto_album`,`photo_title`) VALUES
('href1','全权影视','叶问'),
('href2','全权影视','河东狮吼'),
('href3','全权影视','如果·爱'),
('href4','全权影视','白领公寓');




/*Artists_Create*/
CREATE TABLE IF NOT EXISTS `quanquan_artists`(
`id` int(8)unsigned NOT NULL AUTO_INCREMENT,
`artist_name`varchar(50) NOT NULL,
`artist_text`varchar(255) NOT NULL,
`artist_main_image_url`varchar(255) ,
`artist_first_image_url`varchar(255) ,
`artist_second_image_url`varchar(255) ,
`artist_third_image_url`varchar(255) ,
`artist_index` int(8) NOT NULL,
`artist_bgColor` varchar(15),
`artist_fontColor` varchar(15),
PRIMARY KEY (`id`)
)ENGINE=MyISAM DEFAULT CHARSET="utf8";



/*co_stars_CREATE*/
CREATE TABLE IF NOT EXISTS `quanquan_co_stars`(
`id`int(8)unsigned NOT NULL AUTO_INCREMENT,
`photo_title`varchar(255) NOT NULL,
`photo_url`varchar(255) NOT NULL,
`photo_index`int(2)unsigned NOT NULL,
PRIMARY KEY (`id`)
)ENGINE=MyISAM DEFAULT CHARSET="utf8";







/*Artists_insert*/
INSERT INTO `quanquan_artists`(`artist_index`,`artist_bgColor`,`artist_fontColor`,`artist_name`,`artist_text`,`artist_main_image_url`,`artist_first_image_url`,`artist_second_image_url`,`artist_third_image_url`) VALUES
('1','#ffffff','#68489D','台北音乐人','台北音乐人<br/>
魔音术士·僵尸艾尔<br/>
亚洲魔音术士<br/>
超强的电音&nbsp;全程打碟互动,最强魔音撼动每一场；<br/>
跟随&nbsp;AIR&nbsp;的音乐摇摆的节奏,分分钟释放您身上娱乐的细胞；','WebResources/artist/artist1.jpg','WebResources/artist/1/1.jpg','WebResources/artist/1/2.jpg','WebResources/artist/1/3.jpg'),
('2','#00C3FF','#333333','AV女优','东京AV女优<br/>
性感尤物&nbsp;游戏动漫代言<br/>
潮牌夜店DJ&nbsp;童颜巨乳<br/>
日本av女优专利,av女优排行榜上拥有其排名<br/>
公司提供日本av女优现场表演<br/>
（现场DJ秀,唱歌互动,与君共舞,魅力四射的走秀）<br/>','WebResources/artist/artist2.jpg','WebResources/artist/2/1.jpg','WebResources/artist/2/2.jpg','WebResources/artist/2/3.jpg'),
('3','#7C60BA','#AAC931','独一无二','六胞胎杂技表演：&nbsp;一对双胞胎兄弟娶了一对双胞胎姐妹创造出一对长得以一模一样的BABY，这乃是无与伦比前所未有的奇迹,<br/>
看过他们的表演，更让你有与众不同的感觉，他们六人曾获过全国表演大赛冠军。<br/>
双胞胎小提琴：&nbsp;毕业于音乐学院的一对才女，坚持动感提琴，他们的每场演出让观众体验到与无伦比的激情和举世无双的感受。<br/>
双胞胎模特：&nbsp;拥有艳人的身材和漂亮的脸蛋还有专业的走台，无论在广告界模特界都小有名气，每次出场都出类拔萃 。<br/>
台湾三胞胎：&nbsp;拥有三张一模一样的脸，一模一样的性格 ，已经是很多知名品牌的代言人，她们的表演绝对是空前绝后。','WebResources/artist/artist3.jpg','WebResources/artist/3/1.jpg','WebResources/artist/3/2.jpg','WebResources/artist/3/3.jpg'),
('4','#83EDED','#008DC4','网络红人','她们个个都是&nbsp;96 嫩模<br/>
她们个个都是&nbsp;平面广告<br/>
她们个个都是&nbsp;影视新秀<br/>
别看她们的年龄，可各个都拥有几十万的粉丝，而且都是活粉<br/>
因为她们身上的确拥有着与众不同的美丽和魅力。','WebResources/artist/artist4.jpg','WebResources/artist/4/1.jpg','WebResources/artist/4/2.jpg','WebResources/artist/4/3.jpg'),
('5','#FFCB39','#684890','选秀成员','我型我秀：马海生&nbsp;赵英俊&nbsp;&nbsp;余思远&nbsp;&nbsp;余超颖&nbsp;&nbsp;罗开元&nbsp;&nbsp;<br/>高娅瑗&nbsp;&nbsp;左佳&nbsp;&nbsp;吴斌&nbsp;&nbsp;等<br/>
                          超级女生：谭唯唯 尚雯婕&nbsp;&nbsp;叶一茜&nbsp;&nbsp;纪敏佳&nbsp;&nbsp;黄雅莉&nbsp;&nbsp;<br/>安又琪&nbsp;&nbsp;光子&nbsp;&nbsp;等<br/>
好男儿：&nbsp;&nbsp;吴建飞&nbsp;&nbsp;毛方圆&nbsp;&nbsp;蒲巴甲&nbsp;&nbsp;巫迪文&nbsp;&nbsp;宋晓波&nbsp;&nbsp;<br/>沈人杰&nbsp;&nbsp;张晓晨&nbsp;&nbsp;向鼎&nbsp;&nbsp;等<br/>
好声音：王乃恩&nbsp;&nbsp;邹宏宇&nbsp;&nbsp;伍佳丽&nbsp;&nbsp;张玮琪&nbsp;&nbsp;倪雅丰&nbsp;&nbsp;<br/>丁丁&nbsp;&nbsp;平安&nbsp;&nbsp;COCO&nbsp;&nbsp;等<br/>','WebResources/artist/artist5.jpg','WebResources/artist/5/1.jpg','WebResources/artist/5/2.jpg','WebResources/artist/5/3.jpg'),
('6','#00C3FF','#333333','签约合作艺人','任达华&nbsp;&nbsp;方中信&nbsp;&nbsp;游鸿鸣&nbsp;&nbsp;范逸臣&nbsp;&nbsp;汤佳丽&nbsp;&nbsp;江美琪&nbsp;&nbsp;金海心&nbsp;&nbsp;周海媚&nbsp;&nbsp;曾宝仪&nbsp;&nbsp;胡彦斌&nbsp;&nbsp;薛之谦<br/><br/>
黄龄&nbsp;&nbsp;黄蓉&nbsp;&nbsp;弦子&nbsp;&nbsp;老狼&nbsp;&nbsp;翁虹&nbsp;&nbsp;水木&nbsp;&nbsp;爱戴&nbsp;&nbsp;瞿颖&nbsp;&nbsp;迪克牛仔&nbsp;&nbsp;动力火车&nbsp;&nbsp;等','WebResources/artist/artist6.jpg','WebResources/artist/6/1.jpg','WebResources/artist/6/2.jpg','WebResources/artist/6/3.jpg'),
('7','#7C60BA','#AAC931','未来之星','背后拥有着星二代之称，再加上他们一个个的天赋和努力<br/>
吹拉弹唱个个都行，也曾为众多知名品牌代言拍摄TVC和平面<br/>
一个个苗子可都是未来之星。 ','WebResources/artist/artist7.jpg','WebResources/artist/7/1.jpg','WebResources/artist/7/2.jpg','WebResources/artist/7/3.jpg'),
('8','#83EDED','#008DC4','最佳代言','用你的产品加上她的粉丝一起来创造出更可观的销售和认知度<br/>
一起来用大众的钱享受宝马的待遇 ，<br/>
一起来用优衣库的钱享受阿玛尼的待遇<br/>
一起来用阿迪达斯的钱享受爱玛仕的待遇<br/>
全部用你最基本的费用来享受<br/>
全权为你用心定制的专属服务','WebResources/artist/artist8.jpg','WebResources/artist/8/1.jpg','WebResources/artist/8/2.jpg','WebResources/artist/8/3.jpg'),
('9','#FFCB39','#68489D','游戏达人','每一位不只是选手，而是专业选手<br/> 
都是（英雄联盟，魔兽3，DOTA2，卢石传说 等 电子竞技比赛的人气选手和代言人<br/>
还有些选手代表《全权》参加2015全国电子竞技大赛团体荣获第二名，<br/>
而且都荣获国家认可的一级运动员证书。','WebResources/artist/artist9.jpg','WebResources/artist/9/1.jpg','WebResources/artist/9/2.jpg','WebResources/artist/9/3.jpg'),
('10','#00C3FF','#333','外籍原创','全权签约的外籍表演团队 都分别来自于（美国，英国，德国，法国，澳大利亚，西班牙，包括印度）<br/>
每个团队创新的节目都丰富多彩，高贵、典雅、华丽、热辣......展现世界顶级艺术魅力，<br/>
有些节目都邀请了专业顶级世界音响师，灯光师，（Molly Molloy设计，Jacques Rouveyrollis灯光效果，<br/>
Jean-Daniel Mercier谱写原创音乐）融合了现代和古典，具备了50 - 60年代爵士音乐并伴随豪华展现一切，<br/>
每一个节目都是原创，每一个团队都是独一无二的，<br/>
因为他们拥有着梦想，敢于创新。','WebResources/artist/artist10.jpg','WebResources/artist/10/1.jpg','WebResources/artist/10/2.jpg','WebResources/artist/10/3.jpg'),
('11','#7C60BA','#AAC931','全星模仿','在圈内已经小有名气了，带着自己的作品个个都和自己的偶像同台演出，<br/>
还曾被多次邀请到个个省市开自己的个人演唱会，<br/>
坚持自己的信念，加上偶像的背景，相信他们一定可以达成自己的梦想。','WebResources/artist/artist11.jpg','WebResources/artist/11/1.jpg','WebResources/artist/11/2.jpg','WebResources/artist/11/3.jpg');




CREATE TABLE IF NOT EXISTS `quanquan_banner`(
`id`int(8)unsigned NOT NULL AUTO_INCREMENT,
`index`int(8)unsigned NOT NULL,
`flag`int(8)unsigned NOT NULL,		
/*index图片标志位 
1:主页banner 2:news左部 3:news右部 
4:合作企业,5:背景底图,6:全权公司三行字*/
`banner_image_url`varchar(255) NOT NULL,
PRIMARY KEY(`id`)
)ENGINE=MyISAM DEFAULT CHARSET="utf8";

INSERT INTO `quanquan_banner`(`index`,`flag`,`banner_image_url`)VALUES
(1,1,'WebResources/banners/indexBanner/index1.jpg'),
(2,1,'WebResources/banners/indexBanner/index2.jpg'),
(3,1,'WebResources/banners/indexBanner/index3.jpg'),
(4,1,'WebResources/banners/indexBanner/index4.jpg'),
(5,1,'WebResources/banners/indexBanner/index5.jpg'),
(6,1,'WebResources/banners/indexBanner/index6.jpg'),
(1,2,'WebResources/banners/leftBanner/left1.jpg'),
(2,2,'WebResources/banners/leftBanner/left2.jpg'),
(3,2,'WebResources/banners/leftBanner/left3.jpg'),
(4,2,'WebResources/banners/leftBanner/left4.jpg'),
(5,2,'WebResources/banners/leftBanner/left5.jpg'),
(6,2,'WebResources/banners/leftBanner/left6.jpg'),
(1,3,'WebResources/banners/rightBanner/right1.jpg'),
(2,3,'WebResources/banners/rightBanner/right2.jpg'),
(3,3,'WebResources/banners/rightBanner/right3.jpg'),
(4,3,'WebResources/banners/rightBanner/right4.jpg'),
(5,3,'WebResources/banners/rightBanner/right5.jpg'),
(1,4,'WebResources/companys.png'),
(1,5,'WebResources/world-map.png'),
(1,6,'WebResources/qq.png');