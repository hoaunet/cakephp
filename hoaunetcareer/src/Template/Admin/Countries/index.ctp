<?php $this->layout = "admin_template"; 
	  echo $this->Html->css('datatables/dataTables.bootstrap.css');	
?>
<section class="content-header">
  <h1> <?= __('Quốc gia') ?><small>Control panel</small> </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
    <li class="active"><?= __('Quốc gia') ?></li>
  </ol>
</section>
<div class="row " >
  <div class="col-xs-12"><span class="label label-primary" >
    <?= $this->Html->link('Thêm Quốc gia', ['controller' => 'Careers','action' => 'add'],[ 'style'=>'height:45px; color:#fff']) ?>
    </span> </div>
</div>
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <table width="100%" cellpadding="2" border="0" cellspacing="2">
        <tr>
          <td><?= $this->Html->link(__('List Provinces'), ['controller' => 'Provinces', 'action' => 'index']) ?></td>
        <td><?= $this->Html->link(__('New Province'), ['controller' => 'Provinces', 'action' => 'add']) ?></td>
        <tr>
      </table>
    </div>
  </div>
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">
            <?= __('Quốc gia') ?>
          </h3>
        </div>
<div class="box-body table-responsive">
          <table id="example1" class="table table-bordered table-hover">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('countries_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('countries_iso_code_2') ?></th>
                <th scope="col"><?= $this->Paginator->sort('countries_iso_code_3') ?></th>
                <th scope="col"><?= $this->Paginator->sort('address_format_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($countries as $country): ?>
            <tr>
                <td><?= $this->Number->format($country->id) ?></td>
                <td><?= h($country->countries_name) ?></td>
                <td><?= h($country->countries_iso_code_2) ?></td>
                <td><?= h($country->countries_iso_code_3) ?></td>
                <td><?= $this->Number->format($country->address_format_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $country->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $country->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $country->id], ['confirm' => __('Are you sure you want to delete # {0}?', $country->id)]) ?>
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
