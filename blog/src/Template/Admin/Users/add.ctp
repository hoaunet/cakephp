<?php $this->layout = "admin_template"; ?>
<!-- Content Header (Page header) -->

<section class="content-header">
  <h1> Blog articles<small>Control panel</small> </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">
      <?= __('Actions') ?>
    </li>
  </ol>
</section>
<div class="row " >
  <div class="col-xs-12"><span class="label label-primary" >
    <?= $this->Html->link('List Users', ['controller' => 'Users','action' => 'index'],[ 'style'=>'height:45px; color:#fff']) ?>
    </span> </div>
</div>
<section class="content">
<div class="row"> 
  <!-- left column -->
  <div class="col-md-12"> 
    <!-- general form elements -->
    <div class="box box-primary">
      <div class="box-header">
        <h3 class="box-title">
          <?= __('Add User') ?>
        </h3>
      </div>
      <!-- /.box-header --> 
      <!-- form start -->
      <?= $this->Form->create($user) ?>
      <div class="box-body">
        <div class="form-group"> <?php echo $this->Form->control('username');?> </div>
        <div class="form-group">
          <?php  echo $this->Form->control('password');?>
        </div>
        <div class="form-group"> <?= $this->Form->control('role', [
            'options' => ['admin' => 'Admin', 'author' => 'Author']
        ]) ?> </div>
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
