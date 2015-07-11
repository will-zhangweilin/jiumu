<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
<title>九木装饰</title>
<meta name="keywords" content="九木装饰" />
<meta name="description" content="九木装饰" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
<link href="/jiumu/Public/Home/default/css/style.css" rel="stylesheet" type="text/css" media="all" />
<!--slider-->
<link href="/jiumu/Public/Home/default/css/camera.css" rel="stylesheet" type="text/css" media="all" />
  <script type='text/javascript' src='/jiumu/Public/Home/default/js/jquery.min.js'></script>
    <script type='text/javascript' src='/jiumu/Public/Home/default/js/jquery.mobile.customized.min.js'></script>
    <script type='text/javascript' src='/jiumu/Public/Home/default/js/jquery.easing.1.3.js'></script> 
    <script type='text/javascript' src='/jiumu/Public/Home/default/js/camera.min.js'></script> 
     <script>
		jQuery(function(){
			
			jQuery('#camera_wrap_1').camera({
				thumbnails: true
			});

			jQuery('#camera_wrap_2').camera({
				height: '400px',
				loader: 'bar',
				pagination: false,
				thumbnails: true
			});
		});
	</script>
</head>
<body>
<div class="wrap">
<div class="header">
	<div class="logo">
		<h1><a href="index.html"><img src="/jiumu/Public/Home/default/images/logo.jpg" alt="九木装饰" width="140px" /></a></h1>
	</div>
	<div class="header-right">
		 <div class="header-right-top">
	 		<h1>九木装饰</h1>
	 		<h2>九木成林    众志成诚</h2>
	 		<!-- <h3 id="top_member">
				<a href="<?php echo U(MODULE_NAME.'/Public/register');?>">注册</a>	
				<a href="<?php echo U(MODULE_NAME.'/Public/login');?>">登录</a>	
				<span>欢迎您，游客！您可以选择</span>	
				</div>
				<div id="top_login_ok" style="display:none;">
				<a href="<?php echo U(MODULE_NAME.'/Member/index');?>">会员中心</a>	
				<a href="<?php echo U(MODULE_NAME.'/Public/logout');?>">安全退出</a>
				<span>欢迎您， </span>
			</h3> -->
	 		<div class="top-right">
	 			<p>
	 				<a href="<?php echo U(MODULE_NAME.'/Public/register');?>">注册</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<a href="<?php echo U(MODULE_NAME.'/Public/login');?>">登录</a>	</br>
	 			咨询热线：400-800-600</br>
	 			装饰美好空间  筑就幸福生活</p>
	 		</div>
		 </div>
		 <div class="clear"></div>
	 	 <ul class="nav">
	 	 	<?php
 if($_GET['cid']) { $class = ''; } else { $class = ''; } ?>
	        <li class="active"><a href="http://127.0.0.1:82/jiumu">
	        	<h3><span>首页</span>
	        	<p></p></h3>
	        	</a>
	        </li>
	        <?php
 $_typeid = 0; if($_typeid == -1) $_typeid = I('cid', 0, 'intval'); $_navlist = get_category(1); if($_typeid == 0) { $_navlist = Common\Lib\Category::toLayer($_navlist); }else { $_navlist = Common\Lib\Category::toLayer($_navlist, 'child', $_typeid); } foreach($_navlist as $autoindex => $navlist): $navlist['url'] = get_url($navlist); ?><?
	        if($_GET['id'] == $navlist.id)
	        {
	        	$class = 'active';
	        }
	        ?>
	        <li catid ="<?php echo ($navlist["id"]); ?>" class="<?=$class?>"><a href="<?php echo ($navlist["url"]); ?>">
	        	<h3><span><?php echo ($navlist["name"]); ?></span>
	        	<p></p></h3>
	        	</a>
	        </li><?php endforeach;?>
	     </ul>
	 </div>
	 <div class="clear"></div>
</div>
<div class="slider">
<div class="fluid_container">
        <div class="camera_wrap camera_magenta_skin" id="camera_wrap_1">
        	 <div data-thumb="/jiumu/Public/Home/default/images/thumbs/2.jpg" data-src="/jiumu/Public/Home/default/images/slides/2.jpg" >
                <div class="camera_caption fadeFromBottom">
                 </div>
            </div>
             <div data-thumb="/jiumu/Public/Home/default/images/thumbs/1.jpg" data-src="/jiumu/Public/Home/default/images/slides/1.jpg" >
                <div class="camera_caption fadeFromBottom">
                 </div>
            </div>
             <div data-thumb="/jiumu/Public/Home/default/images/thumbs/3.jpg" data-src="/jiumu/Public/Home/default/images/slides/3.jpg" >
                <div class="camera_caption fadeFromBottom">
                 </div>
            </div>
            <div data-thumb="/jiumu/Public/Home/default/images/thumbs/4.jpg" data-src="/jiumu/Public/Home/default/images/slides/4.jpg" >
                <div class="camera_caption fadeFromBottom">
                 </div>
            </div>
        </div><!-- #camera_wrap_2 -->
   	<div class="clear"></div>
    </div><!-- .fluid_container -->
   	<div class="clear"></div>
