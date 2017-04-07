<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
	<head>
		<title>Men magazine</title>
		<meta charset=UTF-8>
		<meta http-equiv=mobile-agent content="format=wml; url=http://m.qslist.info">
		<meta http-equiv=mobile-agent content="format=xhtml; url=http://m.qslist.info">
		<link href="/Public/video/css/style.css" rel="stylesheet" type="text/css"  media="all" />
		<script type="text/javascript">
			if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
			window.location = "http://m.qslist.info"; //可以换成http地址
			}
		</script>
		
	</head>
	<body>
		<!---start-wrap---->
			<!---start-header---->
			<div class="header">
				<div class="wrap">
				<!---start-logo---->
				<div class="logo">
					<a href="<?php echo U('Video/index');?>" style="font-size: 30px;color: #00688B;">Men magazine</a>
				</div>
				<!---End-logo---->
				<!---start-top-menu-search---->
				<!-- <div class="top-menu">
					<div class="top-nav">
						<ul>
							<li><a href="#">Blog</a></li>
							<li><a href="#">Videos</a></li>
							<li><a href="categories.html">Categories</a></li>
							<li><a href="contact.html">Contact</a></li>
						</ul>
					</div>
					<div class="search">
						<form>
							<input type="text" class="textbox" value="Search:" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
							<input type="submit" value=" " />
						</form>
					</div>
					<div class="clear"> </div>
				</div> -->
				<div class="clear"> </div>
				<!---End-top-menu-search---->
			</div>
			<!---End-header---->
		</div>
		<div class="clear"> </div>
<style type="text/css">
	.link{
		padding-left: 10px;
	}
	.link ul li {
		width: 20%;
		float: left;
		line-height: 27px;
	}
	.link ul li a{
		color: #303030;
	}
</style>
		<!---start-content---->
		<div class="main-content">
			<div class="wrap">
			<div class="left-sidebar">
				<div class="sidebar-boxs">
					<?php if(is_array($top)): foreach($top as $key=>$v): ?><div class="sidebar-box">
						<h2><?php echo ($v["name"]); ?></h2>
						<a href="<?php echo U('videoshow',array('id'=>$v['id']));?>"><img src="/Uploads/<?php echo ($v["image"]); ?>" title="image-name" style="width: 240px;" /></a>										
					</div>
					<div class="clear"> </div><?php endforeach; endif; ?>
				</div>
			</div>
			<div class="right-content">
				<div class="right-content-heading">
					<div class="right-content-heading-left">
						<h3>Latest Colletcions of videos</h3>
					</div>
					<div class="right-content-heading-right">
						<div class="social-icons">
			                <ul>
			                    <li><a class="facebook" href="#" target="_blank"> </a></li>
			                    <li><a class="twitter" href="#" target="_blank"></a></li>
			                    <li><a class="googleplus" href="#" target="_blank"></a></li>
			                    <li><a class="pinterest" href="#" target="_blank"></a></li>
			                    <li><a class="dribbble" href="#" target="_blank"></a></li>
			                    <li><a class="vimeo" href="#" target="_blank"></a></li>
			                </ul>
					</div>
					</div>
					<div class="clear"> </div>
				</div>
				<div class="content-grids">
				  <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 3 );++$i;?><div class="content-grid <?php if(($mod) == "1"): ?>last-grid<?php endif; ?>">
						<a href="<?php echo U('videoshow',array('id'=>$vo['id']));?>"><img src="/Uploads/<?php echo ($vo["image"]); ?>" title="<?php echo ($vo["name"]); ?>" style="height: 212px;width: 212px;" /></a>
						<h3><?php echo (mb_substr($vo["name"],0,12)); ?></h3>
						<ul>
							<li><a href="#"><img src="/Public/video/images/likes.png" title="image-name" /></a></li>
							<li><a href="#"><img src="/Public/video/images/views.png" title="image-name" /></a></li>
							<li><a href="#"><img src="/Public/video/images/link.png" title="image-name" /></a></li>
						</ul>
						<a class="button" href="<?php echo U('videoshow',array('id'=>$v['id']));?>">Watch now</a>
					</div><?php endforeach; endif; else: echo "" ;endif; ?>
					
					<div class="clear"> </div>
					<!---start-pagenation----->
					<div class="pagenation">
						<ul>
							 <?php echo ($show); ?>
						</ul>
					</div>
					<div class="clear"> </div>
					<!---End-pagenation----->
				</div>
			</div>
			<div class="clear"> </div>
			</div>
		</div>
		<div class="clear"> </div>
		<!---End-content-->
		<div class="content">
			<div class="right-content-heading" style="margin-bottom:7px;">
				<div class="right-content-heading-left" style="padding-left: 20px;">
					<h3>LINK</h3>
				</div>

				
				<div class="clear"> </div>
			</div>
				<div class="link">
	                <ul>
	                    <li><a href="http://www.baixingsew.cc?qslist.info" target="_blank">百姓色导航</a></li>
	                    <li><a href="http://www.ifeisdh.com?qslist.info" target="_blank">爱妃色导航</a></li>
	                    <li><a href="http://www.lovesdh.com?qslist.info" target="_blank">爱色导航</a></li>
	                    <li><a href="http://www.fulis.top?qslist.info" target="_blank">福利涩导航</a></li>
	                    <li><a href="http://kc6699.com?qslist.info" target="_blank">开车福利导航</a></li>
	                    <li><a href="http://dh.zhuan8.top?qslist.info" target="_blank">宅男福利导航</a></li>
	                    <li><a href="http://www.yaocao666.com?qslist.info" target="_blank">六哥成人导航</a></li>
	                </ul>
				</div>
				<div class="clear"> </div>
		</div>
		<!---start-copy-right---->
		<div class="copy-right">
			<p>Design by <a href="http://w3layouts.com/">QSLIST.INFO</a></p>
		</div>
		<!---End-copy-right---->
		<!---End-wrap---->
		<div style="display: none">
		<script>
			var _hmt = _hmt || [];
			(function() {
			  var hm = document.createElement("script");
			  hm.src = "https://hm.baidu.com/hm.js?f71f3fb5daef785db90976d2ca6a5262";
			  var s = document.getElementsByTagName("script")[0]; 
			  s.parentNode.insertBefore(hm, s);
			})();
		</script>
	</div>
	</body>
</html>