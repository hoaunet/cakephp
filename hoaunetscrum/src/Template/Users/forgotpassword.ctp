<div class="login_box">
  <div class="login_dialog" id="login_dialog">
    <table border="0" align="center" cellpadding="0" cellspacing="0">
      <tbody>
        <tr>
          <td><form action="/users/forgotpassword" onsubmit="return validpwd('email')" id="UserForgotpasswordForm" method="post" accept-charset="utf-8">
              <div style="display:none;">
                <input type="hidden" name="_method" value="POST">
                <input type="hidden" name="data[_Token][key]" value="221cb7416e08ccbcac4947f9c2fcb8ced20189ce" id="Token1372655122">
              </div>
              <table cellspacing="0" cellpadding="0" border="0" width="100%">
                <tbody>
                  <tr>
                    <td style="width:100%; vertical-align:middle"><h2>Forgot your password?</h2>
                      <div><?php echo $this->Html->image("login_header_shadow.png", [
    "alt" => "Đăng Nhập","class"=>"img-circle","height"=>'8px',"width"=>'350px']);?></div></td>
                  </tr>
                  <tr>
                    <td><h6>To reset your password, type the full email address you use to sign in to your Orangescrum Account.</h6></td>
                  </tr>
                  <tr>
                    <td align="center"><div id="error" style="margin:5px 0;color:#FF0000"></div></td>
                  </tr>
                  <tr>
                    <td><label class="lbl_ie">Email ID</label>
                      <input name="data[User][email]" size="60" id="email" maxlength="100" placeholder="Email ID" title="Email ID" class="textbox" type="text"></td>
                  </tr>
                  <tr>
                    <td align="left"><input type="hidden" name="hidtxt" value="" readonly>
                      <input type="hidden" id="user_id" name="user_id" value="" readonly>
                      <div id="fgpass">
                        <div class="fl" style="margin-left:20px; margin-top:10px;">
                          <button type="submit" value="Submit" name="submit_pwd" class="btn btn_blue" style="cursor:pointer">Submit</button>
                          <span class="or_cancel"> <?php echo $this->Html->link('Hủy bỏ',['controller' => 'Users', 'action' => 'login', '_full' => true]);?></span> </div>
                        <div class="cb"></div>
                      </div>
                      <div class="cb"></div>
                      <span id="fgload" style="display:none;padding-left:20px;margin-top:10px;"> <img src="http://newui.orangescrum.org/img/images/feed.gif?v=2" alt="Loading" title="Loading"> </span></td>
                  </tr>
                </tbody>
              </table>
              <div style="display:none;">
                <input type="hidden" name="data[_Token][fields]" value="a21607765d4eacfde395cae872aad2bf2aaf3fc3%3A" id="TokenFields499307141">
                <input type="hidden" name="data[_Token][unlocked]" value="" id="TokenUnlocked203495277">
              </div>
            </form></td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
