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
<link href="/Public/zy.min.css" rel="stylesheet">
<script src="/Public/zy.min.js"></script>
		<!---start-content---->
		<div class="main-content">
			<div class="wrap">
			
			<div class="content">
				<div class="right-content-heading">
					<div class="right-content-heading-left">
						<h3><?php echo ($info["name"]); ?></h3>
					</div>
					
					<div class="clear"> </div>
				</div>
				<div class="inner-page">
				
				<div class="video-inner">
					<div class="zy_media">
                      <video poster="/Uploads/<?php echo ($info["image"]); ?>" data-config='{"mediaTitle": "qslist.info","type":"video/mp4","preload":"auto"}'>
                          <source src="<?php echo ($info["server"]); echo ($info["link"]); ?>" type="video/mp4">
                          您的浏览器不支持HTML5视频
                      </video>
                  </div>

                  <script type="text/javascript">
                    zymedia('video');
                  </script>
				</div>
				<div class="clear"> </div>				
											  		
			</div>
			</div>
			<div class="clear"> </div>
			</div>
		</div>
		<div class="clear"> </div>
		<!---End-content---->
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