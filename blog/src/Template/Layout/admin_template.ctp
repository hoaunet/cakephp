<!DOCTYPE html>
<html>
<head>
<?php echo $this->Html->charset("UTF-8");?>
<title>
<?= h($this->fetch('title')) ?>
</title>
<meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
<?php  echo $this->Html->css('bootstrap.min.css');//bootstrap 3.0.2
	   echo $this->Html->css('font-awesome.min.css');//font Awesome
	   echo $this->Html->css('ionicons.min.css');//Ionicons
	   echo $this->Html->css('morris/morris.css');//Morris chart
	   echo $this->Html->css('jvectormap/jquery-jvectormap-1.2.2.css');//jvectormap	  
	   echo $this->Html->css('AdminLTE.css');//Theme style
	   echo $this->Html->script('bootstrap.min.js');
?>
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
<?php
echo $this->fetch('meta');
echo $this->fetch('css');
echo $this->fetch('script');
?>
</head>
<body class="skin-blue">
<!-- header logo: style can be found in header.less -->
<header class="header"> <a href="/" class="logo"> 
  <!-- Add the class icon to your logo image or logo icon to add the margining --> 
  AdminLTE </a> 
  <!-- Header Navbar: style can be found in header.less -->
  <nav class="navbar navbar-static-top" role="navigation"> 
    <!-- Sidebar toggle button--> 
    <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </a>
    <div class="navbar-right">
      <ul class="nav navbar-nav">
        <!-- User Account: style can be found in dropdown.less -->
        <li class="dropdown user user-menu"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="glyphicon glyphicon-user"></i> <span>Jane Doe <i class="caret"></i></span> </a>
          <ul class="dropdown-menu">
            <!-- User image -->
            <li class="user-header bg-light-blue"><?php echo $this->Html->image("avatar_hoaunet_s3s.jpg", [
    "alt" => "Blog","class"=>"img-circle",'url' => ['controller' => 'Users', 'action' => 'view', 6]
]);?>
              <p> Jane Doe - Web Developer <small>Member since Nov. 2012</small> </p>
            </li>
            <!-- Menu Body 
            <li class="user-body">
              <div class="col-xs-4 text-center"> <a href="#">Followers</a> </div>
              <div class="col-xs-4 text-center"> <a href="#">Sales</a> </div>
              <div class="col-xs-4 text-center"> <a href="#">Friends</a> </div>
            </li>--> 
            <!-- Menu Footer-->
            <li class="user-footer">
              <div class="pull-left"> <?php echo $this->Html->link('Profile',
    							['controller' => 'Users', 'action' => 'view', 1],["class"=>"btn btn-default btn-flat"]);?></div>
              <div class="pull-right"><?php echo $this->Html->link('Sign out',
    							['controller' => 'Users', 'action' => 'logout', '_full' => true],["class"=>"btn btn-default btn-flat"]);?> </div>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </nav>
</header>
<div class="wrapper row-offcanvas row-offcanvas-left"> 
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="left-side sidebar-offcanvas"> 
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar"> 
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image"> <?php echo $this->Html->link($this->Html->image("avatar_hoaunet_s3s.png", ["alt" => "Brownies","class"=>"img-circle"]),
    												"users/view/6",['escape' => false]); ?></div>
        <div class="pull-left info">
          <p>Hello, Jane</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a> </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Tìm kiếm..."/>
          <span class="input-group-btn">
          <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
          </span> </div>
      </form>
      <!-- /.search form --> 
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="active"> <a href="/"> <i class="fa fa-dashboard"></i> <span>Danh mục</span> </a> </li>
        <li><i class="fa fa-th"></i><?php echo $this->Html->link('Tin tức',
    							['controller' => 'Articles', 'action' => 'index', '_full' => true]);?> </li>
        <li><i class="fa fa-th"></i><?php echo $this->Html->link('Thể loại',
    							['controller' => 'Categories', 'action' => 'index', '_full' => true]);?> </li>
        <li><?php echo $this->Html->link('Thể loại sản phẩm',['controller' => 'Productcategories', 'action' => 'index','_full' => true, 'prefix' => 'admin']);?></li>
        <li><?php echo $this->Html->link('Sản phẩm',['controller' => 'Products', 'action' => 'index', '_full' => true]);?></li>
        <li><?php echo $this->Html->link('Nhà sản xuất',['controller' => 'Manufacturers', 'action' => 'index', '_full' => true]);?></li>
        <li><?php echo $this->Html->link('Quốc gia',['controller' => 'Countries', 'action' => 'index', '_full' => true]);?></li>
        <li><?php echo $this->Html->link('Người dùng',['controller' => 'Users', 'action' => 'index', '_full' => true]);?></li>
      </ul>
    </section>
    <!-- /.sidebar --> 
  </aside>
  
  <!-- Right side column. Contains the navbar and content of the page -->
  <aside class="right-side"> 
    <!-- Main content -->
    <?= $this->fetch('content') ?>
    <!-- /.content --> 
  </aside>
  <!-- /.right-side --> 
</div>
</body>
</html>