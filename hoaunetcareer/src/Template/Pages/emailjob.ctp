<?php
$this->layout = 'default';
?>
<div class="box_send_mail">
    <h1>Hãy Để Công Việc Mơ Ước Đến Với Bạn</h1>
    <div class="l"><b>&nbsp;</b></div>
    <div class="r">
        <?php echo  (is_array(TypeUser))?$this->Form->radio('type_user', TypeUser):"";?>         
        
    </div>
    <div class="cl"></div>    
    <div class="l"><b>Ngành nghề</b></div>
    <div class="r"><?php  echo $this->Form->control('career_id',['label'=>'','options' =>  $careers]);?></div>
    <div class="cl"></div>
    
    <div class="l"><b>Cấp bậc</b></div>
    <div class="r"><?php  echo $this->Form->control('level_id', ['label'=>'','options' => $levels]);?></div>
    <div class="cl"></div>
    
    <div class="l"><b>Email</b></div>
    <div class="r"><?php echo $this->Form->control('email', ['label'=>'','required' => true]);?></div>
    <div class="cl"></div>   
    <div id="total" class="dem">13571 <span>việc làm phù hợp</span></div>
    <div style="padding-left:165px;"><span id="RequiredFieldValidator13" class="valerror" style="color:Red;font-size:11px;display:none;">Địa chỉ email không hợp lệ!</span><span id="RequiredFieldValidator12" class="valerror" style="color:Red;font-size:11px;display:none;">Vui lòng nhập địa chỉ email!</span></div>
    <div class="btn"><?php echo $this->Html->image("btnGuiViec.gif", ["alt" => "tim viec, viec lam, tim viec lam, tuyen dung viet nam, tuyen dung, nguoi tim viec, viec tim nguoi",
				'url' => ['controller' => 'Users', 'action' => 'home']]);?></div>
</div>




