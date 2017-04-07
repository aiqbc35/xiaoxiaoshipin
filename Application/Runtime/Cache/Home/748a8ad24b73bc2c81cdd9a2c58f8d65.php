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
  <style type="text/css">
        .card{
            width: 48.7%;
            float: left;
            margin:.1rem;
            height: 7rem;
          }
          .card-content-inner img{  
              width: 100%;  
              height: 5.7rem;     
          }
          .card-content-inner{
            padding: 0rem;
          }
          .card-footer{
             min-height: 1rem;
             padding: 0rem .3rem;
             white-space: nowrap;
             overflow:hidden;
             text-overflow: ellipsis;
             max-width: 100%;
          }
    </style>
  <div class="page-group">
    <div id="page-infinite-scroll-bottom" class="page page-current">
  <header class="bar bar-nav">   
    <h1 class="title"><?php echo ($title); ?></h1>
  </header>
  <div class="content infinite-scroll native-scroll" data-distance="100">
    <div class="con">
        
    </div>
    <div class="infinite-scroll-preloader">
      <div class="preloader">
      </div>
    </div>
  </div>
</div>

    </div>
    
    <script type='text/javascript' src='//g.alicdn.com/msui/sm/0.6.2/js/sm.min.js' charset='utf-8'></script>
    <script type='text/javascript' src='//g.alicdn.com/msui/sm/0.6.2/js/sm-extend.min.js' charset='utf-8'></script>
    <script type="text/javascript">
        var listurl = "/index.php?s=/Index/getlist.html";
        $(function(){
                'use strict';

                var loading = false;
                var itemsPerLoad = 10;
                var maxItems = 100;
           
                $(document).on("pageInit", "#page-infinite-scroll-bottom", function(e, id, page) {
                         
                        $.getJSON(listurl, function(data){
                               if (data.status == 1){
                                  maxItems = data.total;
                                  creatjson(data.info);                                 
                               }
                          });
                       
                        $(page).on('infinite', function() {
                          
                          if (loading) return;
                          
                          loading = true;
                          var lastIndex = $('.con a').length;
                         
                          $.getJSON('/index.php?s=/Index/getlist/page/'+lastIndex, function(data){
                               if (data.status == 1){
                                 
                                  setTimeout(function() {
                                    loading = false;
                                    if (lastIndex >= maxItems) {
                                      $.detachInfiniteScroll($('.infinite-scroll'));
                                      $('.infinite-scroll-preloader').remove();
                                      return;
                                    }
                                        creatjson(data.info);
                                    lastIndex = $('.con a').length;
                                    $.refreshScroller();
                                    
                                  }, 1000);
                                  
                               }else{
                                      $.detachInfiniteScroll($('.infinite-scroll'));
                                      $('.infinite-scroll-preloader').remove();
                                      return;
                               }
                          });                         
                          
                        });


                      });

                $.init();
        });

        function creatjson(data)
          {
             var _html = '';
             $.each(data, function(index, val) {
                 _html += '<a class="card" href="/index.php?s=/Index/video/id/'+val.id+'.html "><div class="card-content"><div class="card-content-inner">';
                 _html += '<img src="/Uploads/'+val.image+'" alt=""></div></div><div class="card-footer">'+val.name+'</div></a>';
             });
             $('.con').append(_html);
            
          }

    </script>
   
	<div style="display: none">
		<script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1261247052'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s4.cnzz.com/z_stat.php%3Fid%3D1261247052' type='text/javascript'%3E%3C/script%3E"));</script>
	</div>

  </body>
</html>