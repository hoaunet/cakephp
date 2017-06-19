<?php $this->layout = "admin_template";?>
<section class="content-header">
  <h1> <?= __('Thêm ngành nghề') ?> <small>Control panel</small> </h1>
  <ol class="breadcrumb">
    <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><?php echo $this->Html->link('Articles',
    							['controller' => 'Careers', 'action' => 'index', '_full' => true]);?></li>
    <li class="active"><?= __('Thêm ngành nghề') ?></li>
  </ol>
</section>
<section class="content">
  <div class="row"> 
    <!-- left column -->
    <div class="col-md-12"> 
      <!-- general form elements -->
      <div class="box box-primary">
        <div class="box-header">
          <h3 class="box-title"><?= __('Thêm ngành nghề') ?></h3>
        </div>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Careers'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Parent Careers'), ['controller' => 'Careers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Parent Career'), ['controller' => 'Careers', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="careers form large-9 medium-8 columns content">
    <?= $this->Form->create($career) ?>
    	<div class="box-body">
        	<div class="form-group"><?php echo $this->Form->control('career_name',['label'=>'Tên  : ']);?></div>
        	<div class="form-group"><?php echo $this->Form->control('parent_id', ['label'=>'Cấp bậc  : ','options' => $parentCareers,'empty'=>'--Chọn ---']);?></div>
        	<div class="form-group"><label for="status">Trạng thái  :</label><?php echo $this->Form->checkbox('status',['label'=>'Trạng thái  : ','value' => '1','hiddenField' => '0']);
			?></div>
        </div>
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
