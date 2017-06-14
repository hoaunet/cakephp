<!DOCTYPE html>
<html>
<head>
<?= $this->Html->charset() ?>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>
<?= $this->fetch('title') ?>
</title>
<?= $this->Html->meta('icon') ?>
<?= $this->Html->css('style.css') ?>
<?= $this->fetch('meta') ?>
<?= $this->fetch('css') ?>
<?= $this->fetch('script') ?>
</head>
<body>
<ul class="head">
  <li class="l"><?php echo $this->Html->image("logo_s3s_career.jpg", ["alt" => "tim viec, viec lam, tim viec lam, tuyen dung viet nam, tuyen dung, nguoi tim viec, viec tim nguoi",
				'url' => ['controller' => 'Pages', 'action' => 'home']]);?></li>
  <!--<li class="r">        
          <ul class="user_info">
            <li class="t"><b>Xin chào: Lê Hoa</b><?php echo $this->Html->link('Thoát',['controller' => 'Users', 'action' => 'logout', '_full' => true]
);?>
            <li class="d">
              <div style="padding-top:5px; padding-bottom:5px;"><span id="head_lblBal" class="cblack">Bạn đang có: <span class="cred"><b>0</b>đ</span> (<a href="http://tuyendungvietnam.com.vn/ntv_naptien.aspx?id=16598">nạp tiền</a>)</span></div>
              •<a href="http://tuyendungvietnam.com.vn/ntv-dang-ky.aspx?id=16598"> Thông tin cá nhân</a>&nbsp;&nbsp; • <a href="http://tuyendungvietnam.com.vn/ntvAdmin.aspx?id=3">Hồ sơ đã đăng</a> </li>
          </ul>
        </li>-->
  <li class="r">
    <?php  echo $this->Html->image('btnLogin.png', ['plugin' => false,"id"=>"head_btnLogin","style"=>"border-width:0px;"]);?>
    <input name="head$txtUser" type="text" id="head_txtUser" class="txt" ValidationGroup="login" placeholder="Email đăng nhập" />
    <input name="head$txtPass" type="password" id="head_txtPass" class="txt" ValidationGroup="login" placeholder="Mật khẩu" />
    <div class="t"><a href="javascript:void(0)" onclick="customer('dk','Đăng ký tài khoản'); return false;">Đăng ký</a><span>|</span><a href="/repass.aspx">Quên mật khẩu</a></div>
  </li>
