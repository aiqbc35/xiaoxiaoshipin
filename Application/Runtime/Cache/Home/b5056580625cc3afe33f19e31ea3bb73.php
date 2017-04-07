<?php if (!defined('THINK_PATH')) exit();?><html class="pixel-ratio-2 retina ios ios-9 ios-9-1 ios-gt-8 ios-gt-7 ios-gt-6"><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo ($title); ?></title>
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <link rel="shortcut icon" href="http://m.sui.taobao.org/favicon.ico">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="format-detection" content="telephone=no">
    <link rel="stylesheet" href="//g.alicdn.com/msui/sm/0.6.2/css/sm.min.css">
    <link rel="stylesheet" href="//g.alicdn.com/msui/sm/0.6.2/css/sm-extend.min.css">
   
    <link rel="apple-touch-icon-precomposed" href="http://m.sui.taobao.org/assets/img/apple-touch-icon-114x114.png">
    <script type='text/javascript' src='//g.alicdn.com/sj/lib/zepto/zepto.min.js' charset='utf-8'></script>
    <script>
      //ga
    </script>   
  </head>
  <body>
<link rel="stylesheet" type="text/css" href="/Public/player/images/common.css"/>
<script type="text/javascript" src="/Public/player/js/jquery172.js"></script>
<script type="text/javascript" src="/Public/player/js/action.js"></script>
<style type="text/css">
  .title{
    position: absolute;
    display: initial;
    width: 82%;
    padding: 0;
    margin: 0 -.5rem;
    font-size: .85rem;
    font-weight: 500;
    line-height: 2.2rem;
    color: #3d4145;
    text-align: center;
    white-space: nowrap;
  }
</style>
    <div class="page-group">
        <div class="page page-current">
            <header class="bar bar-nav">
                <a class="button button-link button-nav pull-left back" onclick="return history.go(-1);">
                    <span class="icon icon-left"></span>
                    back
                  </a>
                <h1 class='title'><?php echo ($info["name"]); ?></h1>
            </header>
            <div class="content">
                <div id="content" >
                  <div class="close_light_bg" id="close_light_bg"></div>
                  <SCRIPT LANGUAGE=JavaScript>
                  <!--
                  /*
                  * 跨平台方案X1（基于普通HTTP协议）=============
                  * @param {Object} vID        ID
                  * @param {Object} vWidth     播放器宽度设置
                  * @param {Object} vHeight    播放器高度设置
                  * @param {Object} vFile      播放器配置文件
                  * @param {Object} vPlayer    播放器文件
                  * @param {Object} vPic       视频缩略图
                  * @param {Object} vCssurl    移动端CSS应用文件
                  * @param {Object} vMp4url    视频文件地址

                  * 跨平台方案说明=============================
                  * 本实例请在IIS/Apache等网站环境下测试
                  * 本实例实现HTTP协议下的跨平台
                  * 本实例要求[视频文件地址]为mp4格式
                  */
                  var vID        = ""; 
                  var vWidth     = "100%";            //播放器宽度设置
                  var vHeight    = 400;               //播放器高度设置
                  var vFile      = "/Public/player/CuSunV4set.xml";  //播放器配置文件
                  var vPlayer    = "/Public/player/player.swf?v=3.5";//播放器文件
                  var vPic       = "/Uploads/<?php echo ($info["image"]); ?>";//视频缩略图
                  var vCssurl    = "/Public/player/images/mini.css"; //移动端CSS应用文件

                  //适配PC,安卓,iOS请用mp4文件
                  var vMp4url    = "<?php echo ($info["server"]); echo ($info["link"]); ?>";  //视频文件地址
                  //-->
                  </SCRIPT> 
                  <script class="CuPlayerVideo" data-mce-role="CuPlayerVideo" type="text/javascript" src="/Public/player/js/CuSunX1.min.js"></script>
                  </div>

                </div>
            </div>

        </div>
    </div>
<script type="text/javascript">
  
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