<?php
$this->layout = 'default';
?>

<h4><span>Nhà sản xuất</span></h4>
<div id="stocks">
  <ul>
    <?php foreach ($manufacturers as $manufacturer): ?>
    <li><br />
      <?php echo $this->Html->image($manufacturer->manufacturers_image, [
			    "alt" => $manufacturer->manufacturers_name,"height"=>'100px',"width"=>'100px','url' =>
				['controller' => 'Manufacturers', 'action' => 'view',$manufacturer->id]]);?>
      <div>
         <?php echo $this->Html->link( h($this->Text->truncate(h($manufacturer->manufacturers_name),22,array('ellipsis' => '...','exact' => false))),
		                                    ['controller' => 'Manufacturers', 'action' => 'view',$manufacturer->id]);?>
       
      </div>
    </li>
    <?php endforeach; ?>
  </ul>
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
    <?= $this->Paginator->counter(['format' => __('Tổng số trang :{{pages}}, Tổng số sản phẩm : {{count}} ')]) ?>
  </p>
</div>
