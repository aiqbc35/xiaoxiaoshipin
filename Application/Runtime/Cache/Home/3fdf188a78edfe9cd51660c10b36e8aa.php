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
        line-height: 33px;
      }
    </style>


  </head>
  <body>
    <header>
      <div class="container">
          <div class="title"><a href="">Men magazine</a></div>
      </div>
    </header>
    <link href="/Public/zy.min.css" rel="stylesheet">
    <script src="/Public/zy.min.js"></script>
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
        <div class="wrapper" style="margin-bottom: 83px;">
            <h2>MOVIE LIST</h2>
            <div class="row">               
                 <div class="zy_media">
                  </div>               
            </div>
        </div>
    </div>
    <script type="text/javascript">
        var getOne = "<?php echo U('getone');?>";
        var id = GetRequest();
        window.onload=function(){
             $('#myModal').modal('show'); 
            $.post(getOne, {id: id}, function(data, textStatus, xhr) {
                 if (data.msg.id > 0) {
                      var _html = '<video poster="/Uploads/'+data.msg.image+'" data-config=\'{"mediaTitle": "qslist.info","type":"video/mp4","preload":"auto"}\'><source src="'+data.msg.server+data.msg.link+'" type="video/mp4">您的浏览器不支持HTML5视频</video>';
                      $(".zy_media").html(_html);
                      zymedia('video');
                      $('#myModal').modal('hide');
                 }else{
                   $('#myModal').modal('hide');
                    alert(data.msg);
                 }
            },'json');


        }
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