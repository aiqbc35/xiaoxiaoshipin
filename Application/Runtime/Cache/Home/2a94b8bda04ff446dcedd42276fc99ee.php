<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Men magazine</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="/Public/Home/css/style.css"> 

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
      @import url(http://fonts.googleapis.com/css?family=Lato:900|Fredericka+the+Great|Oswald:700|Vidaloka);
        header{
          background-color: #31353d;
          padding: 91px 0 107px;
        }
        .title{
          font-size: 200%;
          text-rendering: optimizeLegibility; 
          font: bold 4.5rem/1rem 'Lato', sans-serif;
          text-transform: uppercase;
          letter-spacing: 0.15rem;
          margin-top: 1.25rem;
          color: #7DDDCE;
        }
      .header-box{
          background: #eaeaeb;
          padding: 23px 52px 20px 38px;
          border-top: 10px solid #f15f43;
          margin-top: -10px;
          font:200 14px/21px "Open Sans",Georgia,sans-serif;
          color: #31353d;
      }
      .hline2{
          padding-bottom: 61px;
          border-bottom: 1px solid #f4f4f5;
      }
      .wrapper h2{
            font: 600 30px/30px 'Open Sans',Arial,sans-serif;
            color: #f15f43;
            margin-top: 53px;
            text-transform: uppercase;
      }
      .img1{
          margin-top: 51px;
      }
      .col-md-2 img{
          margin-bottom: 0px;
          max-width: 100%;
          height: auto;
      }
      .txt2{
          font: 300 20px/20px 'Open Sans',Arial,sans-serif;
          color: #3e454c;
          margin-top: 18px;
          text-transform: uppercase;
          overflow:hidden;
          white-space: nowrap;
      }
      a{
          transition: all 0.3s ease;
          text-decoration: none;
          cursor: pointer;
          color: inherit;
      }
      footer{
        display: block;
        height: 130px;
        width: 100%;
        font-family: Arial,Helvetica,sans-serif;
        margin-top: 0px;
        color: #fff;
        background-color: #31353d;
      }
      .footer_priv{
        padding: 47px 0 30px;
      }
      footer .title{
          font: bold 2.5rem/1rem 'Lato', sans-serif;
      }
      p.txt_priv {
          display: block;
          color: #7a8f99;
          font: 300 14px/16px "Open Sans",Arial,sans-serif;
          margin-top: 14px;
      }
      .color1 {
          color: #f15f43 !important;
      }
      .fw600 {
          font-weight: 600;
      }
      .row img{
         height: 245px;
         width: 100%;
      }
      .title-box1{
        width: 100%;
        margin-top: 63px;
        padding: 29px 10px 30px 44px;
        background: #f15f43;
        padding-left: 36px;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
        font: 600 15px/20px 'Open Sans',Arial,sans-serif;
        color: #fff;
        text-transform: uppercase;
        text-align: center;
        font-size: 4rem;
      }
      .links a{
        line-height: 21px;
      }
    </style>


  </head>
  <body>
    <style type="text/css">
        .row.links {
            font-size: 12px;
        }
        .col-md-1{
            padding-right: 6px;
            padding-left: 4px;
        }
    </style>
    <header>
      <div class="container">
          <div class="title"><a href="<?php echo U('Index/index');?>">Men magazine</a></div>
      </div>
    </header>
    <div class="container">
          <div class="header-box">
              欢迎访问Men magazine!
              <p>
                Men magazine自动适配PC、平板、手机访问，最新网址是：http://www.qslist.info;
              </p>
              <p>
                为防止网址被封导致迷路，本站提供二种永久找回方式。<br/>方式一：请发送任意内容至qslistlink@mail.ru自动获取最新网址(敬请将本邮件添加至您邮箱以防忘记).<br/>
                方式二：最新网址发布站：http://ameblo.jp/qslistlink/<br/>
              </p>
          </div>
    </div>
    <div class="container">
        <div class="wrapper hline2">
            <h2>Top 6 Films</h2>
            <div class="row" id="topmovie">
            </div>
        </div>
        
        <div class="wrapper">
            <h2>NEW MOVIE</h2>
            <div class="row" id="newlist">
                
            </div>
        </div>

        <div class="wrapper" style="margin-bottom: 36px;">
                                  
            <div class="row">
                <div class="col-md-12 title-box1">
                    <a href="<?php echo U('getList');?>">点击查看更多>>></a>
                </div>
            </div>
        </div>

    </div>
    <script type="text/javascript">
        var  topUrl = "<?php echo U('getTop');?>";
        var  newListUrl = "<?php echo U('getNewList');?>";
        var videoUrl = "<?php echo U('video');?>";
        window.onload=function(){ 
          $('#myModal').modal('show');
          $.get(topUrl, function(data) {
              if (data.total > 0) {
                  _html = createTop(data);                 
                  $("#topmovie").append(_html);
              }
          },'json');

          $.get(newListUrl, function(data) {
              if (data.total > 0) {
                  _html = createTop(data);                 
                  $("#newlist").append(_html);
                  $('#myModal').modal('hide');
              }
          },'json');

        }

        function createTop (data){
            var _tophtml = '';
            $.each(data.list, function(index, val) {
               _tophtml += '<div class="col-md-2"><a href="'+videoUrl+'?id='+val.id+'">';
               _tophtml += '<img src="/Uploads/'+val.image+'" class="img1" alt=""></a><p class="txt2">';
              _tophtml += '<a href="'+videoUrl+'?id='+val.id+'">'+val.name+'</a></p></div>'
            });
            return _tophtml;
        }

    </script>
<div class="container" style="margin-bottom: 20px;">
  <div class="wrapper">
    <h2>LINKS</h2>
    <div class="row links">
        <div class="col-md-1">
            <a href="http://www.godus.info/?qslist.info" target="_blank">GODUS</a>
         </div>
         <div class="col-md-1">
            <a href="http://www.fulis.top/?qslist.info" target="_blank">福利涩导航</a>
         </div>
         <div class="col-md-1">
            <a href="http://74fuli.net/?qslist.info" target="_blank">骑士福利导航</a>
         </div>
         <div class="col-md-1">
            <a href="http://ifulidh.com/?qslist.info" target="_blank">夜趣福利导航</a>
         </div>
         <div class="col-md-1">
            <a href="http://www.sechungege.com/?qslist.info" target="_blank">色春阁导航</a>
         </div>
         <div class="col-md-1">
            <a href="http://www.jijidh.com/?qslist.info" target="_blank">吉吉导航</a>
         </div>
         <div class="col-md-1">
            <a href="http://www.500dh.me/?qslist.info" target="_blank">500福利导航</a>
         </div>
         <div class="col-md-1">
            <a href="http://www.xinfuli.info/?qslist.info" target="_blank">新福利导航</a>
         </div>
         <div class="col-md-1">
            <a href="http://s.daohang.se/?qslist.info" target="_blank">色狼福利导航</a>
         </div>
         <div class="col-md-1">
            <a href="http://www.clfuli.com/?qslist.info" target="_blank">潮流福利导航</a>
         </div>
         <div class="col-md-1">
            <a href="http://www.xxdh.ga/?qslist.info" target="_blank">一路向西导航</a>
         </div>
         <div class="col-md-1">
            <a href="http://www.yunvfuli.top/?qslist.info" target="_blank">欲女福利导航</a>
         </div>
         <div class="col-md-1">
            <a href="http://ay82.com/?qslist.info" target="_blank">暗夜导航</a>
         </div>
         <div class="col-md-1">
            <a href="http://www.qiyis.com/?qslist.info" target="_blank">奇艺色导航</a>
         </div>
         <div class="col-md-1">
            <a href="http://www.mifuli.com/?qslist.info" target="_blank">米福利</a>
         </div>
         <div class="col-md-1">
            <a href="http://www.wcmm01.com/?qslist.info" target="_blank">色站大全</a>
         </div>
         <div class="col-md-1">
            <a href="http://www.3699dhxx.com/?qslist.info" target="_blank">3699福利导航</a>
         </div>
         <div class="col-md-1">
            <a href="http://www.sebadh.com/?qslist.info" target="_blank">色吧福利导航</a>
         </div>
         <div class="col-md-1">
            <a href="http://www.cjkdl.xyz/?qslist.info" target="_blank">苍井空导航</a>
         </div>
         <div class="col-md-1">
            <a href="http://www.landh.tk/?qslist.info" target="_blank">蓝导航</a>
         </div>
         <div class="col-md-1">
            <a href="http://www.3u4c.com/?qslist.info" target="_blank">UC福利导航</a>
         </div>
         <div class="col-md-1">
            <a href="http://www.fulidh.ml/?qslist.info" target="_blank">柠檬导航</a>
         </div>
         <div class="col-md-1">
            <a href="http://doufu5.com/?qslist.info" target="_blank">豆福利导航</a>
         </div>
         <div class="col-md-1">
            <a href="http://www.4gfl.com/?qslist.info" target="_blank">4G福利导航</a>
         </div>
         <div class="col-md-1">
            <a href="http://www.av777dh.com/?qslist.info" target="_blank">AV777福利导航</a>
         </div>
         <div class="col-md-1">
            <a href="http://www.99fldh.com/?qslist.info" target="_blank">久久福利导航</a>
         </div>
         <div class="col-md-1">
            <a href="http://www.ssfldh.com/?qslist.info" target="_blank">色色福利导航</a>
         </div>
         <div class="col-md-1">
            <a href="http://www.vipssir.com/?qslist.info" target="_blank">AV福利导航</a>
         </div>
         <div class="col-md-1">
            <a href="http://www.xiandh.ga/?qslist.info" target="_blank">咸咸导航</a>
         </div>
         <div class="col-md-1">
            <a href="http://yequ.ga/?qslist.info" target="_blank">夜趣福利导航</a>
         </div>
         <div class="col-md-1">
            <a href="http://www.dadiaodh.club/?qslist.info" target="_blank">大屌福利导航</a>
         </div>
         <div class="col-md-1">
            <a href="http://yaomdh.com/?qslist.info" target="_blank">幺妹福利导航</a>
         </div>
         <div class="col-md-1">
            <a href="http://www.09kg.com/?qslist.info" target="_blank">第九福利导航</a>
         </div>
         <div class="col-md-1">
            <a href="http://www.x5m3.com/?qslist.info" target="_blank">九尾狐导航</a>
         </div>
         <div class="col-md-1">
            <a href="http://www.cn7k.com/?qslist.info" target="_blank">CN7K福利导航</a>
         </div>
         <div class="col-md-1">
            <a href="http://www.av999dh.com/?qslist.info" target="_blank">999福利导航</a>
         </div>
         <div class="col-md-1">
            <a href="http://www.haoavdh123.com/?qslist.info" target="_blank">找AV123导航</a>
         </div>
         <div class="col-md-1">
            <a href="http://dh.19xa.pw/?qslist.info" target="_blank">福利导航</a>
         </div>
         <div class="col-md-1">
            <a href="http://www.kanavdh.com/?qslist.info" target="_blank">看AV导航</a>
         </div>
         <div class="col-md-1">
            <a href="http://caoliu.ga/?qslist.info" target="_blank">找草榴导航</a>
         </div>
         <div class="col-md-1">
            <a href="http://g.e20.ru/?qslist.info" target="_blank">绿色小导航</a>
         </div>
         <div class="col-md-1">
            <a href="http://www.caoporn5.info/?qslist.info" target="_blank">超碰福利导航</a>
         </div>
         <div class="col-md-1">
            <a href="http://www.900010.la/?qslist.info" target="_blank">900010成人导航</a>
         </div>
         <div class="col-md-1">
            <a href="http://www.selangdh.com/?qslist.info" target="_blank">色狼福利导航</a>
         </div>
         <div class="col-md-1">
            <a href="http://www.yaocao666.com/?qslist.info" target="_blank">六哥成人导航</a>
         </div>
         <div class="col-md-1">
            <a href="http://nimadaohang.com/?qslist.info" target="_blank">尼玛导航</a>
         </div>
         <div class="col-md-1">
            <a href="http://www.seqingge.com/?qslist.info" target="_blank">色情阁导航</a>
         </div>
         <div class="col-md-1">
            <a href="http://1024dh.info/?qslist.info" target="_blank">福利百科</a>
         </div>
         <div class="col-md-1">
            <a href="http://www.avfldh.xyz/?qslist.info" target="_blank">AV福利导航</a>
         </div>
         <div class="col-md-1">
            <a href="http://www.semmdh.com/?qslist.info" target="_blank">色妹妹导航</a>
         </div>
         <div class="col-md-1">
            <a href="http://lsjsoso.me/?qslist.info" target="_blank">老司机福利导航</a>
         </div>
         <div class="col-md-1">
            <a href="http://www.muerfuli.site/?qslist.info" target="_blank">黑木耳福利导航</a>
         </div>
         <div class="col-md-1">
            <a href="http://www.69dh.top/?qslist.info" target="_blank">69福利导航</a>
         </div>
         <div class="col-md-1">
            <a href="http://www.cangjigedh.net/?qslist.info" target="_blank">藏姬阁导航</a>
         </div>
         <div class="col-md-1">
            <a href="http://www.d1dh.pw/?qslist.info" target="_blank">第一福利导航</a>
         </div>
         <div class="col-md-1">
            <a href="http://www.yyai.pw/?qslist.info" target="_blank">夜夜爱福利导航</a>
         </div>
         <div class="col-md-1">
            <a href="http://www.218dh.pw/?qslist.info" target="_blank">爱你啪福利导航</a>
         </div>
         <div class="col-md-1">
            <a href="http://kc6699.com/?qslist.info" target="_blank">开车福利导航</a>
         </div>
         <div class="col-md-1">
            <a href="http://dh.zhuan8.top/?qslist.info" target="_blank">宅男福利导航</a>
         </div>
         <div class="col-md-1">
            <a href="http://www.dagongji.me/?qslist.info" target="_blank">大公鸡导航</a>
         </div>
         <div class="col-md-1">
            <a href="http://hlj38.com/?qslist.info" target="_blank">狐狸精导航</a>
         </div>
         <div class="col-md-1">
            <a href="http://www.erdianpai.com/?qslist.info" target="_blank">二点拍福利导航</a>
         </div>
         
    </div>
  </div>
</div>
    <footer>
      <div class="footer_priv">
          <div class="container">
              <div class="col-md-3">
                  <div class="title">Men magazine</div>
              </div>
              <div class="col-md-6">
                
              </div>
              <div class="col-md-3">
                  <p class="txt_priv"><span class="fw600 color1">QSLIST</span> © <span id="copyright-year">2017</span> | <a href="http://www.qslist.info" class="link1">Qslist.info</a><br> </p>              
              </div>
          </div>
      </div>
    </footer>
    <div class="modal fade bs-example-modal-sm" id="myModal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
      <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
          <img src="/Public/Home/loading.gif" alt="">  
        </div>
      </div>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
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