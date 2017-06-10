<!-- File: src/Template/Articles/index.ctp (delete links added) -->
<?php $this->layout = "admin_template"; 
	  echo $this->Html->css('datatables/dataTables.bootstrap.css');	
?>
<!-- Content Header (Page header) -->

<section class="content-header">
  <h1> Tin tức<small>Control panel</small> </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
    <li class="active">
      <?= __('Tin tức') ?>
    </li>
  </ol>
</section>
<div class="row " >
  <div class="col-xs-12"><span class="label label-primary" >
    <?= $this->Html->link('Thêm tin tức', ['controller' => 'Articles','action' => 'add'],[ 'style'=>'height:45px; color:#fff']) ?>
    </span> </div>
</div>
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">
            <?= __('Tin tức') ?>
          </h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive">
          <table id="example1" class="table table-bordered table-hover">
            <thead>
              <tr>
                <th>ID</th>
                <th>Tiêu đề</th>
                <th>Ngày</th>
                <th class="actions"><?= __('Hành động') ?></th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($articles as $article):						        
			 ?>
              <tr>
                <td><?= $article->id ?></td>
                <td><?= $this->Html->link($article->title, ['action' => 'view', $article->id]) ?></td>
                <td><?php //echo $article->created->format(DATE_RFC850); ?></td>
                <td> <?= $this->Html->link(__('Xem chi tiết'), ['action' => 'view', $article->id]) ?><span style="padding-left:5px">||</span>
				    <?= $this->Form->postLink(
                            'Xóa',
                            ['action' => 'delete', $article->id],
                            ['confirm' => 'Bạn có thật sự muốn xóa không?'])
                        ?>
                  <span style="padding-left:5px">||</span>
                  <?= $this->Html->link('Chỉnh sửa', ['action' => 'edit', $article->id]) ?></td>
              </tr>
              <?php endforeach; ?>
            </tbody>
            <tfoot>
              <tr>
                <th>ID</th>
                <th>Tiêu đề</th>
                <th>Ngày</th>
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
