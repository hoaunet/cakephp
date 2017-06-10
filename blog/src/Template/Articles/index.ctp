<?php
$this->layout = 'default'; 
?>

<div id="checkout">
  <h4><span>Tin tức</span></h4>
  <table width="100%">
    <tbody>
      <?php foreach($articles as $val):?>
      <tr>
        <td><b><?php echo $this->Html->link(h($val->title),['controller' => 'Articles', 'action' => 'detail', $val->id]);?></b>
            <br /><?php if(!empty($val->articles_image)):
		  		    		echo $this->Html->image($val->articles_image, ["alt" => $val->title,"height"=>'100px',"width"=>'100px']);
						endif;
		     	?><?=$val->short_desc?>
          </td>
      </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>
<div class="paginator">
  <ul class="pagination">
    <?= $this->Paginator->first('<< ' . __('first')) ?>
    <?= $this->Paginator->prev('< ' . __('previous')) ?>
    <?= $this->Paginator->numbers() ?>
    <?= $this->Paginator->next(__('next') . ' >') ?>
    <?= $this->Paginator->last(__('last') . ' >>') ?>
  </ul>
  <p>
    <?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?>
  </p>
</div>
