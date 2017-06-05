<!-- File: src/Template/Articles/edit.ctp -->
<?php $this->layout = "admin_template";?>
<!-- Content Header (Page header) -->

<section class="content-header">
  <h1> Blog articles <small>Control panel</small> </h1>
  <ol class="breadcrumb">
    <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
     <li><?php echo $this->Html->link('Articles',
    							['controller' => 'Articles', 'action' => 'index', '_full' => true]);?></li>
    <li class="active">Edit articles</li>
  </ol>
</section>

<section class="content">
<div class="row"> 
  <!-- left column -->
  <div class="col-md-12"> 
    <!-- general form elements -->
    <div class="box box-primary">
      <div class="box-header">
        <h3 class="box-title">Edit Article</h3>
      </div>
      <!-- /.box-header --> 
      <!-- form start -->
      <?php  echo $this->Form->create($article);?>
        <div class="box-body">
          <div class="form-group">            
            <?php echo $this->Form->control('title',["class"=>"form-control"]);?>            
          </div>
          <div class="form-group">            
            <?php echo $this->Form->control('body', ['rows' => '5',"cols"=>"150"]);?>            
          </div>   
          
        </div>
        <!-- /.box-body -->        
        <div class="box-footer">
          <?php  echo $this->Form->button(__('Save Article'),["class"=>"btn btn-primary"]);//?>        
        </div>
      <?php  echo $this->Form->end();?>
    </div>
    <!-- /.box -->    
  </div>
  <!--/.col (left) -->   
</div>
</section>