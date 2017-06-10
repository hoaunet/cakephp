<?php $this->layout = "admin_template";
	  echo $this->Html->css('datatables/dataTables.bootstrap.css');
?>
<section class="content-header">
  <h1> <?= __('Thể loại') ?>  <small>Control panel</small> </h1>
  <ol class="breadcrumb">
    <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
     <li><?php echo $this->Html->link('Thể loại',['controller' => 'Productcategories', 'action' => 'index', '_full' => true]);?></li>
    <li class="active"><?= __('Xem Thể loại') ?> #<?=$productcategory->id?></li>
  </ol>
</section>
<section class="content">
<div class="row">
	<div class="col-xs-12">
    <table width="100%" cellpadding="2" border="0" cellspacing="2">
    <tr> 
        <td><?= __('Hành động') ?></td>        
        <td><?= $this->Html->link(__('Danh sách thể loại'), ['action' => 'index']) ?> </td>       
        <td><?= $this->Html->link(__('Thêm thể loại'), ['controller' => 'Productcategories', 'action' => 'add']) ?> </td>
        <tr> 
  </table>
    </div>
</div>
<div class="row"> 
    <!-- left column -->
    <div class="col-md-12"> 
      <!-- general form elements -->
      <div class="box box-primary">
        <div class="box-header">
          <h3 class="box-title"><?= __('Thêm thể loại sản phẩm') ?></h3>
        </div>
    <?= $this->Form->create($productcategory, ['enctype' => 'multipart/form-data']) ?>
    <div class="box-body">
       <div class="form-group"><?php echo $this->Form->control('categories_name');?></div>
       <div class="form-group"><?php echo $this->Form->input('upload', ['type' => 'file']);?></div>
       <div class="form-group"><?php echo $this->Form->control('parent_id', ['options' => $parentProductcategories]);?></div>
       <div class="form-group"><?php echo $this->Form->control('sort_order');?></div>
       <div class="form-group"><?php echo $this->Form->control('date_added', ['empty' => true]);?></div>
       <div class="form-group"><?php echo $this->Form->control('last_modified', ['empty' => true]);?></div>
       
    <div class="box-footer">
          <?php  echo $this->Form->button(__('Lưu'),["class"=>"btn btn-primary"]);//?>
        </div>
    
    <?= $this->Form->end() ?>
 </div>
      <!-- /.box --> 
    </div>
    <!--/.col (left) --> 
  </div>
</section>
