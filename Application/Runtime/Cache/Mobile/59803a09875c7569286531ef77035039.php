<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Men magazine</title>
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <link rel="shortcut icon" href="/favicon.ico">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">

    <link rel="stylesheet" href="//g.alicdn.com/msui/sm/0.6.2/css/sm.min.css">
    <link rel="stylesheet" href="//g.alicdn.com/msui/sm/0.6.2/css/sm-extend.min.css">
    <script type='text/javascript' src='//g.alicdn.com/sj/lib/zepto/zepto.min.js' charset='utf-8'></script>
    <style type="text/css">
        .card{
            width: 47.8%;
            margin: .2rem;
            float: left;
        }
        .card-content-inner{
            padding: .45rem;
        }
        .card-content {
            position: absolute;
            top: 7.2rem;
            right: 0rem;
            width: 100%;
            height: 1.75rem;
            background-color: #000;
            color: #fff;
            filter:alpha(Opacity=80);
            -moz-opacity:0.5;
            opacity: 0.5;
        }
        .button-more{
            display: flex;
            width: 100%;
            height: 43px;
            background-color: #fff;
            line-height: 43px;
            text-align: center;
            padding-left: 40%;
        }
        .card-header img{
            height: 179.25px;
        }
    </style>
    <script type="text/javascript">
        var reguser = "<?php echo U('User/add');?>";
    </script>
  </head>
  <body>
   <style type="text/css">
  #picPanel ul, li, a, img {
    margin: 0;
    padding: 0;
    list-style: none;
  }

  #picPanel img {
    display: block;

  }
  #picPanel p {
    margin: 0;
    padding: 1rem 1rem;
    font-size: 1rem;
    line-height: 1.4;
  }
  .pagination {
    width: 100%;
    left: 0;
    bottom: 10px;
    position: absolute;
    text-align: center;
    -webkit-transition: 300ms;
    transition: 300ms;
    z-index: 10;
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
  }
  .pagination span {
    width: 8px;
    height: 8px;
    display: inline-block;
    border-radius: 100%;
    background: #fff;
    opacity: .5;
    margin: 0 3px;
  }
  .pagination span.active {
    opacity: 1;
    background: #007AFF;
  }
  .pic-panel {
    width: 100%;
    position: relative;
    overflow: hidden;
  }
  .pic-list {
    width: 100%;
    position: relative;
  }
  .pic-list li {
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
  }
  .pic-list .re {
    position: relative;
    z-index: 2;
  }
  .pic-list li img {
    width: 100%;
    height: 245px;
  }
  .pic-list li a {
    -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
  }
  @media screen and (min-width: 600px) {
    .pic-box {
      position: relative;
      top: 0;
      left: 25%;
      width: 50%;
    }
    .pic-list li:nth-child(2) {
      left: 100%;
    }
    .pic-list li:last-child {
      left: -100%;
    }
    .pic-list li img {
      padding: 0 0.125rem;
      -webkit-box-sizing: border-box;
      box-sizing: border-box;
    }
  }
</style>

    <div class="page">
        <header class="bar bar-nav">
              <a class="icon icon-me pull-left open-panel" data-panel="#panel-left-demo"></a>
                <h1 class="title">Men magazine</h1>
        </header>
        		<nav class="bar bar-tab">
            <a class="tab-item external <?php if($home == 1): ?>active<?php endif; ?>" href="<?php echo U('Index/index');?>">
                <span class="icon icon-home"></span>
                <span class="tab-label">首页</span>
            </a>
            <a class="tab-item external <?php if($videolist == 1): ?>active<?php endif; ?>" href="<?php echo U('Index/videoList');?>">
                <span class="icon icon-computer"></span>
                <span class="tab-label">共享线路</span>
            </a>
            <a class="tab-item external <?php if($videolist == 1): ?>active<?php endif; ?>" href="<?php echo U('Index/videoList');?>">
                <span class="icon icon-browser"></span>
                <span class="tab-label">高速专线</span>
            </a>
