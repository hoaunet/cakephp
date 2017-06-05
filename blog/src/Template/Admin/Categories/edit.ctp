<?php $this->layout = "admin_template";?>
<!-- Content Header (Page header) -->

<section class="content-header">
  <h1> Categories <small>Control panel</small> </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active"><?= __('Edit Category '.$category->id) ?></li>
  </ol>
</section>
<section class="content">
<div class="row">
	<div class="col-xs-12">
    <table width="100%" cellpadding="2" border="0" cellspacing="2">
    <tr><td ><?= __('Actions') ?></td>
        <td ><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $category->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $category->id)]
            )
        ?></td>
        <td ><?= $this->Html->link(__('List Categories'), ['action' => 'index']) ?></td>
        <td ><?= $this->Html->link(__('List Parent Categories'), ['controller' => 'Categories', 'action' => 'index']) ?></td>
        <td ><?= $this->Html->link(__('New Parent Category'), ['controller' => 'Categories', 'action' => 'add']) ?></td>
        <td ><?= $this->Html->link(__('List Articles'), ['controller' => 'Articles', 'action' => 'index']) ?></td>
        <td ><?= $this->Html->link(__('New Article'), ['controller' => 'Articles', 'action' => 'add']) ?></td>
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
          <h3 class="box-title"><?= __('Edit Category') ?></h3>
        </div>
        <!-- /.box-header --> 
        <!-- form start -->
        <?= $this->Form->create($category) ?>
        <div class="box-body">
          <div class="form-group"> <?php echo $this->Form->control('parent_id', ['options' => $parentCategories,'empty' => 'No parent category']);?> </div>
          <div class="form-group">            
            <?php  echo $this->Form->control('name');?> </div>
          <div class="form-group">
            <?php echo $this->Form->control('description', ['rows' => '10','cols'=>'100']);?> </div>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          <?php  echo $this->Form->button(__('Submit'),["class"=>"btn btn-primary"]);//?>          
        </div>
        <?php  echo $this->Form->end();?>
      </div>
      <!-- /.box --> 
    </div>
    <!--/.col (left) --> 
  </div>
</section>
