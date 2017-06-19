<?php $this->layout = "admin_template"; 
	  echo $this->Html->css('datatables/dataTables.bootstrap.css');	
?>
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1> <?= __('Thể loại') ?> <small>Control panel</small> </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active"><?= __('Thể loại') ?></li>
  </ol>
</section>
<div class="row " ><div class="col-xs-12"><span class="label label-primary" >
  <?= $this->Html->link('Thêm thể loại', ['controller' => 'Categories','action' => 'add'],[ 'style'=>'height:35px; color:#fff']) ?>
  </span> </div>
</div>
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title"><?= __('Thể loại') ?></h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive">
          <table id="example1" class="table table-bordered table-hover">
            <thead>
              <tr>
                <th>Id</th>
                <th>ID cha</th>
                <th>Lft</th>
                <th>Rght</th>
                <th>Tên</th>
                <th>Mô tả</th>
                <th>Ngày</th>
                <th class="actions"><?= __('Hành động') ?></th>
              </tr>
            </thead>
            <tbody>
            <?php foreach ($categories as $category): ?>
              <tr>
                <td><?= $category->id ?></td>
            <td><?= $category->parent_id ?></td>
            <td><?= $category->lft ?></td>
            <td><?= $category->rght ?></td>
            <td><?= h($category->name) ?></td>
            <td><?= h($category->description) ?></td>
            <td><?= h($category->created) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('Xem chi tiết'), ['action' => 'view', $category->id]) ?> || 
                <?= $this->Html->link(__('Chỉnh sửa'), ['action' => 'edit', $category->id]) ?> || 
                <?= $this->Form->postLink(__('Xóa'), ['action' => 'delete', $category->id], ['confirm' => __('Bạn có thật sự muốn xóa # {0} không?', $category->id)]) ?> || 
                <?= $this->Form->postLink(__('Giảm bậc'), ['action' => 'moveDown', $category->id], ['confirm' => __('Bạn có thật sự muốn giảm bật # {0} không?', $category->id)]) ?> || 
                <?= $this->Form->postLink(__('Tăng bật'), ['action' => 'moveUp', $category->id], ['confirm' => __('Bạn có thật sự muốn tăng bật # {0} không?', $category->id)]) ?>
            </td>
              </tr>
              <?php endforeach; ?>
            </tbody>
            <tfoot>
              <tr>
                <th>Id</th>
                <th>ID cha</th>
                <th>Lft</th>
                <th>Rght</th>
                <th>Tên</th>
                <th>Mô tả</th>
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
