<!DOCTYPE html>
<html class="bg-black">
<head>
<meta charset="UTF-8">
<title>AdminLTE | Log in</title>
<meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
<?php  echo $this->Html->css('bootstrap.min.css');//bootstrap 3.0.2
	   echo $this->Html->css('font-awesome.min.css');//font Awesome
	   echo $this->Html->css('AdminLTE.css');//Theme style
?>


<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
</head>
<body class="bg-black">
<div class="form-box" id="login-box">
  <div class="header">Sign In</div>
  <?= $this->Form->create() ?>
  <div class="body bg-gray">
    <div class="form-group">
      <?= $this->Flash->render() ?>
      <br>
      <?= __('Please enter your username and password') ?>
    </div>
    <div class="form-group">
      <?= $this->Form->control('username',["class"=>"form-control","placeholder"=>"User ID"]) ?>      
    </div>
    <div class="form-group">
      <?= $this->Form->control('password',["class"=>"form-control","placeholder"=>"Password"]) ?>      
    </div>
    <div class="form-group">
      <input type="checkbox" name="remember_me"/>
      Remember me </div>
  </div>
  <div class="footer">
    <?= $this->Form->button(__('Login'),["class"=>"btn bg-olive btn-block"]); ?>
    <p><a href="#">I forgot my password</a></p>
    <a href="register.html" class="text-center">Register a new membership</a> </div>
  <?= $this->Form->end() ?>
  <div class="margin text-center"> <span>Sign in using social networks</span> <br/>
    <button class="btn bg-light-blue btn-circle"><i class="fa fa-facebook"></i></button>
    <button class="btn bg-aqua btn-circle"><i class="fa fa-twitter"></i></button>
    <button class="btn bg-red btn-circle"><i class="fa fa-google-plus"></i></button>
  </div>
</div>

<!-- jQuery 2.0.2 --> 
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
<?php	  echo $this->Html->script('bootstrap.min.js');//Bootstrap?>
</body>
</html>