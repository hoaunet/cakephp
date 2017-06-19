<?php $this->layout = "admin_template"; 
	  echo $this->Html->css('datatables/dataTables.bootstrap.css');	
?>

<section class="content-header">
  <h1>
    <?= __('Tỉnh thành') ?>
    <small>Control panel</small> </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
    <li class="active">
      <?= __('Tỉnh thành') ?>
    </li>
  </ol>
</section>
<div class="row " >
  <div class="col-xs-12"><span class="label label-primary" >
    <?= $this->Html->link('Thêm Tỉnh thành', ['controller' => 'Provinces','action' => 'add'],[ 'style'=>'height:45px; color:#fff']) ?>
    </span> </div>
</div>
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <table width="100%" cellpadding="2" border="0" cellspacing="2">
        <tr>
          <td><?= $this->Html->link(__('List Countries'), ['controller' => 'Countries', 'action' => 'index']) ?></td>
          <td>
            <?= $this->Html->link(__('New Country'), ['controller' => 'Countries', 'action' => 'add']) ?>
          </td>
          <td>
            <?= $this->Html->link(__('List Schools'), ['controller' => 'Schools', 'action' => 'index']) ?>
          </td>
          <td>
            <?= $this->Html->link(__('New School'), ['controller' => 'Schools', 'action' => 'add']) ?>
          </td>
          <td>
            <?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?>
          </td>
          <td>
            <?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?>
          </td>
          
        <tr>
      </table>
    </div>
  </div>
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">
            <?= __('Ứng viên') ?>
          </h3>
        </div>
        <div class="box-body table-responsive">
          <table id="example1" class="table table-bordered table-hover">
            <thead>
              <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('province_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('province_type') ?></th>
                <th scope="col"><?= $this->Paginator->sort('province_code') ?></th>
                <th scope="col"><?= $this->Paginator->sort('parent_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('country_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($provinces as $province): ?>
              <tr>
                <td><?= $this->Number->format($province->id) ?></td>
                <td><?= h($province->province_name) ?></td>
                <td><?= $this->Number->format($province->province_type) ?></td>
                <td><?= $this->Number->format($province->province_code) ?></td>
                <td><?= $province->has('parent_province') ? $this->Html->link($province->parent_province->id, ['controller' => 'Provinces', 'action' => 'view', $province->parent_province->id]) : '' ?></td>
                <td><?= $province->has('country') ? $this->Html->link($province->country->id, ['controller' => 'Countries', 'action' => 'view', $province->country->id]) : '' ?></td>
                <td><?= $this->Number->format($province->status) ?></td>
                <td class="actions"><?= $this->Html->link(__('View'), ['action' => 'view', $province->id]) ?>
                  <?= $this->Html->link(__('Edit'), ['action' => 'edit', $province->id]) ?>
                  <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $province->id], ['confirm' => __('Are you sure you want to delete # {0}?', $province->id)]) ?></td>
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
