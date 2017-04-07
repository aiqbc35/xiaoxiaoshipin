<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="ThemeBucket">
  <link rel="shortcut icon" href="#" type="image/png">

  <title>Addd Video</title>

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
           Addd Video
        </header>
        <div class="panel-body">
              <form class="form-horizontal" role="form" method="post" action="<?php echo U('addHalt');?>" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="inputEmail1" class="col-lg-2 col-sm-2 control-label">Name</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="" placeholder="Name" name="name" value="<?php echo ($info["name"]); ?>">                           
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail1" class="col-lg-2 col-sm-2 control-label">Sort</label>
                        <div class="col-lg-10">
                            <select name="sort" id="">
                                <?php if(is_array($SortList)): foreach($SortList as $key=>$v): ?><option value="<?php echo ($v["id"]); ?>" <?php if($info['sort'] == $v['id']): ?>selected<?php endif; ?>><?php echo ($v["name"]); ?></option><?php endforeach; endif; ?>
                            </select>                        
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail1" class="col-lg-2 col-sm-2 control-label">Thumbnail</label>
                        <div class="col-lg-10">
                            <input type="file" name="image">                     
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail1" class="col-lg-2 col-sm-2 control-label">Video Link</label>
                        <div class="col-lg-10">
                            <input type="text" name="link" class="form-control" placeholder="Video Link" value="<?php echo ($info["link"]); ?>">                     
                        </div>
                    </div>
                    <input type="hidden" name="id" value="<?php echo ($info["id"]); ?>">
                    <button class="btn btn-success btn-lg btn-block" type="submit">Submit</button>

              </form>  
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

<!--common scripts for all pages-->
<script src="/Public/adminex/js/scripts.js"></script>

</body>
</html>