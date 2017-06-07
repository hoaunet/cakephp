<!DOCTYPE html>
<html>
<head>
<?php echo $this->Html->charset("UTF-8");?>
<?= h($this->fetch('title')) ?>
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<?php
echo $this->Html->css('style.css');
echo $this->fetch('meta');
echo $this->fetch('css');
echo $this->fetch('script');
?>
</head>
<body>
<div id="background">
  <div id="page">
    <div id="header">
      <div id="logo"> <?php echo $this->Html->image("avatar_hoaunet_s3s.png", [
    "alt" => "Blog","class"=>"img-circle","height"=>'50px','url' => ['controller' => 'Pages', 'action' => 'display']
]);?>  </div>
      <div id="navigation">
        <ul id="primary">
          <li class="selected"><?php echo $this->Html->link('Trang chủ',['controller' => 'Pages', 'action' => 'index', '_full' => true]);?> </li>
          <li><?php echo $this->Html->link('Sản phẩm',['controller' => 'Products', 'action' => 'index', '_full' => true]);?></li>
          <li><?php echo $this->Html->link('Tin tức',['controller' => 'Articles', 'action' => 'index', '_full' => true]);?></li>          
          <li><?php echo $this->Html->link('Nhà sản xuất',['controller' => 'Manufacturers', 'action' => 'index', '_full' => true]);?></li>          <li>Liên hệ</li> 
        </ul>
        <ul id="secondary">
          <li> <a href="checkout.html">Cart</a> </li>
          <li><?php echo $this->Html->link('Đăng nhập',['controller' => 'Users', 'action' => 'login', '_full' => true]);?> | <a href="index.html">Signup</a> </li>
        </ul>
      </div>
    </div>
    <div id="contents">
    <?= $this->fetch('content') ?>
    </div>
    <div id="footer">
      <div class="background">
        <div id="connect">
          <h5>Get Social With us!</h5>
          <ul>
            <li> <a href="http://freewebsitetemplates.com/go/facebook/" target="_blank" class="facebook"></a> </li>
            <li> <a href="http://freewebsitetemplates.com/go/twitter/" target="_blank" class="twitter"></a> </li>
            <li> <a href="http://www.freewebsitetemplates.com/go/googleplus/" target="_blank" class="linkin"></a> </li>
          </ul>
        </div>
        <ul class="navigation">
          <li>
            <h5>Mens</h5>
            <a href="mens.html">Sneakers</a> <a href="mens.html">Boots</a> <a href="mens.html">Winter socks</a> <a href="mens.html">Lace-ups</a> </li>
          <li>
            <h5>Womens</h5>
            <a href="womens.html">Sneakers</a> <a href="womens.html">Boots</a> <a href="womens.html">Winter socks</a> <a href="womens.html">Lace-ups</a> </li>
          <li class="latest">
            <h5>New Arrivals</h5>
            <a href="new.html">Cheverlyn Zespax</a> <a href="new.html">Alta Ulterior</a> <a href="new.html">Mikee</a> <a href="new.html">Jeeroks Copy</a> </li>
          <li class="latest">
            <h5>On Sale Items</h5>
            <a href="sale.html">Cheverlyn Zespax</a> <a href="sale.html">Alta Ulterior</a> <a href="sale.html">Mikee</a> <a href="sale.html">Jeeroks Copy</a> </li>
        </ul>
        <p class="footnote"> &copy; Copyirght &copy; 2011. <a href="index.html">Company name</a> all rights reserved. </p>
      </div>
    </div>
  </div>
</div>
</body>
</html>