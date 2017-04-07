$(function () {
  'use strict';
  
  $(document).on("click", "#reg", function() {
             regadd();
        });

   function getshowreg ()
  {
    var modal = $.modal({
      title: '注册会员免费观影',
      afterText:  '<div class="list-block" style="margin: 0.75rem 0;"><ul>'+
                    '<li><div class="item-content"><div class="item-media"><i class="icon icon-form-name"></i></div><div class="item-inner"><div class="item-input"><input type="text" id="emailreg" placeholder="请输入邮箱"></div></div></div></li>'+
                    '<li><div class="item-content"><div class="item-media"><i class="icon icon-form-name"></i></div><div class="item-inner"><div class="item-input"><input type="text" id="passreg" placeholder="请输入密码"></div></div></div></li>'+
                      '</ul></div>',
      buttons: [
        {
          text: '取消'
        },
        {
          text: '确认',
          bold: true,
          onClick: function () {
              
          }
        },
      ]
    })
    $.swiper($$(modal).find('.swiper-container'), {pagination: '.swiper-pagination'});
    
  }

  function regadd ()
  {
      var username = $("#regmail").val();
      var passwd = $("#passwd").val();
      if (username == '' || passwd =='') {
          $.alert('用户名及密码不能为空！');
      }else if (emailCheck(username) == false) {
          $.alert('请输入合法的邮箱！');
      }else{
         $.post(reguser, {username: username,password:passwd}, function(data, textStatus, xhr) {
              $.alert(data.msg);
              if (data.status == 1) {
                  window.location.href = data.url;
              }
         },'json');
      }
  }

  function emailCheck (email)
  { 
     var myreg = /^([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+@([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+\.[a-zA-Z]{2,3}$/;
     if (!myreg.test(email)) {
        return false;
     }else{
       return true;
     }
  }
});
 