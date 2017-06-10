<?php $this->layout = "admin_template";
?>
<section class="content-header">
  <h1> Products<small>Control panel</small> </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">
      <?= __('Actions') ?>
    </li>
  </ol>
</section>
<section class="content">
<div class="row">
	<div class="col-xs-12">
    <table width="100%" cellpadding="2" border="0" cellspacing="2">
    <tr><td ><?= __('Actions') ?></td>
        <td><?= $this->Html->link(__('List Products'), ['action' => 'index']) ?></td>
        <td><?= $this->Html->link(__('List Products'), ['controller' => 'Products', 'action' => 'index']) ?></td>
        <td><?= $this->Html->link(__('New Product'), ['controller' => 'Products', 'action' => 'add']) ?></td>
        <td><?= $this->Html->link(__('List Categories'), ['controller' => 'Categories', 'action' => 'index']) ?></td>
        <td><?= $this->Html->link(__('New Category'), ['controller' => 'Categories', 'action' => 'add']) ?></td>
    </tr>
    </table>
    </div>
</div>
<div class="row"> 
    <!-- left column -->
    <div class="col-md-12"> 
      <!-- general form elements -->
      <div class="box box-primary">
        <div class="box-header">
          <h3 class="box-title"><?= __('Add Product') ?></h3>
        </div>
    <?= $this->Form->create($product) ?>
    <div class="box-body">
        <?php
            echo $this->Form->control('products_quantity');
            echo $this->Form->control('products_model');
            echo $this->Form->control('products_image');
            echo $this->Form->control('products_price');
            echo $this->Form->control('products_date_added');
            echo $this->Form->control('products_last_modified', ['empty' => true]);
            echo $this->Form->control('products_date_available', ['empty' => true]);
            echo $this->Form->control('products_weight');
            echo $this->Form->control('products_status');
            echo $this->Form->control('products_tax_class_id');
            echo $this->Form->control('manufacturers_id');
            echo $this->Form->control('products_ordered');
            echo $this->Form->control('categories_id', ['options' => $categories]);
        ?>
     <div class="box-footer"><?= $this->Form->button(__('Submit')) ?></div>
    <?= $this->Form->end() ?>
 </div>
      <!-- /.box --> 
    </div>
    <!--/.col (left) --> 
  </div>
</section>