<!--             <a class="tab-item external <?php if($videolist == 1): ?>active<?php endif; ?>" href="<?php echo U('Index/videoList');?>">
                <span class="icon icon-me"></span>
                <span class="tab-label">会员中心</span>
            </a> -->
            <a class="tab-item external <?php if($about == 1): ?>active<?php endif; ?>" href="<?php echo U('About/index');?>">
                <span class="icon icon-star"></span>
                <span class="tab-label">收藏</span>
            </a>
        </nav>
        <!------Slideshow------>
        <div class="content native-scroll" id="">
                     
          <div id="picPanel" class="pic-panel">
              <div id="picBox" class="pic-box">
                <ul id="picList" class="pic-list">

                </ul>
              </div>
            </div>

            <!----END Slideshow---->
            <!----NEW VIDEO------>
            <div class="newvideo">
                                            
            </div>
            <!-----END NEWVIDEO------>
            
            <a href="<?php echo U('videoList');?>" class="button-more ">点击查看更多<span class="icon icon-right"></span></a>
                           
        </div>
        
    </div>
<div class="panel-overlay"></div>
<!-- Left Panel with Reveal effect -->
<div class="panel panel-left panel-reveal theme-dark" id='panel-left-demo'>
  <div class="content-block">
    <div class="list-block">
    <ul>
        <!-- Text inputs -->
        <li>
          <div class="item-content">
            <div class="item-media"><i class="icon icon-form-name"></i></div>
            <div class="item-inner">
              <div class="item-input">
                <input type="text" placeholder="请输入邮箱">
              </div>
            </div>
          </div>
        </li>
        <li>
          <div class="item-content">
            <div class="item-media"><i class="icon icon-form-name"></i></div>
            <div class="item-inner">
              <div class="item-input">
                <input type="password" placeholder="请输入密码">
              </div>
            </div>
          </div>
        </li>                
    </ul>
    <button class="button button-fill" style="margin-left: 2rem;margin-top: .8rem;width: 6rem;height: 2rem;">登录</button>
    <button class="button button-success" id="reguserput" style="margin-left: 2rem;margin-top: .8rem;width: 6rem;height: 2rem;">注册</button>
    </div>
  </div>
  <div class="list-block">
    <!-- .... -->
  </div>
</div>
    <script type='text/javascript' src='//g.alicdn.com/msui/sm/0.6.2/js/sm.min.js' charset='utf-8'></script>
    <script type='text/javascript' src='//g.alicdn.com/msui/sm/0.6.2/js/sm-extend.min.js' charset='utf-8'></script>
    <script src="/Public/js/public.js"></script>
    <script src="/Public/js/photoSlider-1.21.js"></script>
    
