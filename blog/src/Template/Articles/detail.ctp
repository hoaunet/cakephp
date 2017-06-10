<?php
$this->layout = 'default'; 
?>

<div id="contents">
  <div id="checkout">
    <h4><span>Tin chi tiết</span></h4>
    <table width="100%">
      <tbody>
       <tr><td><h2>
              <?= h($article->title) ?>
              -
              (<?= $article->created->format("d/m/Y") ?>)
              </h2></td></tr>
        <tr>
          <td ><?php echo (!empty($article->articles_image))?$this->Html->image($article->articles_image, ['alt' => $article->title]):"";?>
             <span style="text-align:justify"> <?= h($article->body) ?></span>
            </td>
        </tr>
      </tbody>
    </table>
  </div>
  <div id="sale">
    <h4><span>Tin tức</span></h4>
    <ul class="items">
    <?php foreach ($list as $detail): ?>
      <li><?php echo (!empty($detail->articles_image))?$this->Html->image($detail->articles_image, [
			    "alt" => h($detail->title),"height"=>'100px',"width"=>'100px','url' => ['controller' => 'Articles', 'action' => 'detail',$detail->id]
]):"";?> <br /><?php echo $this->Html->link( h($detail->title),['controller' => 'Articles', 'action' => 'detail', $detail->id]);?> </li>
      <?php endforeach; ?>
    </ul>
  </div>
</div>
