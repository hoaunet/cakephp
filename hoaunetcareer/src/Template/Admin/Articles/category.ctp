<?php
$this->layout = 'default';
?>

<div id="contents">
  <div id="checkout">
    <h4><span>Phụ nữ</span></h4>
    <table width="100%">
      <tbody>
        <?php foreach($articles as $val){?>
        <tr>
          <td><b><?=$val->title?></b>
            <p> <?=$val->body?> </p></td>
        </tr>
        <?php }?>
       
      </tbody>
    </table>
    </div>
</div>
