<?php
$this->layout = 'default';//print_r($products);
?>

<h4><span>Sản phẩm</span></h4>
<div id="stocks">
  <ul>
    <?php foreach ($products as $val): ?>
    <li><br />
      <?php echo $this->Html->image($val->products_image, [
			    "alt" => $val->products_name,"height"=>'100px',"width"=>'100px','url' => ['controller' => 'Products', 'action' => 'display',$val->products_id]
]);?>
      <div><?=$val->products_price?>
           <br /><?=$this->Text->truncate(h($val->products_name),22,array('ellipsis' => '...','exact' => false));?>
           <br />Thể loại :<?php echo $this->Html->link( h($val->productcategory->categories_name),['controller' => 'Productcategories', 'action' => 'view', $val->productcategory->id]);?>
           <br />Nhà sản xuất :<?php echo $this->Html->link( h($val->manufacturer->manufacturers_name),['controller' => 'Manufacturers', 'action' => 'view', $val->manufacturer->id]);?>
        <br /><em><?=$val->products_model?></em> <!--<a href="#" class="btn-cart">Giỏ hàng</a> <a href="#" class="btn-wish">Yêu thích</a>--></div>
    </li>
    <?php endforeach; ?>
  </ul>  
</div>
<center>
<div class="paginator">
    <ul class="pagination">
      <?= $this->Paginator->first('<< ' . __('first')) ?>
      <?= $this->Paginator->prev('< ' . __('previous')) ?>
      <?= $this->Paginator->numbers() ?>
      <?= $this->Paginator->next(__('next') . ' >') ?>
      <?= $this->Paginator->last(__('last') . ' >>') ?>
    </ul>
    <p>
      <?= $this->Paginator->counter(['format' => __('Tổng số trang :{{pages}}, Tổng số sản phẩm : {{count}} ')]) ?>
    </p>
 </div>
</center>
