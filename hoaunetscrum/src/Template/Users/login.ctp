<div class="login-page-wrapper" style="position:relative; z-index:9;">
  <div class="bg_logo_inner" style="top:-100px;left:-180px"></div>
  <div class="logo_landing"> <a href="#/"><img src="http://newui.orangescrum.org/img/images/logo_outer.png?v=2" border="0" alt="Orangescrum.com" title="Orangescrum.com"></a>
    <div style="padding:10px 5px;">
      <div style="clear:both"></div>
      <div style="float:left"><a href="#" target="_blank">How it Works?</a></div>
      <div style="float:right;padding-right:10px;"><a href="#" target="_blank">Help!</a></div>
    </div>
  </div>
  <div class="login_table">
    <div style="height:100%;display:table; width:100%;" class="m-480">
      <div id="container" style="display:table-cell; vertical-align:middle">
        <div class="">
          <div class="fl m-fl-none" style="right:0px; left:-8px;">
            <div class="login_box">
              <h2 style="font-size:22px;"> Login to your Account </h2>
              <div class="login-btm-img"><?php echo $this->Html->image("login_header_shadow.png", [
    "alt" => "Đăng Nhập","class"=>"img-circle","height"=>'8px',"width"=>'350px']);?> </div>
              <form action="/users/login" id="userLoginForm" method="post" accept-charset="utf-8">
                <div style="display:none;">
                  <input type="hidden" name="_method" value="POST">
                  <input type="hidden" name="data[_Token][key]" value="221cb7416e08ccbcac4947f9c2fcb8ced20189ce" id="Token1430466405">
                </div>
                <input type="hidden" name="data[User][timezone_id]" id="timezone_id" value="7">
                <div class="login_dialog top_inc_app_land_from" id="login_dialog" style="margin-top:0px;">
                  <div id="divide"></div>
                  <div style="text-align:center;"> </div>
                  <label class="lbl_ie">Email ID</label>
                  <input name="data[User][email]" size="30" class="textbox" placeholder="Email ID" title="Email ID" id="email" style="background:#fff" type="text">
                  <label class="lbl_ie">Password</label>
                  <input name="data[User][password]" size="30" class="textbox" placeholder="Password" title="Password" id="password" type="password">
                  <div class="gap10"></div>
                  <div>
                    <div style="margin-top:0px; margin-left:20px;width:100%">
                      <input type="hidden" value="" name="case_details" id="case_details">
                      <button type="submit" value="Save" name="submit_Pass" id="submit_Pass" class="btn btn_blue" style="width:91%">Login</button>
                      <!--Or &nbsp;--> 
                      
                    </div>
                    <div class="gap10"></div>
                    <div class="fl" style="margin-left:20px;">
                      <input type="checkbox" name="data[User][remember_me]" id="chk_Rem" class="auto" value="1" style="cursor:pointer; border:none">
                      <span class="rem_posn" style="color:#666;">Remember me</span> </div>
                    <div class="fr or_cancel"><?php echo $this->Html->link('Quên mật khẩu',['controller' => 'Users', 'action' => 'forgotpassword', '_full' => true]);?></div>
                    <div class="cb"></div>
                  </div>
                  <div class="gap10"></div>
                  <div style="display:none;">
                    <input type="hidden" name="data[_Token][fields]" value="f21aacc1d70dcbd116bff90b1463ee603b2eb831%3A" id="TokenFields624148427">
                    <input type="hidden" name="data[_Token][unlocked]" value="" id="TokenUnlocked453037140">
                  </div>
                </div>
              </form>
            </div>
            <div class="cb"></div>
          </div>
        </div>
        <div class="cb"></div>
      </div>
    </div>
    <div class="cb"></div>
  </div>
</div>
