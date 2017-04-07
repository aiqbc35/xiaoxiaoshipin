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
<link href="//vjs.zencdn.net/5.11/video-js.min.css" rel="stylesheet">
<script src="//vjs.zencdn.net/5.11/video.min.js"></script>
<style type="text/css">
.my-player-dimensions{
  width: 80%;
  min-width: 300px;
  height: 200px;
  margin: 0 auto;
}
.video-js{
  left:-3rem;
}
</style>
    <div class="page-group">
        <div class="page page-current">
            <header class="bar bar-nav">
                <!-- <div class="button button-big button-round" onclick="return history.go(-1);" style="width: 3.1rem;height: 1.5rem;border-radius: .5rem;line-height: 1.5rem;display: inline;">back</div> -->
                <h1 class='title'></h1>
            </header>
            <div class="content">
                <div id="content" style="width: 60%;margin:0 auto;">
                      <script type="text/javascript">
                        locaturl = window.location.search;
                        locanum = locaturl.split("/");
                        id = locanum[4].split(".");  
                        //$(function(){

                            $.getJSON('/index.php?s=/Index/getOne/id/'+id[0], function(data){
                                     if (data.status == 1){
                                               $(".title").append(data.info.name);
                                               _html = '<video id="my-player" class="video-js vjs-fluid placeholder" controls preload="auto" poster="/Uploads/'+data.info.image+'" data-setup="{}">';
                                               _html += '<source src="'+data.info.server+data.info.link+'" type="video/mp4"></source>';
                                               _html += '<p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video </a> </p> </video>';
                                               $("#content").append(_html);
                                               
                                     }else{
                                        $.alert('Video does not exist');
                                     }
                                });


                        //});
                      </script>
                </div>
        </div>

        </div>
    </div>
<script type='text/javascript' src='//g.alicdn.com/msui/sm/0.6.2/js/sm.min.js' charset='utf-8'></script>
<script type='text/javascript' src='//g.alicdn.com/msui/sm/0.6.2/js/sm-extend.min.js' charset='utf-8'></script>
<!-- <script type="text/javascript">
  locaturl = window.location.search;
  locanum = locaturl.split("/");
  id = locanum[4].split(".");  
  $(function(){

      $.getJSON('/index.php?s=/Index/getOne/id/'+id[0], function(data){
               if (data.status == 1){
                         $(".title").append(data.info.name);
                         _html = '<video id="my-player" class="video-js vjs-fluid placeholder" controls preload="auto" poster="/Uploads/'+data.info.image+'" data-setup="{}">';
                         _html += '<source src="'+data.info.server+data.info.link+'" type="video/mp4"></source>';
                         _html += '<p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video </a> </p> </video>';
                         $("#content").append(_html);
                         
               }else{
                  $.alert('Video does not exist');
               }
          });


  });
</script> -->
   
	<div style="display: none">
		<script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1261247052'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s4.cnzz.com/z_stat.php%3Fid%3D1261247052' type='text/javascript'%3E%3C/script%3E"));</script>
	</div>

  </body>
</html>