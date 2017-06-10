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
			    "alt" => $product_cate->categories_name,"height"=>'100px',"width"=>'100px','url' => ['controller' => 'Productcategories', 'action' => 'view',$product_cate->id]
]);?> <br /><b><?php echo $this->Html->link( h($product_cate->categories_name),['controller' => 'Productcategories', 'action' => 'view',$product_cate->id]);?></b></li>
      <?php endforeach; ?>
      
    </ul>
  </div>
  <div id="featured">
    <h4><span>Sản phẩm mới nhất</span></h4>
    <ul class="items">
     <?php foreach ($products as $product): ?>
      <li> <?php echo $this->Html->image($product->products_image, [
			    "alt" => $product->products_model,"height"=>'100px',"width"=>'100px','url' => ['controller' => 'Products', 'action' => 'view',$product->id]
]);?> <br /><span><?=$product->products_price?>VNĐ</span><br /><?php echo $this->Html->link( h($product->products_model),['controller' => 'Products', 'action' => 'view', $product->id]);?></li>
      <?php endforeach; ?>
      
    </ul>
  </div>
  <div id="featured">
    <h4><span>Nhà sản xuất </span></h4>
    <ul class="items">
     <?php foreach ($manufacturers as $manufacturer): ?>
      <li> <?php echo $this->Html->image($manufacturer->manufacturers_image, [
			    "alt" => $manufacturer->manufacturers_name,"height"=>'100px',"width"=>'100px','url' => ['controller' => 'Manufacturers', 'action' => 'view',$manufacturer->id]
]);?> <br /><b><?php echo $this->Html->link( h($manufacturer->manufacturers_name),['controller' => 'Manufacturers', 'action' => 'view', $manufacturer->id]);?></b></li>
      <?php endforeach; ?>
      
    </ul>
  </div>
  <div id="sale">
    <h4><span>Tin tức</span></h4>
    <ul class="items">
    <?php foreach ($articles as $article): ?>
      <li><?php echo (!empty($article->articles_image))?$this->Html->image($article->articles_image, [
			    "alt" => h($article->title),"height"=>'100px',"width"=>'100px','url' => ['controller' => 'Articles', 'action' => 'detail',$article->id]
]):'';?> <br /><?php echo $this->Html->link( h($article->title),['controller' => 'Articles', 'action' => 'detail', $article->id]);?> </li>
      <?php endforeach; ?>
    </ul>
  </div>
</div>
