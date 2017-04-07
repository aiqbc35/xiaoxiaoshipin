<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="ThemeBucket">
  <link rel="shortcut icon" href="#" type="image/png">

  <title>Update Status</title>

  <!--dynamic table-->
  <link href="/Public/adminex/js/advanced-datatable/css/demo_page.css" rel="stylesheet" />
  <link href="/Public/adminex/js/advanced-datatable/css/demo_table.css" rel="stylesheet" />
  <link rel="stylesheet" href="/Public/adminex/js/data-tables/DT_bootstrap.css" />

  <link href="/Public/adminex/css/style.css" rel="stylesheet">
  <link href="/Public/adminex/css/style-responsive.css" rel="stylesheet">

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="/Public/adminex/js/html5shiv.js"></script>
  <script src="/Public/adminex/js/respond.min.js"></script>
  <![endif]-->
</head>

<body class="sticky-header">

<section>
    <!-- left side start-->
    <div class="left-side sticky-left-side">

        <!--logo and iconic logo start-->
        <div class="logo">
            <a href="index.html"><img src="/Public/adminex/images/logo.png" alt=""></a>
        </div>

        <div class="logo-icon text-center">
            <a href="index.html"><img src="/Public/adminex/images/logo_icon.png" alt=""></a>
        </div>
        <!--logo and iconic logo end-->


        <div class="left-side-inner">   

            <!--sidebar nav start-->
            <ul class="nav nav-pills nav-stacked custom-nav">
               
                <li class="menu-list <?php if($building_mune == 1): ?>nav-active<?php endif; ?>"><a href=""><i class="fa fa-home"></i> <span>Videos</span></a>
                    <ul class="sub-menu-list">
                        <li <?php if($list_mune == 1): ?>class="active"<?php endif; ?>><a href="<?php echo U('Index/index');?>">Video List</a></li>
                        <li <?php if($video_add == 1): ?>class="active"<?php endif; ?>><a href="<?php echo U('Index/add');?>">Add Video</a></li>
                        <li <?php if($updatestatus_mune == 1): ?>class="active"<?php endif; ?>><a href="<?php echo U('Index/updateStatus');?>">Update Status</a></li>
                    </ul>
                </li>
                                                  
                <li><a href="<?php echo U('Login/logout');?>"><i class="fa fa-sign-in"></i> <span>Logout</span></a></li>

            </ul>
            <!--sidebar nav end-->

        </div>
    </div>
    <!-- left side end-->
    
    <!-- main content start-->
    <div class="main-content" >

        <!-- header section start-->
        <div class="header-section">

        <!--toggle button start-->
        <a class="toggle-btn"><i class="fa fa-bars"></i></a>
        <!--toggle button end-->

      
        <!--notification menu start -->
        <div class="menu-right">
    <ul class="notification-menu">
        <li>
            <a href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                <img src="/Public/adminex/images/photos/user-avatar.png" alt="" />
                <?php echo (session('username')); ?>
                <span class="caret"></span>
            </a>
             <ul class="dropdown-menu dropdown-menu-usermenu pull-right">
                
                <li><a href="<?php echo U('Login/logout');?>"><i class="fa fa-sign-out"></i>Logout</a></li>
            </ul>
        </li>

    </ul>
</div>
        <!--notification menu end -->

        </div>
        <!-- header section end-->

        <!--body wrapper start-->
        <div class="wrapper">
        <div class="row">
        <div class="col-sm-12">
        <section class="panel">
        <header class="panel-heading">
           Update Status
        </header>
        <div class="panel-body">
        <div class="adv-table">
        <table  class="display table table-bordered table-striped" id="dynamic-table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>thumbnail</th>
            <th>Video Link</th>
            <th>Date</th>
            <th>Sort</th>
            <th>operation</th>
        </tr>
        </thead>
        <tbody>
        <?php if(is_array($list)): foreach($list as $key=>$v): ?><tr class="gradeA">
            <td><?php echo ($v["id"]); ?></td>
            <td><?php echo ($v["name"]); ?></td>
            <td><img src="/Uploads/<?php echo ($v["image"]); ?>" alt="" width="100"></td>
            <td><?php echo ($v["link"]); ?></td>
            <td><?php echo (date("Y-m-d H:i:s",$v["addtime"])); ?></td>
            <td><?php echo ($v["sortname"]); ?></td>           
            <td>
              <a class="btn btn-success" data-id="<?php echo ($v["id"]); ?>">OK</a>
              <a class="btn btn-danger" data-id="<?php echo ($v["id"]); ?>">Delete</a>
            </td>
        </tr><?php endforeach; endif; ?>            
        </tbody>
        <tfoot>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>thumbnail</th>
            <th>Video Link</th>
            <th>Date</th>
            <th>Sort</th>
            <th>operation</th>
        </tr>
        </tfoot>
        </table>
        </div>
        </div>
        </section>
        </div>
        </div>
        
        </div>
        <!--body wrapper end-->


    </div>
    <!-- main content end-->
</section>

<!-- Placed js at the end of the document so the pages load faster -->
<script src="/Public/adminex/js/jquery-1.10.2.min.js"></script>
<script src="/Public/adminex/js/jquery-ui-1.9.2.custom.min.js"></script>
<script src="/Public/adminex/js/jquery-migrate-1.2.1.min.js"></script>
<script src="/Public/adminex/js/bootstrap.min.js"></script>
<script src="/Public/adminex/js/modernizr.min.js"></script>
<script src="/Public/adminex/js/jquery.nicescroll.js"></script>

<!--dynamic table-->
<script type="text/javascript" language="javascript" src="/Public/adminex/js/advanced-datatable/js/jquery.dataTables.js"></script>
<script type="text/javascript" src="/Public/adminex/js/data-tables/DT_bootstrap.js"></script>
<!--dynamic table initialization -->
<script src="/Public/adminex/js/dynamic_table_init.js"></script>

<!--common scripts for all pages-->
<script src="/Public/adminex/js/scripts.js"></script>
<!-- alert -->
<script src="/Public/layer/layer.js"></script>
<script src="/Public/js/js.js"></script>

<script type="text/javascript">

    var url = "<?php echo U('delete');?>";
    var updataurl = "<?php echo U('updateOk');?>";

    $(".btn-success").click(function(event) {
          var id = $(this).data('id');
         if (id == '') {
                bulealert('请删除有效信息');
         }else{
            $.ajax({
                url: updataurl,
                type: 'POST',
                dataType: 'json',
                data: {id: id},
                beforeSend:function(xhr){
                var index = layer.load(1, {
                      shade: [0.1,'#fff'] //0.1透明度的白色背景
                    });
                }
            })
            .done(function(e) {
                layer.closeAll('loading');
                layer.msg(e.msg);
                if (e.status == 1) {
                    window.location.reload();
                }
            })
            .fail(function() {
                layer.closeAll('loading');
                bulealert('网络错误！');
            });
            
         }
    });



    $(".btn-danger").click(function(event) {
         var id = $(this).data('id');
         if (id == '') {
                bulealert('请删除有效信息');
         }else{
            $.ajax({
                url: url,
                type: 'POST',
                dataType: 'json',
                data: {id: id},
                beforeSend:function(xhr){
                var index = layer.load(1, {
                      shade: [0.1,'#fff'] //0.1透明度的白色背景
                    });
                }
            })
            .done(function(e) {
                layer.closeAll('loading');
                layer.msg(e.info);
                if (e.status == 1) {
                    window.location.reload();
                }
            })
            .fail(function() {
                layer.closeAll('loading');
                bulealert('网络错误！');
            });
            
         }
    });


</script>
</body>
</html>