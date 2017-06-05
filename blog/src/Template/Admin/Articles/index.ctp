<!-- File: src/Template/Articles/index.ctp (delete links added) -->
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
    <?= $this->Html->link('Add Article', ['controller' => 'Articles','action' => 'add'],[ 'style'=>'height:45px; color:#fff']) ?>
    </span> </div>
</div>
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">
            <?= __('Actions') ?>
          </h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive">
          <table id="example1" class="table table-bordered table-hover">
            <thead>
              <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Created</th>
                <th class="actions"><?= __('Actions') ?></th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($articles as $article): ?>
              <tr>
                <td><?= $article->id ?></td>
                <td><?= $this->Html->link($article->title, ['action' => 'view', $article->id]) ?></td>
                <td><?= $article->created->format(DATE_RFC850) ?></td>
                <td><?= $this->Form->postLink(
                            'Delete',
                            ['action' => 'delete', $article->id],
                            ['confirm' => 'Are you sure?'])
                        ?>
                  <span style="padding-left:5px">||</span>
                  <?= $this->Html->link('Edit', ['action' => 'edit', $article->id]) ?></td>
              </tr>
              <?php endforeach; ?>
            </tbody>
            <tfoot>
              <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Created</th>
                <th></th>
              </tr>
            </tfoot>
          </table>
        </div>
        <!-- /.box-body --> 
      </div>
      <!-- /.box --> 
    </div>
  </div>
</section>
<?php echo $this->Html->script('plugins/datatables/jquery.dataTables.js');//DATA TABES SCRIPT
	  echo $this->Html->script('plugins/datatables/dataTables.bootstrap.js');//DATA TABES SCRIPT

?><script type="text/javascript">
            $(function() {
                $("#example1").dataTable();
               
            });
</script> 