</ul>
<div id="dk" style="display:none;">
  <div class="dk"><?php echo $this->Html->link('Nhà tuyển dụng đăng ký',['controller' => 'Users', 'action' => 'logout', '_full' => true]
);?><?php echo $this->Html->link('Người tìm việc đăng ký',['controller' => 'Users', 'action' => 'logout', '_full' => true]
);?></div>
</div>
<div class="live_chat" onmouseover="javascript:move(&#39;all&#39;)" onmouseout="javascript:out(&#39;all&#39;)"> <a href="http://tuyendungvietnam.com.vn/#"><img src="./Tuyển dụng việt nam, tim viec luong cao, tuyen dung nhanh_files/bgql.gif" alt="live chat"></a>
  <div style="display: none;" id="all">
    <ul>
      <li><?php echo $this->Html->image("ql1.gif", ["alt" => "tim viec, viec lam, tim viec lam, tuyen dung viet nam, tuyen dung, nguoi tim viec, viec tim nguoi",
				'url' => ['controller' => 'Users', 'action' => 'home']]);?><?php echo $this->Html->link('Quản lý tuyển dụng',['controller' => 'Users', 'action' => 'logout', '_full' => true]
);?>  </li>
      <li><?php echo $this->Html->image("ql2.gif", ["alt" => "tim viec, viec lam, tim viec lam, tuyen dung viet nam, tuyen dung, nguoi tim viec, viec tim nguoi",
				'url' => ['controller' => 'Users', 'action' => 'home']]);?><?php echo $this->Html->link('Tin TD đã đăng',['controller' => 'Users', 'action' => 'logout', '_full' => true]
);?>  </li>
	  <li><?php echo $this->Html->image("ql3.gif", ["alt" => "tim viec, viec lam, tim viec lam, tuyen dung viet nam, tuyen dung, nguoi tim viec, viec tim nguoi",
				'url' => ['controller' => 'Users', 'action' => 'home']]);?><?php echo $this->Html->link('Tạo tin TD mới',['controller' => 'Users', 'action' => 'logout', '_full' => true]
);?>  </li>
	  <li><?php echo $this->Html->image("ql4.gif", ["alt" => "tim viec, viec lam, tim viec lam, tuyen dung viet nam, tuyen dung, nguoi tim viec, viec tim nguoi",
				'url' => ['controller' => 'Users', 'action' => 'home']]);?><?php echo $this->Html->link('Quản lý hồ sơ ứng viên',['controller' => 'Users', 'action' => 'logout', '_full' => true]
);?>  </li>
	  <li><?php echo $this->Html->image("ql5.gif", ["alt" => "tim viec, viec lam, tim viec lam, tuyen dung viet nam, tuyen dung, nguoi tim viec, viec tim nguoi",
				'url' => ['controller' => 'Users', 'action' => 'home']]);?><?php echo $this->Html->link('Phản hồi của NTV',['controller' => 'Users', 'action' => 'logout', '_full' => true]
);?>  </li>
      <li><?php echo $this->Html->image("ql8.gif", ["alt" => "tim viec, viec lam, tim viec lam, tuyen dung viet nam, tuyen dung, nguoi tim viec, viec tim nguoi",
				'url' => ['controller' => 'Users', 'action' => 'home']]);?><?php echo $this->Html->link('Thông tin NTD',['controller' => 'Users', 'action' => 'logout', '_full' => true]
);?>  </li>
       <li><?php echo $this->Html->image("ql10.gif", ["alt" => "tim viec, viec lam, tim viec lam, tuyen dung viet nam, tuyen dung, nguoi tim viec, viec tim nguoi",
			  'url' => ['controller' => 'Users', 'action' => 'home']]);?><?php echo $this->Html->link('Thông báo của BQT',['controller' => 'Users', 'action' => 'logout', '_full' => true]
);?>  </li>
    </ul>
  </div>
</div>
<nav class="top-bar expanded" data-topbar role="navigation">
  <ul class="title-area large-3 medium-4 columns">
    <li class="name">
      <h1><a href="">
        <?= $this->fetch('title') ?>
        </a></h1>
    </li>
  </ul>
  <div class="top-bar-section">
    <ul class="right">
      <li><a target="_blank" href="http://book.cakephp.org/3.0/">Documentation</a></li>
      <li><a target="_blank" href="http://api.cakephp.org/3.0/">API</a></li>
    </ul>
  </div>
</nav>
<?= $this->Flash->render() ?>
<div class="container clearfix">
  <?= $this->fetch('content') ?>
</div>
<footer>
<ul class="fm">
    <li class="l">
        <strong>Thông báo việc làm</strong>
        <?php  echo $this->Html->image('fm1.gif');?>
                <span>Nhận Email việc làm và chớp lấy mọi cơ hội việc làm mơ ước</span>
        <a href="/thong-bao-viec-lam.html">Gửi Việc Cho Tôi</a>
    </li>
    <li class="c">
        <strong>Vì sao chọn Tuyển Dụng Việt Nam</strong>
		<?php  echo $this->Html->image('fm2.gif');?>
        <span>Tuyển Dụng Việt Nam là trang web tuyển dụng hàn đầu Việt Nam</span>
        <a href="/info/vi-sao-chon-tuyen-dung-viet-nam-c80.html">Tìm Hiểu Thêm</a>    
    </li>
    <li class="r">
        <strong>Hồ sơ trực tuyến</strong>
		<?php  echo $this->Html->image('fm3.gif');?>        
        <span>Dễ dàng tạo hồ sơ trực tuyến để thu hút các nhà tuyển dụng</span>
        <a href="/ntvAdmin.aspx?id=4&amp;p=0">Tạo Hồ Sơ Ngay</a>    
    </li>
    <li class="cl"></li>
</ul>
</footer>
</body>
</html>