</div>
<div class="main">
	<div class="sidebar">
	<div class="text">
		<h2>九木装饰</h2>
		<div class="text-para">
		<p><maqueee>&nbsp;&nbsp;&nbsp;&nbsp;九木装饰是中国建筑装饰协会会员单位，广州市建筑装饰行业协会家装委员会副主任单位，是首批取得广州家庭装饰装修企业资格证的单位之一。其“华浔品味装饰”商标具有较高的知名度，深受消费者的喜爱与信任。</maqueee></p>
		</div>
		<div class="text-para">
		<p>&nbsp;&nbsp;&nbsp;&nbsp;公司成立于2015年，已经成为中国室内装饰行业领军品牌，专业从事家居、写字楼、商铺、酒店等设计与施工。目前已建立了完整的设计、施工、材料以及客户服务系统，通过了ISO9001国际质量体系认证，取得了建设部门颁发的设计与施工贰级资质。</p>
		</div>
		<div class="readmore">
			<a href="details.html"><button class="btn btn-2 btn-2f">查看详情</button></a>
		</div>
		</div>
	</div>
	<div class="content">
		<div class="banner">
			<section>
				<ul class="lb-album">
					<li>
						<a href="#image-1">
							<img src="/jiumu/Public/Home/default/images/thumbs/1.jpg" alt="image01">
							<span>Pointe</span>
						</a>
						<div class="lb-overlay" id="image-1">
							<a href="#page" class="lb-close">x Close</a>
							<img src="/jiumu/Public/Home/default/images/full/1.jpg" alt="image01">
						</div>
					</li>
					<li>
						<a href="#image-2">
							<img src="/jiumu/Public/Home/default/images/thumbs/2.jpg" alt="image02">
							<span>Port de bras</span>
						</a>
						<div class="lb-overlay" id="image-2">
							<img src="/jiumu/Public/Home/default/images/full/2.jpg" alt="image02">
							<a href="#page" class="lb-close">x Close</a>
						</div>
					</li>
					<li>
						<a href="#image-3">
							<img src="/jiumu/Public/Home/default/images/thumbs/3.jpg" alt="image03">
							<span>Plié</span>
						</a>
						<div class="lb-overlay" id="image-3">
							<img src="/jiumu/Public/Home/default/images/full/3.jpg" alt="image03">
							<a href="#page" class="lb-close">x Close</a>
						</div>
					</li>
					<li>
						<a href="#image-4">
							<img src="/jiumu/Public/Home/default/images/thumbs/4.jpg" alt="image04">
							<span>Adagio</span>
						</a>
						<div class="lb-overlay" id="image-4">
							<img src="/jiumu/Public/Home/default/images/full/4.jpg" alt="image04">
							<a href="#page" class="lb-close">x Close</a>
						</div>
					</li>
					<li>
						<a href="#image-5">
							<img src="/jiumu/Public/Home/default/images/thumbs/5.jpg" alt="image05">
							<span>Frappé</span>
						</a>
						<div class="lb-overlay" id="image-5">
							<img src="/jiumu/Public/Home/default/images/full/5.jpg" alt="image05">
							<a href="#page" class="lb-close">x Close</a>
						</div>
					</li>
					<li>
						<a href="#image-6">
							<img src="/jiumu/Public/Home/default/images/thumbs/6.jpg" alt="image06">
							<span>Glissade</span>
						</a>
						<div class="lb-overlay" id="image-6">
							<img src="/jiumu/Public/Home/default/images/full/6.jpg" alt="image06">
							<a href="#page" class="lb-close">x Close</a>
						</div>
					</li>
					<li>
						<a href="#image-7">
							<img src="/jiumu/Public/Home/default/images/thumbs/7.jpg" alt="image07">
							<span>Jeté</span>
						</a>
						<div class="lb-overlay" id="image-7">
							<img src="/jiumu/Public/Home/default/images/full/7.jpg" alt="image07">
							<a href="#page" class="lb-close">x Close</a>
						</div>
					</li>
					<li>
						<a href="#image-8">
							<img src="/jiumu/Public/Home/default/images/thumbs/8.jpg" alt="image08">
							<span>Piqué</span>
						</a>
						<div class="lb-overlay" id="image-8">
							<img src="/jiumu/Public/Home/default/images/full/8.jpg" alt="image08">
							<a href="#page" class="lb-close">x Close</a>
						</div>
					</li>
				</ul>
				<div class="clear"></div>
			</section>
		<div class="clear"></div>
		</div>
	</div>
	<div class="clear"></div>
	<div class="cnt_btm">
	<div class="text1">
		<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;设计源于人，公司从创立伊始，就非常注重寻求自然环境与人文环境相融的和谐、空间设计与生活风水的整体协调，坚持以创新的服务意识，将客户的需求与设计师的设计风格相结合，不断推陈出新，让家不但是个可以居住的空间，而且是个可以包容亲情、释放温馨、修身养性以及凸显个性的地方。<br />
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;在“海纳百川，有容乃大；壁立千仞，无欲则刚”的企业精神的引导下，坚持“以人为本”的用人方针，不断地积淀企业文化内涵，注重寻求自然环境与人文环境相融的和谐，吸纳了大批优秀的设计师和管理技术人才。同时尊重每一位业主，随时跟进业主所需，以创新的服务意识推动产品。
		</p>
	</div>
	<div class="section group">
				<div class="grid_1_of_5 images_1_of_5">
					<a href="details.html"><img src="/jiumu/Public/Home/default/images/pic1.jpg"></a>
					<div class="grid-left">
						<div class="cont_txt">
							<h3>方直君御江总雅居</h3>
							<p>主人喜欢收藏字画所以运用了古典中式风格；整个空间以深色为主；过道位置运用了红墙使整个空间氛围更浓;</p>
						</div>
					</div>
				</div>
				<div class="grid_1_of_5 images_1_of_5">
					<a href="details.html"><img src="/jiumu/Public/Home/default/images/pic2.jpg"></a>
					<div class="grid-left">
						<div class="cont_txt">
							<h3>方直君御江总雅居</h3>
							<p>本案例位于扬州东区商住两用住宅小区，本小区配置恒温恒氧;所以在设计的过程中使用了原有的配套设施把三套小套房改为会所的形式；</p>
						</div>
					</div>
				</div>
				<div class="grid_1_of_5 images_1_of_5">
					<a href="details.html"><img src="/jiumu/Public/Home/default/images/pic3.jpg"></a>
					<div class="grid-left">
						<div class="cont_txt">
							<h3>方直君御江总雅居</h3>
							<p>主人喜欢收藏字画所以运用了古典中式风格；整个空间以深色为主；过道位置运用了红墙使整个空间氛围更浓;</p>
						</div>
					</div>
				</div>
				<div class="grid_1_of_5 images_1_of_5">
					<a href="details.html"><img src="/jiumu/Public/Home/default/images/pic4.jpg"></a>
					<div class="grid-left">
						<div class="cont_txt">
							<h3>方直君御江总雅居</h3>
							<p>主人喜欢收藏字画所以运用了古典中式风格；整个空间以深色为主；过道位置运用了红墙使整个空间氛围更浓;</p>
						</div>
					</div>
				</div>
				<div class="grid_1_of_5 images_1_of_5">
					<a href="details.html"><img src="/jiumu/Public/Home/default/images/pic5.jpg"></a>
					<div class="grid-left">
						<div class="cont_txt">
							<h3>方直君御江总雅居</h3>
							<p>主人喜欢收藏字画所以运用了古典中式风格；整个空间以深色为主；过道位置运用了红墙使整个空间氛围更浓;</p>
						</div>
					</div>
				</div>
			</div>
	<div class="clear"></div>
	</div>
