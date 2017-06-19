<?php
$this->layout = 'default';
?>
<?= $this->Form->create($company) ?>

<div class="ctl">
  <div class="rgt">Đăng ký tài khoản nhà tuyển dụng</div>
  <div class="rgi">
    <div>Vui lòng nhập đầy đủ thông tin</div>
    <div>Những trường có dấu <span class="sao">*</span> là bắt buộc phải nhập</div>
  </div>
  <div class="rggt"><b>Thông tin đăng nhập</b></div>
  <div class="rgl">Email đăng nhập (<span class="sao">*</span>):</div>
  <div class="rgr"><?php echo $this->Form->control('user.email',['label'=>'','type'=>'email']);?>    
    <div><span id="RequiredFieldValidator13" class="valerror" style="color:Red;font-size:11px;display:none;">Email sai định dạng!</span></div>
  </div>
  <div class="cl"></div>
  <div class="rgl">Mật khẩu (<span class="sao">*</span>):</div>
  <div class="rgr"><?php echo $this->Form->control('txtPass',['label'=>'','type'=>'password']);?></div>
  <div class="cl"></div>
  <div class="rgl">Xác nhận lại mật khẩu (<span class="sao">*</span>):</div>
  <div class="rgr"><?php echo $this->Form->control('txtRePass',['label'=>'','type'=>'password']);?>    
    <div><span id="comparePasswords" class="valerror" style="color:Red;font-size:11px;display:none;">Xác nhận mật khẩu sai!</span></div>
  </div>
  <div class="cl" style="height:15px;"></div>
  <div class="rggt"><b>Thông tin công ty</b></div>
  <div class="rgl">Tên công ty (<span class="sao">*</span>):</div>
  <div class="rgr"><?php echo $this->Form->control('name',['label'=>'']);?>   
  </div>
  <div class="cl"></div>
  <div class="rgl">Quy mô công ty (<span class="sao">*</span>):</div>
  <div class="rgr">
    <select name="drpQuyMo" id="drpQuyMo" class="textbox" style="width:265px;">
      <option value="--Chọn quy mô công ty--">--Chọn quy m&#244; c&#244;ng ty--</option>
      <option value="1">&#205;t hơn 10 nh&#226;n vi&#234;n</option>
      <option value="2">Từ 10 - 24 nh&#226;n vi&#234;n</option>
      <option value="3">Từ 25 - 99 nh&#226;n vi&#234;n</option>
      <option value="4">Từ 100 - 499 nh&#226;n vi&#234;n</option>
      <option value="5">Từ 500 - 999 nh&#226;n vi&#234;n</option>
      <option value="6">Tr&#234;n 1000 nh&#226;n vi&#234;n</option>
    </select>
  </div>
  <div class="cl"></div>
  <div class="rgl">Sơ lược về công ty (<span class="sao">*</span>):</div>
  <div class="rgr">
    <textarea name="txtMoTa" rows="5" cols="20" id="txtMoTa" class="textbox" style="width:400px;"></textarea>
  </div>
  <div class="cl"></div>
  <div class="rgl">Logo công ty:</div>
  <div class="rgr">
    <input type="file" name="FileLG" id="FileLG" />
    <div class="ifo">Định dạng ảnh .gif, .jpg, .png dung lượng <=300kb</div>
    <div style="padding-top:5px;"></div>
  </div>
  <div class="cl"></div>
  <div class="rgl">Giấy phép ĐK kinh doanh:</div>
  <div class="rgr">
    <input type="file" name="FileGP" id="FileGP" />
    <div class="ifo">Dạng file .doc .docx .xls .xlsx .jpg .gif .png .pdf, dung lượng <=500KB .</div>
    <div class="ifo">Nếu giấy phép kinh doanh của bạn có nhiều file, hãy ghép lại thành 1 file để up lên nhé.)</div>
    <div style="padding-top:5px;"></div>
  </div>
  <div class="cl"></div>
  <div class="rgl">Mã số thuế:</div>
  <div class="rgr"><?php echo $this->Form->control('masothue');?>   
  </div>
  <div class="cl"></div>
  <div class="rgl">Địa chỉ công ty (<span class="sao">*</span>):</div>
  <div class="rgr"><?php echo $this->Form->control('address');?>    
  </div>
  <div class="cl"></div>
  <div class="rgl">Tỉnh/thành phố (<span class="sao">*</span>):</div>
  <div class="rgr"><?php echo $this->Form->control('provinces', ['label'=>'','options' => $provinces]);?> 
    
  </div>
  <div class="cl"></div>
  <div class="rgl">Website:</div>
  <div class="rgr"><?php echo $this->Form->control('website');?>
  </div>
  <div class="cl" style="height:15px;"></div>
  <div class="rggt"><b>Thông tin liên hệ</b></div>
  <div class="rgl">Tên người liên hệ (<span class="sao">*</span>):</div>
  <div class="rgr">
    <input name="txtNameLH" type="text" id="txtNameLH" class="textbox" />
  </div>
  <div class="cl"></div>
  <div class="rgl">Địa chỉ liên hệ (<span class="sao">*</span>):</div>
  <div class="rgr">
    <input name="txtDiaChiLH" type="text" id="txtDiaChiLH" class="textbox" />
  </div>
  <div class="cl"></div>
  <div class="rgl">Số điện thoại liên hệ (<span class="sao">*</span>):</div>
  <div class="rgr">
    <input name="txtDienThoaiLH" type="text" id="txtDienThoaiLH" class="textbox" />
  </div>
  <div class="cl"></div>
  <div class="rgl">Email liên hệ (<span class="sao">*</span>):</div>
  <div class="rgr">
    <input name="txtEmailLH" type="text" id="txtEmailLH" class="textbox" />
  </div>
  <div class="cl"></div>  
  
  <div class="cl" style="height:15px;"></div>
  <div class="rggt"><b>Thỏa thuận sử dụng</b></div>
  <div class="tt"> Xin h&atilde;y đọc cẩn thận những điều khoản của Bản thỏa thuận sử dụng khi  truy cập v&agrave;o Website việc l&agrave;m tuyendungvietnam.com.vn. Việc bạn truy cập, sử  dụng trang web tuyendungvietnam.com.vn c&oacute; nghĩa l&agrave; bạn chấp nhận, đồng &yacute; bị  r&agrave;ng buộc với điều khoản, điều kiện của Bản thỏa thuận sử dụng n&agrave;y. <br />
    <br />
    1. Về t&agrave;i khoản sử dụng ( account ): <br />
    <br />
    Khi đăng k&yacute; t&agrave;i khoản, bạn cần phải cung cấp một số th&ocirc;ng tin quan  trọng như : t&ecirc;n tuổi, địa chỉ, e-mail, &hellip; Những th&ocirc;ng tin n&agrave;y sẽ được sử  dụng v&agrave;o mục đ&iacute;ch x&aacute;c nhận ch&iacute;nh x&aacute;c về bạn khi ph&aacute;t sinh c&aacute;c vấn đề như  qu&ecirc;n t&ecirc;n đăng nhập hoặc mật khẩu đăng nhập v.v. Những trường hợp điền  thiếu th&ocirc;ng tin tr&ecirc;n hoặc th&ocirc;ng tin sai sự thật sẽ kh&ocirc;ng được giải  quyết. <br />
    <br />
    2. Tuyệt đối kh&ocirc;ng sử dụng bất kỳ chương tr&igrave;nh, c&ocirc;ng cụ hay h&igrave;nh thức  n&agrave;o kh&aacute;c để can thiệp v&agrave;o hệ thống hay l&agrave;m thay đổi cấu tr&uacute;c dữ liệu.  Mọi vi phạm khi ph&aacute;t hiện sẽ bị xử l&yacute; theo ph&aacute;p luật. <br />
    <br />
    3. Nghi&ecirc;m cấm việc ph&aacute;t t&aacute;n, truyền b&aacute; hay cổ vũ cho bất kỳ hoạt động  n&agrave;o nhằm can thiệp, ph&aacute; hoại v&agrave; x&acirc;m nhập (hack, cheat&hellip;) v&agrave;o dữ liệu  cũng như hệ thống m&aacute;y chủ của tuyendungvietnam.com.vn. T&ugrave;y theo mức độ vi phạm,  th&agrave;nh vi&ecirc;n sẽ bị tước bỏ mọi quyền lợi hoặc bị truy tố trước ph&aacute;p luật. <br />
    <br />
    4. Nghi&ecirc;m cấm việc ph&aacute;t t&aacute;n c&aacute;c tranh ảnh, nội dung li&ecirc;n quan văn h&oacute;a  phẩm đồi trụy tr&aacute;i với thuần phong mỹ tục của d&acirc;n tộc Việt nam. T&ugrave;y  theo mức độ vi phạm, th&agrave;nh vi&ecirc;n sẽ bị tước bỏ mọi quyền lợi hoặc bị truy  tố trước ph&aacute;p luật. <br />
    <br />
    5. Khi ph&aacute;t hiện ra lỗi của hệ thống, xin vui l&ograve;ng th&ocirc;ng b&aacute;o cho đội  ngũ quản trị Hệ thống Tuyendungvietnam.com.vn theo địa chỉ tuyendungvietnam.com.vn@gmail.com <br />
    <br />
    6. Hệ thống tuyển dụng trực tuyến tuyendungvietnam.com.vn kh&ocirc;ng chấp nhận việc mua  b&aacute;n hoặc chuyển nhượng t&agrave;i khoản của tuyendungvietnam.com.vn bằng tiền thật hoặc  hiện kim ở trong lẫn ngo&agrave;i tuyendungvietnam.com.vn. <br />
    <br />
    7. Tuyệt đối nghi&ecirc;m cấm h&agrave;nh vi x&uacute;c phạm người kh&aacute;c dưới bất kỳ h&igrave;nh  thức n&agrave;o (nhạo b&aacute;ng, ch&ecirc; bai, kỳ thị t&ocirc;n gi&aacute;o, giới t&iacute;nh, sắc tộc&hellip;.). <br />
    <br />
    8. Tuyệt đối nghi&ecirc;m cấm mọi h&agrave;nh vi mạo nhận hay cố &yacute; l&agrave;m người kh&aacute;c  tưởng lầm m&igrave;nh l&agrave; một th&agrave;nh vi&ecirc;n kh&aacute;c của Hệ thống tuyển dụng trực tuyến Tuyendungvietnam.com.vn . T&ugrave;y theo mức độ vi phạm, th&agrave;nh vi&ecirc;n sẽ bị tước bỏ mọi quyền  lợi hoặc bị truy tố trước ph&aacute;p luật. <br />
    <br />
    9. Trong những trường hợp bất khả kh&aacute;ng như chập điện, hư hỏng phần  cứng, phần mềm, hoặc do thi&ecirc;n tai .v.v. người d&ugrave;ng phải chấp nhận những  thiệt hại nếu c&oacute;. <br />
    <br />
    10. Tuyendungvietnam.com.vn c&oacute; to&agrave;n quyền x&oacute;a, sửa chữa hay thay đổi c&aacute;c dữ liệu,  th&ocirc;ng tin người d&ugrave;ng trong c&aacute;c trường hợp người đ&oacute; vi phạm những qui  định kể tr&ecirc;n m&agrave; kh&ocirc;ng cần sự đồng &yacute; . <br />
    <br />
    11. Tuyệt đối nghi&ecirc;m cấm mọi h&agrave;nh vi tuy&ecirc;n truyền, chống ph&aacute; v&agrave; xuy&ecirc;n  tạc ch&iacute;nh quyền. Trường hợp bị ph&aacute;t hiện, kh&ocirc;ng những bị x&oacute;a bỏ t&agrave;i  khoản m&agrave; ch&uacute;ng t&ocirc;i sẽ cung cấp th&ocirc;ng tin của người đ&oacute; cho c&aacute;c cơ quan  ph&aacute;p luật. <br />
    <br />
    12. Tuyệt đối kh&ocirc;ng b&agrave;n luận về Ch&iacute;nh trị . <br />
    <br />
    13. Kh&ocirc;ng c&oacute; những h&agrave;nh vi, th&aacute;i độ l&agrave;m tổn hại đến uy t&iacute;n của Hệ  thống tuyển dụng trực tuyến Tuyendungvietnam.com.vn dưới bất kỳ h&igrave;nh thức n&agrave;o, phương  thức n&agrave;o. Mọi vi phạm sẽ bị bị xử l&iacute; th&ocirc;ng qua h&igrave;nh thức tước bỏ mọi  quyền lợi hoặc truy tố trước ph&aacute;p luật. <br />
    <br />
    14. Tuyendungvietnam.com.vn ho&agrave;n to&agrave;n kh&ocirc;ng chịu tr&aacute;ch nhiệm về mọi giao dịch thỏa  thuận tr&ecirc;n Hệ thống. Ch&uacute;ng t&ocirc;i sẽ kh&ocirc;ng chịu tr&aacute;ch nhiệm về bất kỳ sự  mất m&aacute;t, thiệt hại hay khiếu nại n&agrave;o li&ecirc;n quan đến việc thỏa thuận, trao  đổi th&ocirc;ng tin giữa c&aacute;c bạn. <br />
    <br />
    15. Mọi th&ocirc;ng tin c&aacute; nh&acirc;n m&agrave; bạn kh&ocirc;ng c&ocirc;ng khai sẽ được ch&uacute;ng t&ocirc;i  bảo mật, kh&ocirc;ng tiết lộ ra ngo&agrave;i. Ch&uacute;ng t&ocirc;i kh&ocirc;ng b&aacute;n hay trao đổi những  th&ocirc;ng tin n&agrave;y với bất kỳ một b&ecirc;n thứ ba n&agrave;o kh&aacute;c. <br />
    <br />
    16. Nghi&ecirc;m cấm tổ chức c&aacute;c h&igrave;nh thức c&aacute; cược, cờ bạc c&oacute; d&iacute;nh d&aacute;ng đến tiền. <br />
    <br />
    17. Những th&ocirc;ng tin kh&ocirc;ng muốn c&ocirc;ng khai của th&agrave;nh vi&ecirc;n sẽ được bảo  mật nhưng trong trường hợp cơ quan ph&aacute;p luật y&ecirc;u cầu, ch&uacute;ng t&ocirc;i buộc  phải cung cấp những th&ocirc;ng tin n&agrave;y cho c&aacute;c cơ quan ph&aacute;p luật. <br />
    <br />
    18. Khi ph&aacute;t hiện những vi phạm đ&atilde; n&ecirc;u ở c&aacute;c mục tr&ecirc;n,t&ugrave;y theo mức độ  nghi&ecirc;m trọng của hậu quả g&acirc;y ra, Tuyendungvietnam.com.vn c&oacute; quyền cung cấp th&ocirc;ng tin  c&aacute; nh&acirc;n của đối tượng đ&oacute; cho c&aacute;c cơ quan thẩm quyền để truy tố trước  ph&aacute;p luật . <br />
    <br />
    19. Tuyendungvietnam.com.vn c&oacute; thể thay đổi, bổ sung hoặc sửa chữa thỏa thuận n&agrave;y  bất cứ l&uacute;c n&agrave;o v&agrave; sẽ c&ocirc;ng bố r&otilde; tr&ecirc;n trang chủ của website Tuyendungvietnam.com.vn.<br />
    <br type="_moz" />
  </div>
  <div class="ck">
    <input id="chkTT" type="checkbox" name="chkTT" />
    <label for="chkTT">Tôi đã đọc và đồng ý với thỏa thuận sử dụng</label>
  </div>
  <div class="invalid"> <span id="RequiredFieldValidator12" class="valerror" style="color:Red;font-size:11px;display:none;">Vui lòng nhập email đăng nhập!</span> <span id="RequiredFieldValidator1" class="valerror" style="color:Red;font-size:11px;display:none;">Vui lòng nhập mật khẩu!</span> <span id="chkpass2" class="valerror" style="color:Red;font-size:11px;display:none;">Vui lòng xác nhận lại mật khẩu!</span> <span id="RequiredFieldValidator4" class="valerror" style="color:Red;font-size:11px;display:none;">Vui lòng nhập tên công ty!</span> <span id="RequiredFieldValidator2" class="valerror" style="color:Red;font-size:11px;display:none;">Vui lòng chọn quy mô công ty!</span> <span id="RequiredFieldValidator3" class="valerror" style="color:Red;font-size:11px;display:none;">Vui lòng nhập sơ lược công ty!</span> <span id="RequiredFieldValidator10" class="valerror" style="color:Red;font-size:11px;display:none;">Vui lòng nhập địa chỉ công ty!</span> <span id="RequiredFieldValidator11" class="valerror" style="color:Red;font-size:11px;display:none;">Vui lòng chọn tỉnh, thành phố!</span> <span id="RequiredFieldValidator7" class="valerror" style="color:Red;font-size:11px;display:none;">Vui lòng nhập tên người liên hệ!</span> <span id="RequiredFieldValidator5" class="valerror" style="color:Red;font-size:11px;display:none;">Vui lòng nhập địa chỉ liên hệ!</span> <span id="RequiredFieldValidator6" class="valerror" style="color:Red;font-size:11px;display:none;">Vui lòng nhập số điện thoại liên hệ!</span> <span id="RequiredFieldValidator8" class="valerror" style="color:Red;font-size:11px;display:none;">Vui lòng nhập email liên hệ</span> <span id="RequiredFieldValidator9" class="valerror" style="color:Red;font-size:11px;display:none;">Vui lòng nhập mã bảo vệ!</span> </div>
  <div class="bt">
    <input type="submit" name="btnDK" value="Đăng ký ngay" onclick="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;btnDK&quot;, &quot;&quot;, true, &quot;&quot;, &quot;&quot;, false, false))" id="btnDK" />
    <input type="reset" class="button" name="cmdReset" value="Làm lại"/>
    <?= $this->Form->Button('Làm lại', ['type' => 'reset','class'=>"button"]) ?>
  </div>
