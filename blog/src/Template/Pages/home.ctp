<?php
$this->layout = 'default';
?>
<div id="adbox">
</div>
<div id="main">
  <div id="featured">
    <h4><span>Featured Items</span></h4>
    <ul class="items">
      <li> <a href="product.html"> <img src="images/leather-boots.jpg" alt="Img"> <span>$19.50</span> Cheverlyn Zespax </a> </li>
      <li> <a href="product.html"> <img src="images/leather-boots.jpg" alt="Img"> <span>$19.50</span> Cheverlyn Zespax </a> </li>
      <li> <a href="product.html"> <img src="images/leather-boots.jpg" alt="Img"> <span>$19.50</span> Cheverlyn Zespax </a> </li>
      <li> <a href="product.html"> <img src="images/leather-boots.jpg" alt="Img"> <span>$19.50</span> Cheverlyn Zespax </a> </li>
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