</div>
<div class="footer-bg">
<div class="footer">
	<div class="section group">
		<div class="col_1_of_4 span_1_of_4">
			<h3>九木装饰</h3>
			<p class="nav1"> 中国建筑装饰协会会员单位，广州市建筑装饰行业协会家装委员会副主任单位，是首批取得广州家庭装饰装修企业资格证的单位之一</p>
		</div>
		<div class="col_1_of_4 span_1_of_4">
			<h3>品牌荣誉</h3>
			<p class="nav1">中国住宅装饰装修行业AAAA诚信企业<br />
			华南地区十大最具影响力装饰品牌<br/>
			全国住宅装饰装修行业百强企业<br />
			广东装饰行业的旗舰品牌<br />
			</p>
		</div>
		<div class="col_1_of_4 span_1_of_4">
			<h3>联系我们</h3>
			<ul class="nav1">
				<li>广东省东莞市凤岗镇XXX路XXX号</li>
				<li>电话(00) 222 666 444 </li>
				<li>Email:<a href=""> <span>info(at)mycompany.com</span></a></li>
			</ul>
		</div>
		<div class="col_1_of_4 span_1_of_4">
			<h3>关注我们</h3>
			<div class="social-icons">
	   		  	<ul>
			      <li class="facebook"><a href="#" target="_blank"> </a></li>
			      <li class="twitter"><a href="#" target="_blank"> </a></li>
			      <li class="googleplus"><a href="#" target="_blank"> </a></li>
			      <li class="contact"><a href="#" target="_blank"> </a></li>
			      <div class="clear"></div>
		     </ul>
	   	 </div>
		</div>
		<div class="clear"></div>
	</div>
</div>
</div>
<div class="footer1-bg">
<div class="footer1">
		<p class="w3-link">© All Rights Reserved | Design by&nbsp; <a href=""> 九木装饰</a></p>
	</div>
</div>
</div>
<a target='_blank' href="http://wpa.qq.com/msgrd?v=3&uin=[94036132]&site=qq&menu=yes"><img border="0" src="http://wpa.qq.com/pa?p=2:[客服号]:51" alt="[客服说明]" title="[客服说明]"/></a>
</body>
</html>