<?php $this->layout = "admin_template";
echo $this->Html->css('datatables/dataTables.bootstrap.css'); ?>
<!-- Content Header (Page header) -->

<section class="content-header">
  <h1> <?= __('Người dùng') ?><small>Control panel</small> </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">
      <?= __('Người dùng') ?>
    </li>
  </ol>
</section>
<div class="row " >
  <div class="col-xs-12"><span class="label label-primary" >
    <?= $this->Html->link('Thêm người dùng', ['controller' => 'Users','action' => 'add'],[ 'style'=>'height:45px; color:#fff']) ?>
    </span> </div>
</div>
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">
            <?= __('Người dùng') ?>
          </h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive">
          <table id="example1" class="table table-bordered table-hover">
            <thead>
              <tr>
                <th scope="col"><?= $this->Paginator->sort('ID') ?></th>
                <th scope="col"><?= $this->Paginator->sort('username') ?></th>
                <th scope="col"><?= $this->Paginator->sort('password') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Loại') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Ngày tạo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Ngày cập nhật') ?></th>
                <th scope="col" class="actions"><?= __('Hành động') ?></th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($users as $user): ?>
              <tr>
                <td><?= $this->Number->format($user->id) ?> </td>
                <td><?= h($user->username) ?></td>
                <td><?= h($user->password) ?></td>
                <td><?= h($user->role) ?></td>
                <td><?= h($user->created) ?></td>
                <td><?= h($user->modified) ?></td>
                <td class="actions"><?= $this->Html->link(__('Xem'), ['action' => 'view', $user->id]) ?><span style="padding-left:3px; padding-right:2px;">||</span>
                  <?= $this->Html->link(__('Chỉnh sửa'), ['action' => 'edit', $user->id]) ?><span style="padding-left:3px; padding-right:2px;">||</span>
                  <?= $this->Form->postLink(__('Xóa'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?></td>
              </tr>
              <?php endforeach; ?>
            </tbody>
            <tfoot>
              <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('username') ?></th>
                <th scope="col"><?= $this->Paginator->sort('password') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Loại') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Ngày tạo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Ngày cập nhật') ?></th>

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