</div>
<?= $this->Form->end() ?>
<div class="ctr">
   <?= $this->Form->create() ?>

  <div class="bgr"><strong><?php  echo $this->Html->image('search.png',['style'=>'vertical-align:middle;']);?>Tìm nhanh ứng viên</strong></div>
  <ul class="vipr">
    <li class="sr">
      <div class="l">Ngành nghề</div>
      <div class="r"><?php echo $this->Form->control('careers', ['label'=>'','options' => $careers]);?>     
      </div>
      <div class="cl"></div>
      <div class="l">Học vấn</div>
      <div class="r">
        <select name="ctlr$drpBC" id="ctlr_drpBC" class="textbox" style="width:140px;">
          <option value="--Trình độ học vấn--">--Tr&#236;nh độ học vấn--</option>
          <option value="1">Tr&#234;n đại học</option>
          <option value="2">Đại học</option>
          <option value="3">Cao đẳng</option>
          <option value="4">Trung cấp</option>
          <option value="5">Trung học</option>
          <option value="6">Lao Động phổ Th&#244;ng</option>
          <option value="7">Kh&#244;ng y&#234;u cầu</option>
        </select>
      </div>
      <div class="cl"></div>
      <div class="l">Địa điểm</div>
      <div class="r"><?php echo $this->Form->control('provinces', ['label'=>'','options' => $provinces]);?>        
      </div>
      <div class="cl"></div>
      <div class="l">Mức lương</div>
      <div class="r"><?php echo $this->Form->control('salaries', ['label'=>'','options' => $salaries]);?>        
      </div>
      <div class="cl"></div>
      <div class="l">Kinh nghiệm</div>
      <div class="r">
        <select name="ctlr$drpKN" id="ctlr_drpKN" class="textbox" style="width:140px;">
          <option value="--Chọn số năm kinh nghiệm--">--Chọn số năm kinh nghiệm--</option>
          <option value="1">Chưa c&#243; kinh nghiệm</option>
          <option value="14">Sinh Vi&#234;n Đại Học</option>
          <option value="15">Lao Động Phổ Th&#244;ng</option>
          <option value="2">Dưới 1 năm</option>
          <option value="3">1 năm</option>
          <option value="4">2 năm</option>
          <option value="5">3 năm</option>
          <option value="6">4 năm</option>
          <option value="7">5 năm</option>
          <option value="8">6 năm</option>
          <option value="9">7 năm</option>
          <option value="10">8 năm</option>
          <option value="11">9 năm </option>
          <option value="12">10 năm</option>
          <option value="16">11 năm</option>
          <option value="17">12 năm</option>
          <option value="18">13 năm</option>
          <option value="19">14 năm</option>
          <option value="20">15 năm</option>
          <option value="21">16 năm</option>

          <option value="22">17 năm</option>
          <option value="23">18 năm</option>
          <option value="24">19 năm</option>
          <option value="25">20 năm</option>
          <option value="26">Hơn 20 năm</option>
        </select>
      </div>
      <div class="cl"></div>
      <div class="l">Ngoại ngữ</div>
      <div class="r"><?php echo $this->Form->control('languages', ['label'=>'','options' => $languages]);?>        
        
      </div>
      <div class="cl"></div>
      <div class="l" style="text-align:right;">
        
        <input type="image" name="ctlr$btnSr" id="ctlr_btnSr" class="isr" src="/images/bg/btnTimkiem.gif" onclick="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;ctlr$btnSr&quot;, &quot;&quot;, true, &quot;&quot;, &quot;&quot;, false, false))" style="border-width:0px;" />
      </div>
      <div class="r">
        <input type="image" name="ctlr$btnHuy" id="ctlr_btnHuy" src="/images/bg/btnHuyTimkiem.gif" onclick="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;ctlr$btnHuy&quot;, &quot;&quot;, true, &quot;&quot;, &quot;&quot;, false, false))" style="border-width:0px;" />
      </div>
      <div class="cl"></div>
    </li>
  </ul>
  <?= $this->Form->end() ?>

  <div class="avr"></div>
  <div class="bgr mtop"><strong>Video tuyển dụng</strong></div>
  <div class="vipr">
    
  </div>
  <div class="bgr mtop"><strong>Tìm ứng viên theo tính chất</strong></div>
  <ul class="vipr">
    <li class="search"> <a href="/nguoi-tim-viec/tim-kiem-viec-lam-nhanh-c0.html?key=&n=Tất cả&d=0&l=9">Việc làm lương từ 30 triệu trở lên</a> <a href="/nguoi-tim-viec/tim-kiem-viec-lam-nhanh-c0.html?key=&n=Tất cả&d=0&l=8">Việc làm lương từ 20 - 30 triệu</a> <a href="/nguoi-tim-viec/tim-kiem-viec-lam-nhanh-c0.html?key=&n=Tất cả&d=0&l=7">Việc làm lương từ 15 -20 triệu</a> <a href="/nguoi-tim-viec/tim-kiem-viec-lam-nhanh-c0.html?key=&n=Tất cả&d=0&l=6">Việc làm lương từ 10 - 15 triệu</a> <a href="/nguoi-tim-viec/tim-kiem-viec-lam-nhanh-c0.html?key=quan ly&n=Tất cả&d=0&l=0">Việc làm cấp quản lý</a> <a href="/nguoi-tim-viec/lam-ban-thoi-gian-c103.html">Việc làm bán thời gian</a> <a href="/nguoi-tim-viec/thuc-tap-c107.html">Việc làm cho sinh viên thực tập, mới tốt nghiệp</a> </li>
  </ul>
  <div class="bgr mtop"><strong>Cẩm nang tuyển dụng</strong></div>
  <div class="vipr">
    <div id="slider1_container" style="position: relative; top: 0px; left: 0px; width:255px; height:360px;">
      <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width:255px; height:360px; overflow: hidden;">
        <div>
          <div class='list_newr'><a class='img' href='/huong-nghiep/cam-nang-tuyen-dung-viec-lam-voi-nguoi-nhat-nid259.html'><img src='/images/news/259.jpg' alt='Cẩm nang tuyển dụng việc làm với người Nhật' /></a><strong><a href='/huong-nghiep/cam-nang-tuyen-dung-viec-lam-voi-nguoi-nhat-nid259.html'>Cẩm nang tuyển dụng việc làm với người Nhật</a></strong>
            <p>Khi một người Nhật được một công ty Nhật tuyển dụng, họ có thể sẽ không nhận được một bản miêu tả công việc chính xác; nhân viên mới có thể thậm chí không biết lương và phúc lợi của họ sẽ thế nào, một tình thế mà không mấy người phương Tây cảm thấy thoải mái. Người phương Tây muốn lời hứa phải được nói rõ ràng. Người Nhật đặt lòng tin nhiều hơn vào những vấn đề khác - uy tín của công ty hay người đã tiến cử ứng viên.</p>
          </div>
          <div class='list_newr'><a class='img' href='/huong-nghiep/ngan-hang-tmcp-quoc-te-viet-nam-vib-tuyen-dung-giao-dich-vien-tai-hai-phong-30-11-2015-nid257.html'><img src='/images/news/257.jpg' alt='Ngân hàng TMCP Quốc Tế Việt Nam (VIB) tuyển dụng Giao dịch viên tại Hải Phòng 30.11.2015' /></a><strong><a href='/huong-nghiep/ngan-hang-tmcp-quoc-te-viet-nam-vib-tuyen-dung-giao-dich-vien-tai-hai-phong-30-11-2015-nid257.html'>Ngân hàng TMCP Quốc Tế Việt Nam (VIB) tuyển dụng Giao dịch viên tại Hải Phòng 30.11.2015</a></strong>
            <p>- Tốt nghiệp đại học chuyên ngành ngân hàng, tài chính kế toán hoặc các trường Kinh tế; - Hình thức ưa nhìn, tự tin, nhiệt huyết và chu đáo cẩn thận trong cung cấp dịch vụ giao dịch với khách hàng; - Nữ, 1.60m trở lên; - Không dị tật, không nói ngọng, nói lắp;</p>
          </div>
          <div class='list_newr'><a class='img' href='/huong-nghiep/6-cau-hoi-bat-bai-tinh-cach-ung-vien-nid208.html'><img src='/images/news/208.jpg' alt='6 câu hỏi "bắt bài" tính cách ứng viên' /></a><strong><a href='/huong-nghiep/6-cau-hoi-bat-bai-tinh-cach-ung-vien-nid208.html'>6 câu hỏi "bắt bài" tính cách ứng viên</a></strong>
            <p>Điều nhà tuyển dụng muốn biết là động lực khiến bạn làm việc chăm chỉ, đặc biệt nếu bạn là người tự tin vào khả năng của mình. Họ sẽ không phán xét tham vọng của một người bởi điều đó thuộc về quan điểm cá nhân. Tuy nhiên, bạn cũng cần một chút khéo léo để dẫn dắt câu chuyện, tránh trường hợp khiến mọi người nghĩ bạn là người khắt khe hoặc tự tin thái quá.</p>
          </div>
          <div class='list_newr'><a class='img' href='/huong-nghiep/cach-nang-cao-hieu-qua-tuyen-dung-nid207.html'><img src='/images/news/207.jpg' alt='Cách nâng cao hiệu quả tuyển dụng' /></a><strong><a href='/huong-nghiep/cach-nang-cao-hieu-qua-tuyen-dung-nid207.html'>Cách nâng cao hiệu quả tuyển dụng</a></strong>
            <p>Tìm được một người tài giỏi, phù hợp với yêu cầu của công ty không hề dễ dàng. Phải phối hợp việc phân tích thông tin ứng viên và sự chuẩn bị chu đáo cho các vòng phỏng vấn để quyết định cuối cùng được rõ ràng và chính xác. Đó là những nguyên tắc cơ bản để giành phần thắng trong cuộc chiến thu hút nhân tài trong thời đại ngày nay.</p>
          </div>
        </div>
        <div>
          <div class='list_newr'><a class='img' href='/huong-nghiep/ly-giai-cac-mo-hinh-quan-ly-nhan-luc-nid195.html'><img src='/images/news/195.jpg' alt='Lý giải các mô hình quản lý nhân lực' /></a><strong><a href='/huong-nghiep/ly-giai-cac-mo-hinh-quan-ly-nhan-luc-nid195.html'>Lý giải các mô hình quản lý nhân lực</a></strong>
            <p>Tất cả những người làm công tác quản lý đều có mối quan tâm đặc biệt cũng như có xu hướng đưa ra những phán đoán về tính cách của nhân viên. Thông qua những phán đoán này mà người quản lý đưa ra sách lược quản lý riêng cho từng mẫu người. Vậy phương pháp nghiên cứu để đưa ra những phán đoán như thế nào?</p>
          </div>
          <div class='list_newr'><a class='img' href='/huong-nghiep/tao-dieu-kien-cho-su-sang-tao-cua-nhan-vien-nid186.html'><img src='/images/news/186.jpg' alt='Tạo điều kiện cho sự sáng tạo của nhân viên' /></a><strong><a href='/huong-nghiep/tao-dieu-kien-cho-su-sang-tao-cua-nhan-vien-nid186.html'>Tạo điều kiện cho sự sáng tạo của nhân viên</a></strong>
            <p>Hầu hết các công ty đều đưa ra câu khẩu hiệu "Đổi mới hay là chết" như là phương châm lao động và sáng tạo cho nhân viên và tổ chức. Thế nhưng thực tế, không ít các nhà quản lý chọn vế thứ 2 cho công ty mình. Tại sao vậy?</p>
          </div>
          <div class='list_newr'><a class='img' href='/huong-nghiep/10-bi-mat-cua-su-thanh-cong-ban-biet-chua-nid185.html'><img src='/images/news/185.jpg' alt='10 bí mật của sự thành công , bạn biết chưa?' /></a><strong><a href='/huong-nghiep/10-bi-mat-cua-su-thanh-cong-ban-biet-chua-nid185.html'>10 bí mật của sự thành công , bạn biết chưa?</a></strong>
            <p>Đã có rất nhiều những nghiên cứu, bài viết và giảng dạy về sự thành công. Một điều hoàn toàn chắc chắn: thành công của người này khác với thành công của người khác bởi vì mỗi người có một quan niệm khác nhau về thành công.</p>
          </div>
          <div class='list_newr'><a class='img' href='/huong-nghiep/meo-nho-cho-ceo-nid184.html'><img src='/images/news/184.jpg' alt='Mẹo nhỏ cho CEO' /></a><strong><a href='/huong-nghiep/meo-nho-cho-ceo-nid184.html'>Mẹo nhỏ cho CEO</a></strong>
            <p>Nếu bạn đang phân vân điều gì làm nên một nhà lãnh đạo vĩ đại, chứ không chỉ dừng lại là nhà lãnh đạo xuất sắc, thì đây là một số mẹo có thể giúp bạn. Cuộc hành trình này của bạn sẽ phụ thuộc vào việc bạn sẵn sàng như thế nào.</p>
          </div>
        </div>
        <div>
          <div class='list_newr'><a class='img' href='/huong-nghiep/ly-do-nhan-vien-cua-ban-xin-nghi-viec-nid183.html'><img src='/images/news/183.jpg' alt='Lý do nhân viên của bạn xin nghỉ việc?' /></a><strong><a href='/huong-nghiep/ly-do-nhan-vien-cua-ban-xin-nghi-viec-nid183.html'>Lý do nhân viên của bạn xin nghỉ việc?</a></strong>
            <p>Là một nhà quản lý, bạn có bao giờ tự hỏi, tại sao cứ thời gian cuối năm, bạn lại nhận được nhiều lá đơn xin nghỉ việc của nhân viên? Và đầu năm mới, bạn lại đau đầu đi tìm nhân viên mới?</p>
          </div>
          <div class='list_newr'><a class='img' href='/huong-nghiep/dieu-gi-lam-nen-tam-hon-cua-mot-lanh-dao-nid182.html'><img src='/images/news/182.jpg' alt='Điều gì làm nên tâm hồn của một lãnh đạo?' /></a><strong><a href='/huong-nghiep/dieu-gi-lam-nen-tam-hon-cua-mot-lanh-dao-nid182.html'>Điều gì làm nên tâm hồn của một lãnh đạo?</a></strong>
            <p>Đó là sự khác biệt, niềm đam mê, lạc quan, khả năng thích ứng, khả năng lãnh đạo, tham vọng.</p>
          </div>
          <div class='list_newr'><a class='img' href='/huong-nghiep/10-bi-quyet-thanh-cong-sep-nen-noi-nhung-se-khong-bao-gio-noi-nid181.html'><img src='/images/news/181.jpg' alt='10 bí quyết thành công sếp nên nói nhưng sẽ không bao giờ nói ?' /></a><strong><a href='/huong-nghiep/10-bi-quyet-thanh-cong-sep-nen-noi-nhung-se-khong-bao-gio-noi-nid181.html'>10 bí quyết thành công sếp nên nói nhưng sẽ không bao giờ nói ?</a></strong>
            <p>Cathie Black, chủ bút tạp chí Hearst, đã chia sẻ cùng bạn đọc trẻ của bà những bí quyết thành công trong công việc. Mối quan hệ sếp-nhân viên luôn là mối bận tâm nhất của những người "sống" trong môi trường công việc.</p>
          </div>
          <div class='list_newr'><a class='img' href='/huong-nghiep/lam-the-nao-de-tro-thanh-nha-quan-ly-cua-nam-nid180.html'><img src='/images/news/180.jpg' alt='Làm thế nào để trở thành "nhà quản lý của năm"' /></a><strong><a href='/huong-nghiep/lam-the-nao-de-tro-thanh-nha-quan-ly-cua-nam-nid180.html'>Làm thế nào để trở thành "nhà quản lý của năm"</a></strong>
            <p>Bạn cần nghiêm túc với nhân viên, nhưng bạn lại không muốn bị xem là thiếu thân thiện. Bạn muốn chứng tỏ là có quyền lực, nhưng bạn cũng muốn để nhân viên có thể tự do đưa ra ý tưởng. Vậy hãy làm theo những gợi ý sau, bạn sẽ có cơ hội trở thành "nhà quản lý của năm".</p>
          </div>
        </div>
        <div>
          <div class='list_newr'><a class='img' href='/huong-nghiep/kinh-nghiem-cua-nha-quan-ly-ngan-sach-bac-nhat-nid179.html'><img src='/images/news/179.jpg' alt='Kinh nghiệm của nhà quản lý ngân sách bậc nhất' /></a><strong><a href='/huong-nghiep/kinh-nghiem-cua-nha-quan-ly-ngan-sach-bac-nhat-nid179.html'>Kinh nghiệm của nhà quản lý ngân sách bậc nhất</a></strong>
            <p>Peter Lynch được mệnh danh là nhà quản lý tiền số một trên thế giới. Ông đã phát triển Quỹ Magellan Fund từ 20 triệu đô la năm 1977 lên đến mức 14 tỉ đô la năm 1990.</p>
          </div>
          <div class='list_newr'><a class='img' href='/huong-nghiep/doanh-nghiep-vn-quan-ly-va-su-dung-nhan-tai-thieu-dinh-huong-ro-rang-va-on-dinh-nid178.html'><img src='/images/news/178.jpg' alt='Doanh nghiệp VN quản lý và sử dụng nhân tài: Thiếu định hướng rõ ràng và ổn định' /></a><strong><a href='/huong-nghiep/doanh-nghiep-vn-quan-ly-va-su-dung-nhan-tai-thieu-dinh-huong-ro-rang-va-on-dinh-nid178.html'>Doanh nghiệp VN quản lý và sử dụng nhân tài: Thiếu định hướng rõ ràng và ổn định</a></strong>
            <p>Thiếu hụt nguồn nhân lực chất lượng cao đang là vấn đề nan giải đối với các DN VN cũng như nhiều nước trên thế giới. Làm thế nào để tuyển dụng và giữ chân người giỏi là nội dung cuộc hội thảo "Chiến tranh nhân tài" (17-18.4) do Phòng Thương mại và Công nghiệp VN (VCCI) phối hợp với Tập đoàn SMR của Malaysia, Cty Đào tạo và Tư vấn quốc tế AITC tổ chức.</p>
          </div>
          <div class='list_newr'><a class='img' href='/huong-nghiep/tao-dong-luc-cho-hoat-dong-lam-viec-nhom-nid177.html'><img src='/images/news/177.jpg' alt='Tạo động lực cho hoạt động làm việc nhóm' /></a><strong><a href='/huong-nghiep/tao-dong-luc-cho-hoat-dong-lam-viec-nhom-nid177.html'>Tạo động lực cho hoạt động làm việc nhóm</a></strong>
            <p>Đa số những nhà quản lý đều nhầm lẫn rằng tiền là động lực chủ yếu tác động đến nhân viên của họ. Mặt khác, theo những khảo sát bởi nhiều công ty khác nhau, tiền được xếp vào hàng thứ năm hoặc bị hạ thấp bởi đa số ý kiến của nhân viên. Vì vậy nếu tiền không phải là thứ tốt nhất để thúc đẩy nhóm làm việc tốt, vậy là thứ gì?</p>
          </div>
          <div class='list_newr'><a class='img' href='/huong-nghiep/bai-hoc-nao-tu-su-bien-mat-cua-cac-ty-phu-my-nid176.html'><img src='/images/news/176.jpg' alt='Bài học nào từ sự biến mất của các tỷ phú Mỹ' /></a><strong><a href='/huong-nghiep/bai-hoc-nao-tu-su-bien-mat-cua-cac-ty-phu-my-nid176.html'>Bài học nào từ sự biến mất của các tỷ phú Mỹ</a></strong>
            <p>Trong thập kỷ trước, danh sách những tỷ phú mà Tạp chí Forbes liệt kê hàng năm đã bị “Mỹ hóa” như chiếc bánh táo vậy. Bill Gates và Warrent Buffett đã giành nhau vị trí đứng đầu, tiếp sau đó là người sáng lập Tập đoàn Dell (mã chứng khoán niêm yết trên Nasdaq: DELL) Michael Dell, người sáng lập Oracle (ORCL - sàn Nasdaq) Larry Ellison, Chủ tịch Tập đoàn Las Vegas Sands (LVS - sàn NYSE) Sheldon Adelson.</p>
          </div>
        </div>
        <div>
          <div class='list_newr'><a class='img' href='/huong-nghiep/2-loi-ceo-tre-phai-tranh-nid174.html'><img src='/images/news/174.jpg' alt='2 lỗi CEO Trẻ phải tránh !' /></a><strong><a href='/huong-nghiep/2-loi-ceo-tre-phai-tranh-nid174.html'>2 lỗi CEO Trẻ phải tránh !</a></strong>
            <p>Việc thay đổi vai trò luôn chứa những cái bẫy khiến cho nhiều sếp mới lúng túng, thậm chí là mắc lỗi, nhất là với những sếp lần đầu được bổ nhiệm. Sự thay đổi này đòi hỏi ở bạn một sự điều chỉnh về mặt tư duy cho phù hợp với vai trò hiện tại. Điều này có thể nhận ra dễ dàng hơn khi phân tích cụ thể tính chất công việc của bạn trước và sau khi thăng chức.</p>
          </div>
          <div class='list_newr'><a class='img' href='/huong-nghiep/1-phut-huong-dan-quan-ly-tang-truong-dai-han-nid173.html'><img src='/images/news/173.jpg' alt='1 phút hướng dẫn quản lý tăng trưởng dài hạn' /></a><strong><a href='/huong-nghiep/1-phut-huong-dan-quan-ly-tang-truong-dai-han-nid173.html'>1 phút hướng dẫn quản lý tăng trưởng dài hạn</a></strong>
            <p>Ghi nhớ tất cả các kế hoạch và nghiên cứu khởi động công việc kinh doanh nho nhỏ của bạn ư? Hy vọng rằng cố gắng đó đã mang lại những kết quả ít nhất cũng đáp ứng sự trông đợi của bạn bấy lâu. Bây giờ bạn cần tích luỹ quá trình đầu tư nghiên cứu và phân tích đó để tiếp tục những bước thành công ngắn hạn trong tương lai.</p>
          </div>
          <div class='list_newr'><a class='img' href='/huong-nghiep/13-nguyen-tac-danh-cho-nha-lanh-dao-nid172.html'><img src='/images/news/172.jpg' alt='13 nguyên tắc dành cho nhà lãnh đạo' /></a><strong><a href='/huong-nghiep/13-nguyen-tac-danh-cho-nha-lanh-dao-nid172.html'>13 nguyên tắc dành cho nhà lãnh đạo</a></strong>
            <p>Dưới đây là 13 "nguyên tắc vàng" cho các nhà lãnh đạo hiện đại qua 13 câu nói đáng nhớ của những nhà lãnh đạo, diễn giả tài ba:</p>
          </div>
          <div class='list_newr'><a class='img' href='/huong-nghiep/ban-biet-gi-ve-ban-mo-ta-cong-viec-thuc-su-cua-mot-nguoi-lanh-dao-nid171.html'><img src='/images/news/171.jpg' alt='Bạn biết gì về Bản mô tả công việc thực sự của một người lãnh đạo?' /></a><strong><a href='/huong-nghiep/ban-biet-gi-ve-ban-mo-ta-cong-viec-thuc-su-cua-mot-nguoi-lanh-dao-nid171.html'>Bạn biết gì về Bản mô tả công việc thực sự của một người lãnh đạo?</a></strong>
            <p>Jack Welch: trụ cột vàng trong giới quản lý hiện nay, ông có 17 năm thành công xuất sắc tại công ty General Electric - một công ty nhận được sự hoan nghênh nhất ở Mỹ - và đã rút lui vào năm 2001. Welch đưa ra một bộ khung gồm 4 yếu tố để tạo nên một nhà lãnh đạo vĩ đại: năng lượng tích cực, khả năng tiếp sinh lực cho mọi người, khả năng rèn luyện bản thân để tập trung sự dũng cảm khi đưa ra các quyết định khó khăn, và khả năng thực thi.</p>
          </div>
        </div>
        <div>
          <div class='list_newr'><a class='img' href='/huong-nghiep/lam-sao-de-duoc-nhan-vien-tin-cay-nid170.html'><img src='/images/news/170.jpg' alt='Làm sao để được nhân viên tin cậy ?' /></a><strong><a href='/huong-nghiep/lam-sao-de-duoc-nhan-vien-tin-cay-nid170.html'>Làm sao để được nhân viên tin cậy ?</a></strong>
            <p>Ai cũng muốn được tin cậy. Làm sếp lại càng muốn được nhân viên tin, bởi có tin tưởng, thì họ mới làm tốt công việc của mình và gắn bó lâu dài với tổ chức. Nhưng làm thế nào để được họ tin?</p>
          </div>
          <div class='list_newr'><a class='img' href='/huong-nghiep/canh-tranh-nhan-su-bang-moi-truong-lam-viec-nid169.html'><img src='/images/news/169.jpg' alt='Cạnh tranh nhân sự bằng môi trường làm việc' /></a><strong><a href='/huong-nghiep/canh-tranh-nhan-su-bang-moi-truong-lam-viec-nid169.html'>Cạnh tranh nhân sự bằng môi trường làm việc</a></strong>
            <p>Sự phát triển bền vững của doanh nghiệp (DN) dựa trên nền tảng con người. Theo ông Cao Tiến Vị, Tổng Giám đốc Công ty Cổ phần Giấy Sài Gòn, trong tình hình cạnh tranh nhân lực như hiện nay, nếu không tạo dựng được môi trường làm việc thân thiện, DN sẽ khó giữ được chân người tài.</p>
          </div>
          <div class='list_newr'><a class='img' href='/huong-nghiep/ceo-tre-thuong-gap-4-loi-sau-nid168.html'><img src='/images/news/168.jpg' alt='CEO trẻ thường gặp 4 lỗi sau' /></a><strong><a href='/huong-nghiep/ceo-tre-thuong-gap-4-loi-sau-nid168.html'>CEO trẻ thường gặp 4 lỗi sau</a></strong>
            <p>Năng động, có năng lực, nhiều nhiệt huyết; tuy nhiên nhiều vị sếp trẻ do chưa quen với vị trí quản lý, thường mắc phải 1 số nhược điểm sau.</p>
          </div>
          <div class='list_newr'><a class='img' href='/huong-nghiep/nhung-bai-hoc-de-doi-tu-ceo-mat-viec-nid167.html'><img src='/images/news/167.jpg' alt='Những bài học để đời từ CEO mất việc' /></a><strong><a href='/huong-nghiep/nhung-bai-hoc-de-doi-tu-ceo-mat-viec-nid167.html'>Những bài học để đời từ CEO mất việc</a></strong>
            <p>Trong mấy tháng qua, cuộc khủng hoảng trên thị trường cho vay tín chấp “dưới chuẩn” và sự đóng băng của thị trường địa ốc Mỹ đã khiến nền kinh tế nước này phải hứng chịu hàng loạt tác động tiêu cực.</p>
          </div>
        </div>
      </div>
      <span u="arrowleft" class="jssora12l" style="width: 20px; height:24px; bottom:-16px; left: 105px; border:1px #e1e1e1 solid;"></span> <span u="arrowright" class="jssora12r" style="width:20px; height:24px; bottom:-16px; right: 105px; border:1px #e1e1e1 solid; "></span> </div>
  </div>
</div>
<div class="cl"></div>