<script type="text/javascript">
  var newTopUrl = "<?php echo U('newTopList');?>";
  var videoUrl = "<?php echo U('video');?>";
  var newListUrl = "<?php echo U('newList');?>";



  // $(document).on('click','#reg', function () {
  //   var modal = $.modal({
  //     title: '注册会员免费观影',
  //     afterText:  '<div class="list-block" style="margin: 0.75rem 0;"><ul>'+
  //                   '<li><div class="item-content"><div class="item-media"><i class="icon icon-form-name"></i></div><div class="item-inner"><div class="item-input"><input type="text" placeholder="Your name"></div></div></div></li>'+
  //                   '<li><div class="item-content"><div class="item-media"><i class="icon icon-form-name"></i></div><div class="item-inner"><div class="item-input"><input type="text" placeholder="Your name"></div></div></div></li>'+
  //                     '</ul></div>',
  //     buttons: [
  //       {
  //         text: '取消'
  //       },
  //       {
  //         text: '确认',
  //         bold: true,
  //         onClick: function () {
  //           $.alert('Thanks! I know you like it!')
  //         }
  //       },
  //     ]
  //   })
  //   $.swiper($$(modal).find('.swiper-container'), {pagination: '.swiper-pagination'});
  //   });

  //   $(document).on('click','.open-tabs-modal', function () {
  //   $.modal({
  //     title:  '<div class="buttons-row">'+
  //               '<a href="#tab1" class="button active tab-link">Tab 1</a>'+
  //               '<a href="#tab2" class="button tab-link">Tab 2</a>'+
  //             '</div>',
  //     text: '<div class="tabs">'+
  //             '<div class="tab active" id="tab1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam convallis nunc non dolor euismod feugiat. Sed at sapien nisl. Ut et tincidunt metus. Suspendisse nec risus vel sapien placerat tincidunt. Nunc pulvinar urna tortor.</div>'+
  //             '<div class="tab" id="tab2">Vivamus feugiat diam velit. Maecenas aliquet egestas lacus, eget pretium massa mattis non. Donec volutpat euismod nisl in posuere. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae</div>'+
  //           '</div>',
  //     buttons: [
  //       {
  //         text: 'Ok, got it',
  //         bold: true
  //       },
  //     ]
  //   })
  //   });




    // $(document).on('click','.open-tabs-modal', function () {
    // $.modal({
    //   title:  '<div class="buttons-row">'+
    //             '<a href="#tab1" class="button active tab-link">Tab 1</a>'+
    //             '<a href="#tab2" class="button tab-link">Tab 2</a>'+
    //           '</div>',
    //   text: '<div class="tabs">'+
    //           '<div class="tab active" id="tab1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam convallis nunc non dolor euismod feugiat. Sed at sapien nisl. Ut et tincidunt metus. Suspendisse nec risus vel sapien placerat tincidunt. Nunc pulvinar urna tortor.</div>'+
    //           '<div class="tab" id="tab2">Vivamus feugiat diam velit. Maecenas aliquet egestas lacus, eget pretium massa mattis non. Donec volutpat euismod nisl in posuere. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae</div>'+
    //         '</div>',
    //   buttons: [
    //     {
    //       text: 'Ok, got it',
    //       bold: true
    //     },
    //   ]
    // })
    // });


  $.showPreloader();
  $(function(){

      $.get(newTopUrl, function(data) {
            var _tophtml = '';
            var topnewlen = data.list.length;
           $.each(data.list, function(index, val) {
              if (index == 0) {
                  _tophtml += '<li class="re"><a href="'+videoUrl+'?id='+val.id+'"><img src="/Uploads/'+val.image+'" /></a></li>';
              }else{
                  _tophtml += '<li><a href="'+videoUrl+'?id='+val.id+'"><img src="/Uploads/'+val.image+'" /></a></li>';
              }             
           });
           $("#picList").html(_tophtml);
           banner();
      },'json');

      $.get(newListUrl, function(data) {
            
            var _listhtml = '';

            $.each(data.list, function(index, val) {
                
                _listhtml += '<div class="card demo-card-header-pic"><div valign="bottom" class="card-header color-white no-border no-padding">';
                _listhtml += '<a href="'+videoUrl+'?id='+val.id+'"><img class="card-cover" src="/Uploads/'+val.image+'" alt=""></a>';
                _listhtml += '</div><div class="card-content"><div class="card-content-inner">'+val.name+'</div></div>';
                _listhtml += '<div class="card-footer"><span class="icon icon-emoji">'+val.hit+'</span><span class="icon icon-clock">'+getLocalTime('m/d/y',val.addtime)+'</span></div></div>';
            });

            $(".newvideo").append(_listhtml);
            $.hidePreloader()
      },'json');

  });
     function banner(){
        photoSlide({
              wrap: document.getElementById('picBox'),
              loop: true,
              autoPlay: true,
              autoTime: 4000,
              pagination: true
            });
     } 
</script>
<script type="text/javascript">
   
    if ($.device.android == false && $.device.androidChrome == false && $.device.ios ==false && $.device.ipad ==false && $.device.iphone ==false && $.device.isWeixin ==false) {
        window.location = "http://www.qslist.info"; 
    }
    /**
 * 和PHP一样的时间戳格式化函数
 * @param  {string} format    格式
 * @param  {int}    timestamp 要格式化的时间 默认为当前时间
 * date('Y-m-d','1350052653');//很方便的将时间戳转换成了2012-10-11
 * date('Y-m-d H:i:s','1350052653');//得到的结果是2012-10-12 22:37:33
 * @return {string}           格式化的时间字符串
 */
