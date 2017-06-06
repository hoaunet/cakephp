<?php
$this->layout = 'default';
?>

<div id="contents">
  <div id="product">
    <div class="section">
      <ul>
        <li> <?php echo $this->Html->image($product->products_image, [
			    "alt" => $product->products_model,'url' => ['controller' => 'Products', 'action' => 'display',$product->products_id]
]);?> </li>
        <!--<li> <a href="product.html"><img src="images/boots-view2.jpg" alt="thumbnail"></a> </li>
        <li> <a href="product.html"><img src="images/boots-view3.jpg" alt="thumbnail"></a> </li>
        <li> <a href="product.html"><img src="images/boots-view4.jpg" alt="thumbnail"></a> </li>
        <li> <a href="product.html"><img src="images/boots-view5.jpg" alt="thumbnail"></a> </li>-->
      </ul>
      <div> <?php echo $this->Html->image($product->products_image, [
			    "alt" => $product->products_model,"height"=>'100px',"width"=>'100px','url' => ['controller' => 'Products', 'action' => 'display',$product->products_id]
]);?> </div>
    </div>
    <div class="section">
      <h2><span><?=$product->products_price?> VNĐ</span><?=$product->products_model?></h2>
      <p> <?=$product->products_quantity?> </p>
      <form action="#" method="post">
        <select>
          <option>Select Size</option>
        </select>
        <select>
          <option>Select Qty.</option>
        </select>
        <input type="submit" value="Add to Cart" class="btn-cart">
        <input type="submit" value="Add to Wishlist">
      </form>
    </div>
  </div>
  <div class="footer">
    <h4><span>Sản phẩm mới nhất</span></h4>
    <ul class="items">
     <?php foreach ($products as $product): ?>
      <li> <?php echo $this->Html->image($product->products_image, [
			    "alt" => $product->products_model,"height"=>'100px',"width"=>'100px','url' => ['controller' => 'Products', 'action' => 'display',$product->products_id]
]);?> <br /><span><?=$product->products_price?>VNĐ</span><br /><?=$product->products_model?></a> </li>
      <?php endforeach; ?>
    </ul>
  </div>
</div>
