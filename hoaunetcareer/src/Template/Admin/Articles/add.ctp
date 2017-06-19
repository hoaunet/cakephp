<!-- File: src/Template/Articles/add.ctp -->
<?php $this->layout = "admin_template";?>
<!-- Content Header (Page header) -->

<section class="content-header">
  <h1> <?= __('Thêm tin tức') ?> <small>Control panel</small> </h1>
  <ol class="breadcrumb">
    <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><?php echo $this->Html->link('Articles',
    							['controller' => 'Articles', 'action' => 'index', '_full' => true]);?></li>
    <li class="active"><?= __('Thêm tin tức') ?></li>
  </ol>
</section>
<section class="content">
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
        <?php  echo $this->Form->create($article, ['enctype' => 'multipart/form-data']);?>
        <div class="box-body">
          <div class="form-group"> <?php echo $this->Form->control('category_id',['label'=>'Thể loại  : ','empty'=>'--Chọn thể loại--']);?> </div>
          <div class="form-group"> <?php echo $this->Form->control('title',['label'=>'Tiêu đề  : ']);?> </div>
          <div class="form-group"> <?php echo $this->Form->input('upload', ['label'=>'Hình ảnh  : ','type' => 'file']);?></div>          
          <div class="form-group"> <?php echo $this->Form->control('short_desc', ['label'=>'Tóm tắt : ','rows' => '10','cols'=>'100']);?> </div>
          <div class="form-group"> <?php echo $this->Form->control('body', ['label'=>'Nội dung : ','rows' => '10','cols'=>'100']);?> </div>
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
