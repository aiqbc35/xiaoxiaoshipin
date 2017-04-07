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
    <div class="page">
            <header class="bar bar-nav">
                <a class="button button-link button-nav pull-left" onclick="return window.history.back();">
                    <span class="icon icon-left"></span>
                    back
                  </a>
                <h1 class='title'></h1>
            </header>
            		<nav class="bar bar-tab">
            <a class="tab-item external <?php if($home == 1): ?>active<?php endif; ?>" href="<?php echo U('Index/index');?>">
                <span class="icon icon-home"></span>
                <span class="tab-label">首页</span>
            </a>
            <a class="tab-item external <?php if($videolist == 1): ?>active<?php endif; ?>" href="<?php echo U('Index/videoList');?>">
                <span class="icon icon-computer"></span>
                <span class="tab-label">视频</span>
            </a>
            <a class="tab-item external <?php if($about == 1): ?>active<?php endif; ?>" href="<?php echo U('About/index');?>">
                <span class="icon icon-star"></span>
                <span class="tab-label">收藏</span>
            </a>
        </nav>
            <div class="content">
                <div id="content" >
                  <div class="zy_media">

                  </div>

                  <script type="text/javascript">
                    // zymedia('video');
                  </script>
                </div>
        </div>

    </div>
<script type='text/javascript' src='//g.alicdn.com/msui/sm/0.6.2/js/sm.min.js' charset='utf-8'></script>
<script type='text/javascript' src='//g.alicdn.com/msui/sm/0.6.2/js/sm-extend.min.js' charset='utf-8'></script>
<script type="text/javascript">
  
  var videoUrl = "<?php echo U('getOne');?>";
  var id = GetRequest();
  $.showPreloader();
  $(function(){

      if (id > 0) {
          $.post(videoUrl, {id: id}, function(data, textStatus, xhr) {
              console.log(data);
              if (data.status == 1) {
                if (data.msg.id != '') {
                    $('.title').append(data.msg.name);
                    _html = '<video poster="/Uploads/'+data.msg.image+'" data-config=\'{"mediaTitle": "请记住我们的网站qslist.info","type":"video/mp4","preload":"auto"}\'>';
                    _html += '<source src="'+data.msg.server+data.msg.link+'" type="video/mp4">您的浏览器不支持HTML5视频</video>';

                    $('.zy_media').append(_html);
                    zymedia('video');
                    $.hidePreloader();
                }else{
                   $.hidePreloader();
                   $.alert('没有改影片，请返回！');
                }

              }else{
                  $.hidePreloader();
                  $.alert(data.msg);
              }
          },'json');
      }else{
          $.hidePreloader();
          $.alert('请勿非法操作！');
      }

  });


      /**
     * [GetRequest 获取url参数]
     */
function GetRequest() { 
      var url = location.search; //获取url中"?"符后的字串 
      var theRequest = new Object(); 
      if (url.indexOf("?") != -1) { 
      var str = url.substr(1); 
      strs = str.split("&"); 
      for(var i = 0; i < strs.length; i ++) { 
      theRequest[strs[i].split("=")[0]]=unescape(strs[i].split("=")[1]); 
      } 
      }

      return theRequest.id;
     
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