<?php
$this->layout = 'default';
?>

<h4><span><?php echo (!empty($manufacturers->manufacturers_name))?h($manufacturers->manufacturers_name):'Nhà sản xuất'?></span></h4>
<div id="stocks">
  <ul>
    <?php foreach ($manufacturers->products as $val): ?>
    <li><br />
      <?php echo $this->Html->image($val->products_image, ["alt" => $val->products_name,"height"=>'100px',"width"=>'100px',
	                                  'url' => ['controller' => 'Products', 'action' => 'view',$val->id]]);?>
      <div><?=$val->products_price?>
           <br />
	  <?php echo $this->Html->link( h($this->Text->truncate(h($val->products_name),22,array('ellipsis' => '...','exact' => false))),['controller' => 'Products', 'action' => 'view',$val->id]);?>
		             
        <br /><em><?=$val->products_model?></em> <!--<a href="#" class="btn-cart">Giỏ hàng</a> <a href="#" class="btn-wish">Yêu thích</a>--></div>
    </li>
    <?php endforeach; ?>
  </ul>  
</div>
<center>
</center>
