<?php $this->layout = "admin_template";

?>
<section class="content-header">
  <h1> <?= __('Thể loại') ?> <small>Control panel</small> </h1>
  <ol class="breadcrumb">
    <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><?php echo $this->Html->link('Thể loại',['controller' => 'Categories', 'action' => 'index', '_full' => true]);?></li>
    <li class="active"><?= __('Thể loại') ?></li>
  </ol>
</section>
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <table width="100%" cellpadding="2" border="0" cellspacing="2">
        <tr>
          <td><?= __('Hành động') ?></td>
          <td><?= $this->Html->link(__('Danh sách thể loại'), ['action' => 'index']) ?></td>
          <td><?= $this->Html->link(__('Thêm thể loại'), ['action' => 'add']) ?></td>
          <td><?= $this->Html->link(__('Danh sách thể loại cha'), ['controller' => 'Categories', 'action' => 'index',0]) ?></td>
          <td><?= $this->Html->link(__('Thêm thể loại cấp cha'), ['controller' => 'Categories', 'action' => 'add']) ?></td>
          <td><?= $this->Html->link(__('Danh sách tin tức'), ['controller' => 'Articles', 'action' => 'index']) ?></td>
          <td><?= $this->Html->link(__('Thêm tin tức'), ['controller' => 'Articles', 'action' => 'add']) ?></td>
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
          <h3 class="box-title"><?= __('Thêm tin tức') ?></h3>
        </div>
        <!-- /.box-header --> 
        <!-- form start -->
        <?php  echo $this->Form->create($category);?>
        <div class="box-body">
          <div class="form-group"> <?php echo $this->Form->control('parent_id', ['label'=>'Thể loại  : ','options' => $parentCategories,'empty'=>'--Chọn thể loại--']);?> </div>
          <div class="form-group"> <?php echo $this->Form->control('name',['label'=>'Tên Thể loại  : ']);?> </div>
          <div class="form-group"> <?php echo $this->Form->control('description',['label'=>'Mô tả  : ']);?></div>          
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          <?php  echo $this->Form->button(__(' Thêm '),["class"=>"btn btn-primary"]);//?>
        </div>
        <?php  echo $this->Form->end();?>
      </div>
      <!-- /.box --> 
    </div>
    <!--/.col (left) --> 
  </div>
</section>


