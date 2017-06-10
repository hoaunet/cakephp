<?php $this->layout = "admin_template"; 
 echo $this->Html->css('datatables/dataTables.bootstrap.css');?>

<section class="content-header">
  <h1> <?= __('Nhà sản xuất') ?> <small>Control panel</small> </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">
      <?= __('Nhà sản xuất') ?>
    </li>
  </ol>
</section>
<div class="row " >
  <div class="col-xs-12"><span class="label label-primary" >
    <?= $this->Html->link('Thêm nhà SX', ['controller' => 'Categories','action' => 'add'],[ 'style'=>'height:35px; color:#fff']) ?>
    </span> </div>
</div>
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">
            <?= __('Nhà sản xuất') ?>
          </h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive">
          <table id="example1" cellpadding="0" cellspacing="0" class="table table-bordered table-hover">
            <thead>
              <tr>
                <th scope="col"><?= $this->Paginator->sort('ID') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Tên') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Hình ảnh') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Ngày tạo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Ngày chỉnh sửa') ?></th>
                <th scope="col" class="actions"><?= __('Hành động') ?></th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($manufacturers as $manufacturer): ?>
              <tr>
                <td><?= $this->Number->format($manufacturer->id) ?></td>
                <td><?= $this->Html->link(__($manufacturer->manufacturers_name), ['action' => 'view', $manufacturer->manufacturers_id]) ?></td>
                <td><?= h($manufacturer->manufacturers_image) ?></td>
                <td><?= h($manufacturer->date_added) ?></td>
                <td><?= h($manufacturer->last_modified) ?></td>
                <td class="actions"><?= $this->Html->link(__('Xem'), ['action' => 'view', $manufacturer->manufacturers_id]) ?><span style="padding-left:3px; padding-right:2px">||</span>
                  <?= $this->Html->link(__('Chỉnh sửa'), ['action' => 'edit', $manufacturer->manufacturers_id]) ?><span style="padding-left:3px; padding-right:2px">||</span>
                  <?= $this->Form->postLink(__('Xóa'), ['action' => 'delete', $manufacturer->manufacturers_id], ['confirm' => __('Are you sure you want to delete # {0}?', $manufacturer->manufacturers_id)]) ?></td>
              </tr>
              <?php endforeach; ?>
            </tbody>
            <tfoot>
              <tr>
                <th scope="col"><?= $this->Paginator->sort('ID') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Tên') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Hình ảnh') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Ngày tạo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Ngày chỉnh sửa') ?></th>
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

?>
<script type="text/javascript">
$(function() {
        $("#example1").dataTable();
});
</script>