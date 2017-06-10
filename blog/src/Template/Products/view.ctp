<?php  $this->layout = 'default';  ?>

<div id="product">
<h4><span><?=$product->products_name?></span></h4>
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
     <p>Giá           : <span>
      <?=$product->products_price?>
      VNĐ</span></p>
    <p>Model         :<?=$product->products_model?></p>
    <p>Loại sản phẩm : <?php echo (!empty($product->productcategory->categories_name))?$this->Html->link( h($product->productcategory->categories_name),['controller' => 'Productcategories', 'action' => 'view',$product->productcategory->id]):"";?></p>
    <p>Nhà sản xuất  : <?php echo (!empty($product->manufacturer->manufacturers_name))?$this->Html->link( h($product->manufacturer->manufacturers_name),['controller' => 'Manufacturers', 'action' => 'view',$product->manufacturer->id]):"";?></p>
    <p>Số lượng      : <?=$product->products_quantity?><!--<form action="#" method="post">
     <select>
          <option>Select Size</option>
        </select>
       <!-- <select name="products_quantity">
        <option>Chọn số lượng</option>
        <?php for ($i=1;$i<$product->products_quantity;$i++){?>
        <option value="<?=$i?>">
        <?=$i?>
        </option>
        <?php }?>
      </select>
      <input type="submit" value="Thêm vào giỏ hàng" class="btn-cart">
      <input type="submit" value="Yêu thích">
    </form>--></p>  </div>
</div>
<div class="footer">
  <h4><span>Sản phẩm mới nhất</span></h4>
  <ul class="items">
    <?php foreach ($products as $product): ?>
    <li> <?php echo $this->Html->image($product->products_image, [
			    "alt" => $product->products_model,"height"=>'100px',"width"=>'100px','url' => ['controller' => 'Products', 'action' => 'display',$product->products_id]
]);?> <br />
      <span>
      <?=$product->products_price?>
      VNĐ</span><br />
      <?=$product->products_model?>
      </a> </li>
    <?php endforeach; ?>
  </ul>
</div>
