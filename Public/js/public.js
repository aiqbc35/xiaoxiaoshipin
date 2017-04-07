$(function () {
  'use strict';
  
  $(document).on('click','#reguserput', function () {

      getshowreg();
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
      email = $("#emailreg").val();
      passwd = $("#passreg").val();
      if (email == '' || passwd =='') {
          $.alert('用户名及密码不能为空！');
      }elseif (emailCheck(email) == false){
          $.alert('请输入合法的邮箱！');
      }else{
         $.post(reguser, {email: email,passwd:passwd}, function(data, textStatus, xhr) {
           /*optional stuff to do after success */
         },'json');
      }
  }

  function emailCheck (email)
  { 
     var myreg = /^([0-9A-Za-z\\-_\\.]+)@([0-9a-z]+\\.[a-z]{2,3}(\\.[a-z]{2})?)$/i;
     if (!myreg.test(email)) {
        return false;
     }else{
       return true;
     }
  }
});
 