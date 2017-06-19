<?php $this->layout = "admin_template"; 
	  echo $this->Html->css('datatables/dataTables.bootstrap.css');	
?>
<section class="content-header">
  <h1> <?= __('Nghề nghiệp') ?><small>Control panel</small> </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
    <li class="active"><?= __('Nghề nghiệp') ?></li>
  </ol>
</section>
<div class="row " >
  <div class="col-xs-12"><span class="label label-primary" >
    <?= $this->Html->link('Thêm nghề nghiệp', ['controller' => 'Careers','action' => 'add'],[ 'style'=>'height:45px; color:#fff']) ?>
    </span> </div>
</div>
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">
            <?= __('Nghề nghiệp') ?>
          </h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive">
          <table id="example1" class="table table-bordered table-hover">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Tên') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Cấp') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Trạng thái') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Ngày tạo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Ngày cập nhật') ?></th>
                <th scope="col" class="actions"><?= __('Hành động') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($careers as $career): ?>
            <tr>
                <td><?= $this->Number->format($career->id) ?></td>
                <td><?= h($career->career_name) ?></td>
                <td><?= $career->has('parent_career') ? $this->Html->link($career->parent_career->id, ['controller' => 'Careers', 'action' => 'view', $career->parent_career->id]) : '' ?></td>
                <td><?php echo ($career->status==0)?h('Hoạt động'):h('Không hđ'); ?></td>
                <td><?= h($career->created) ?></td>
                <td><?= h($career->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $career->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $career->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $career->id], ['confirm' => __('Are you sure you want to delete # {0}?', $career->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
           <tr>
                <th>ID</th>
                <th>Tên</th>
                <th>Cấp bật</th>
                <th><?= $this->Paginator->sort('Trạng thái') ?></th>
                <th>Ngày</th>
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
