<?php
$this->layout = 'default';//print_r($products);
?>
<div id="contents">
  <h4><span></span></h4>
  <div id="stocks">
    <ul>
      <?php foreach ($products as $val): ?>
      <li><br />
        <?php echo $this->Html->image($val->products_image, ["alt" => $val->products_name, "height"=>'100px',"width"=>'100px','url' => ['controller' => 'Products', 'action' => 'display',$val->products_id]
]);?>
        <div><?=$val->products_price?>
        <br /><?=$this->Text->truncate(h($val->products_name),22,array('ellipsis' => '...','exact' => false));?>
        <br /><em><?=$val->products_model?></em> <a href="#" class="btn-cart">Giỏ hàng</a> <a href="#" class="btn-wish">Yêu thích</a></div>
      </li>
      <?php endforeach; ?>
    </ul>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
  </div>
  <div class="footer">
    <h4><span>Sản phẩm mới nhất</span></h4>
    <ul class="items">
      <?php foreach ($list as $product): ?>
      <li> <?php echo $this->Html->image($product->products_image, [
			    "alt" => $product->products_name,"height"=>'100px',"width"=>'100px','url' => ['controller' => 'Products', 'action' => 'display',$product->products_id]
]);?> <br />
        <span>
        <?=$product->products_price?>
        VNĐ</span><br />
        <?=$product->products_name?>
      </li>
      <?php endforeach; ?>
    </ul>
  </div>
</div>
