<?php if (!defined('THINK_PATH')) exit();?><html class="pixel-ratio-2 retina ios ios-9 ios-9-1 ios-gt-8 ios-gt-7 ios-gt-6"><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo ($title); ?></title>
    <meta name="description" content="">
    <meta name="author" content="">
    
    <link rel="shortcut icon" href="http://m.sui.taobao.org/favicon.ico">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
    <meta name="MobileOptimized" content="320">
    <link rel="stylesheet" href="//g.alicdn.com/msui/sm/0.6.2/css/sm.min.css">
    <link rel="stylesheet" href="//g.alicdn.com/msui/sm/0.6.2/css/sm-extend.min.css">
   
    <link rel="apple-touch-icon-precomposed" href="http://m.sui.taobao.org/assets/img/apple-touch-icon-114x114.png">
    <script type='text/javascript' src='//g.alicdn.com/sj/lib/zepto/zepto.min.js' charset='utf-8'></script>
    <script>
      //ga
    </script>   
  </head>
  <body>
<link href="/Public/zy.min.css" rel="stylesheet">
<script src="/Public/zy.min.js"></script>
<style type="text/css">
.my-player-dimensions{
  width: 80%;
  min-width: 300px;
  height: 200px;
  margin: 0 auto;
}
/* .video-js{
  left:-3rem;
} */

</style>
    <div class="page-group">
        <div class="page page-current">
            <header class="bar bar-nav">
                <a class="button button-link button-nav pull-left back" href="<?php echo U('index');?>">
                    <span class="icon icon-left"></span>
                    back
                  </a>
                <h1 class='title'><?php echo ($info["name"]); ?></h1>
            </header>
            <div class="content">
                <div id="content" >
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
        </div>

        </div>
    </div>
<script type='text/javascript' src='//g.alicdn.com/msui/sm/0.6.2/js/sm.min.js' charset='utf-8'></script>
<script type='text/javascript' src='//g.alicdn.com/msui/sm/0.6.2/js/sm-extend.min.js' charset='utf-8'></script>

   <script type="text/javascript">
   	console.log($.device);
   </script>
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