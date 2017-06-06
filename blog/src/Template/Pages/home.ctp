<?php
$this->layout = 'default';
?>
<div id="adbox">
</div>
<div id="main">
  <div id="featured">
    <h4><span>Loại sản phẩm</span></h4>
    <ul class="items">
     <?php foreach ($product_cates as $product_cate): ?>
      <li> <?php echo $this->Html->image($product_cate->categories_image, [
			    "alt" => $product_cate->categories_id,"height"=>'100px',"width"=>'100px','url' => ['controller' => 'Products', 'action' => 'view',$product_cate->categories_id]
]);?> <br /> </li>
      <?php endforeach; ?>
      
    </ul>
  </div>
  <div id="featured">
    <h4><span>Sản phẩm mới nhất</span></h4>
    <ul class="items">
     <?php foreach ($products as $product): ?>
      <li> <?php echo $this->Html->image($product->products_image, [
			    "alt" => $product->products_model,"height"=>'100px',"width"=>'100px','url' => ['controller' => 'Products', 'action' => 'display',$product->products_id]
]);?> <br /><span><?=$product->products_price?>VNĐ</span><br /><?=$product->products_model?></a> </li>
      <?php endforeach; ?>
      
    </ul>
  </div>
  <div id="sale">
    <h4><span>Tin tức</span></h4>
    <ul class="items">
    <?php foreach ($articles as $article): ?>
      <li><?php echo $this->Html->link( h($article->title),['controller' => 'Articles', 'action' => 'detail', $article->id]);?> </li>
      <?php endforeach; ?>
    </ul>
  </div>
</div>
