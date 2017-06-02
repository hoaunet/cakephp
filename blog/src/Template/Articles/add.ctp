<!-- File: src/Template/Articles/add.ctp -->
<!-- File: src/Template/Articles/index.ctp (delete links added) -->
<?php $this->layout = "admin_template";?>
<!-- Content Header (Page header) -->

<section class="content-header">
  <h1> Blog articles <small>Control panel</small> </h1>
  <ol class="breadcrumb">
    <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
     <li><a href="/"> Articles</a></li>
    <li class="active">Add articles</li>
  </ol>
</section>

<section class="content">
<div class="box-body table-responsive no-padding">
<h1>Add Article</h1>
<?php
    echo $this->Form->create($article);
	echo $this->Form->control('category_id');
    echo $this->Form->control('title');    
?>
<div class='row'>
                        <div class='col-md-12'>
                            <div class='box box-info'>
                                <div class='box-header'>
                                    <h3 class='box-title'>CK Editor <small>Advanced and full of features</small></h3>
                                    <!-- tools box -->
                                    <div class="pull-right box-tools">
                                        <button class="btn btn-info btn-sm" data-widget='collapse' data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                                        <button class="btn btn-info btn-sm" data-widget='remove' data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                                    </div><!-- /. tools -->
                                </div><!-- /.box-header -->
                                <div class='box-body pad'>
                                    <?php echo $this->Form->control('editor1', ['rows' => '3','id'=>'editor1']);?>
                                </div>
                            </div><!-- /.box -->

                            <div class='box'>                                
                              <?php echo $this->Form->button(__('Save Article'));
    echo $this->Form->end();?>  
                            </div>
                        </div><!-- /.col-->
                    </div>
</div>
</section>

<?php   
		echo $this->Html->script('plugins/ckeditor/ckeditor.js');//AdminLTE for demo purposes
		echo $this->Html->script('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js');//jQuery UI 1.10.3?>
<script type="text/javascript">
            $(function() {
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
               CKEDITOR.replace('editor1');
                //bootstrap WYSIHTML5 - text editor
               
            });
        </script>