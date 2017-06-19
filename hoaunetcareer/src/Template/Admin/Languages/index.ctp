<?php $this->layout = "admin_template"; 
	  echo $this->Html->css('datatables/dataTables.bootstrap.css');	
?>
<section class="content-header">
  <h1> <?= __('Ngôn ngữ') ?><small>Control panel</small> </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
    <li class="active"><?= __('Ngôn ngữ') ?></li>
  </ol>
</section>
<div class="row " >
  <div class="col-xs-12"><span class="label label-primary" >
    <?= $this->Html->link('Thêm Ngôn ngữ', ['controller' => 'Careers','action' => 'add'],[ 'style'=>'height:45px; color:#fff']) ?>
    </span> </div>
</div>
<section class="content">
 <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">
            <?= __('Ngôn ngữ') ?>
          </h3>
        </div>
<div class="box-body table-responsive">
          <table id="example1" class="table table-bordered table-hover">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('code') ?></th>
                <th scope="col"><?= $this->Paginator->sort('image') ?></th>
                <th scope="col"><?= $this->Paginator->sort('directory') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sort_order') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($languages as $language): ?>
            <tr>
                <td><?= $this->Number->format($language->id) ?></td>
                <td><?= h($language->name) ?></td>
                <td><?= h($language->code) ?></td>
                <td><?= h($language->image) ?></td>
                <td><?= h($language->directory) ?></td>
                <td><?= $this->Number->format($language->sort_order) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $language->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $language->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $language->id], ['confirm' => __('Are you sure you want to delete # {0}?', $language->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
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
