<div class="form-box" id="login-box">
  <div class="header">Sign In</div>
  <?= $this->Form->create() ?>
  <div class="body bg-gray">
    <div class="form-group">
      <?= $this->Flash->render() ?>
      <br>
      <?= __('Vui lòng nhập tên đăng nhập.') ?>
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
    <p><a href="#">Quên mật khẩu</a></p>
    <a href="#" class="text-center">Register a new membership</a> </div>
  <?= $this->Form->end() ?>
  <!--<div class="margin text-center"> <span>Sign in using social networks</span> <br/>
    <button class="btn bg-light-blue btn-circle"><i class="fa fa-facebook"></i></button>
    <button class="btn bg-aqua btn-circle"><i class="fa fa-twitter"></i></button>
    <button class="btn bg-red btn-circle"><i class="fa fa-google-plus"></i></button>
  </div>-->
</div>