function getLocalTime(format, timestamp){ 
    var a, jsdate=((timestamp) ? new Date(timestamp*1000) : new Date());
    var pad = function(n, c){
        if((n = n + "").length < c){
            return new Array(++c - n.length).join("0") + n;
        } else {
            return n;
        }
    };
    var txt_weekdays = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
    var txt_ordin = {1:"st", 2:"nd", 3:"rd", 21:"st", 22:"nd", 23:"rd", 31:"st"};
    var txt_months = ["", "January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"]; 
    var f = {
        // Day
        d: function(){return pad(f.j(), 2)},
        D: function(){return f.l().substr(0,3)},
        j: function(){return jsdate.getDate()},
        l: function(){return txt_weekdays[f.w()]},
        N: function(){return f.w() + 1},
        S: function(){return txt_ordin[f.j()] ? txt_ordin[f.j()] : 'th'},
        w: function(){return jsdate.getDay()},
        z: function(){return (jsdate - new Date(jsdate.getFullYear() + "/1/1")) / 864e5 >> 0},
        
        // Week
        W: function(){
            var a = f.z(), b = 364 + f.L() - a;
            var nd2, nd = (new Date(jsdate.getFullYear() + "/1/1").getDay() || 7) - 1;
            if(b <= 2 && ((jsdate.getDay() || 7) - 1) <= 2 - b){
                return 1;
            } else{
                if(a <= 2 && nd >= 4 && a >= (6 - nd)){
                    nd2 = new Date(jsdate.getFullYear() - 1 + "/12/31");
                    return date("W", Math.round(nd2.getTime()/1000));
                } else{
                    return (1 + (nd <= 3 ? ((a + nd) / 7) : (a - (7 - nd)) / 7) >> 0);
                }
            }
        },
        
        // Month
        F: function(){return txt_months[f.n()]},
        m: function(){return pad(f.n(), 2)},
        M: function(){return f.F().substr(0,3)},
        n: function(){return jsdate.getMonth() + 1},
        t: function(){
            var n;
            if( (n = jsdate.getMonth() + 1) == 2 ){
                return 28 + f.L();
            } else{
                if( n & 1 && n < 8 || !(n & 1) && n > 7 ){
                    return 31;
                } else{
                    return 30;
                }
            }
        },
        
        // Year
        L: function(){var y = f.Y();return (!(y & 3) && (y % 1e2 || !(y % 4e2))) ? 1 : 0},
        //o not supported yet
        Y: function(){return jsdate.getFullYear()},
        y: function(){return (jsdate.getFullYear() + "").slice(2)},
        
        // Time
        a: function(){return jsdate.getHours() > 11 ? "pm" : "am"},
        A: function(){return f.a().toUpperCase()},
        B: function(){
            // peter paul koch:
            var off = (jsdate.getTimezoneOffset() + 60)*60;
            var theSeconds = (jsdate.getHours() * 3600) + (jsdate.getMinutes() * 60) + jsdate.getSeconds() + off;
            var beat = Math.floor(theSeconds/86.4);
            if (beat > 1000) beat -= 1000;
            if (beat < 0) beat += 1000;
            if ((String(beat)).length == 1) beat = "00"+beat;
            if ((String(beat)).length == 2) beat = "0"+beat;
            return beat;
        },
        g: function(){return jsdate.getHours() % 12 || 12},
        G: function(){return jsdate.getHours()},
        h: function(){return pad(f.g(), 2)},
        H: function(){return pad(jsdate.getHours(), 2)},
        i: function(){return pad(jsdate.getMinutes(), 2)},
        s: function(){return pad(jsdate.getSeconds(), 2)},
        //u not supported yet
        
        // Timezone
        //e not supported yet
        //I not supported yet
        O: function(){
            var t = pad(Math.abs(jsdate.getTimezoneOffset()/60*100), 4);
            if (jsdate.getTimezoneOffset() > 0) t = "-" + t; else t = "+" + t;
            return t;
        },
        P: function(){var O = f.O();return (O.substr(0, 3) + ":" + O.substr(3, 2))},
        //T not supported yet
        //Z not supported yet
        
        // Full Date/Time
        c: function(){return f.Y() + "-" + f.m() + "-" + f.d() + "T" + f.h() + ":" + f.i() + ":" + f.s() + f.P()},
        //r not supported yet
        U: function(){return Math.round(jsdate.getTime()/1000)}
    };
        
    return format.replace(/[\\]?([a-zA-Z])/g, function(t, s){
        if( t!=s ){
            // escaped
            ret = s;
        } else if( f[s] ){
            // a date function exists
            ret = f[s]();
        } else{
            // nothing special
            ret = s;
        }
        return ret;
    });
    
}

</script>
        <script>
            var _hmt = _hmt || [];
            (function() {
              var hm = document.createElement("script");
              hm.src = "https://hm.baidu.com/hm.js?f71f3fb5daef785db90976d2ca6a5262";
              var s = document.getElementsByTagName("script")[0]; 
              s.parentNode.insertBefore(hm, s);
            })();
        </script>
  </body>
</html>