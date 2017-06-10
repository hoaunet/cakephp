<?php $this->layout = "admin_template";
	  echo $this->Html->css('datatables/dataTables.bootstrap.css');
?>

<section class="content-header">
  <h1>
    <?= __('Thể loại') ?>
    <small>Control panel</small> </h1>
  <ol class="breadcrumb">
    <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><?php echo $this->Html->link('Thể loại',['controller' => 'Categories', 'action' => 'index', '_full' => true]);?></li>
    <li class="active">
      <?= __('Sửa Thể loại') ?>
      #
      <?=$category->id?>
    </li>
  </ol>
</section>
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <table width="100%" cellpadding="2" border="0" cellspacing="2">
        <tr>
          <td><?= __('Hành động') ?></td>
          <td><?= $this->Form->postLink(
                __('Xóa'),
                ['action' => 'delete', $category->id],
                ['confirm' => __('Bạn có chắc là bạn muốn xóa # {0} không?', $category->id)]
            )
        ?></td>
          <td><?= $this->Html->link(__('Danh sách thể loại'), ['action' => 'index']) ?></td>
          <td><?= $this->Html->link(__('Thêm thể loại'), ['action' => 'add']) ?></td>
          <td><?= $this->Html->link(__('Danh sách thể loại cha'), ['controller' => 'Categories', 'action' => 'index']) ?></td>
          <td><?= $this->Html->link(__('Thêm thể loại cấp cha'), ['controller' => 'Categories', 'action' => 'add']) ?></td>
          <td><?= $this->Html->link(__('Danh sách tin tức'), ['controller' => 'Articles', 'action' => 'index']) ?></td>
          <td><?= $this->Html->link(__('Thêm tin tức'), ['controller' => 'Articles', 'action' => 'add']) ?></td>
        <tr>
      </table>
    </div>
  </div>
  <div class="row"> 
    <!-- left column -->
    <div class="col-md-12"> 
      <!-- general form elements -->
      <div class="box box-primary">
        <?= $this->Form->create($category) ?>
        <div class="box-body">
          <div class="form-group"><?php echo $this->Form->control('parent_id', ['options' => $parentCategories]);?></div>
          <div class="form-group"><?php echo $this->Form->control('name');        ?></div>
          <div class="form-group"><?php echo $this->Form->control('description');?></div>
          <div class="box-footer">
            <?php  echo $this->Form->button(__('Lưu'),["class"=>"btn btn-primary"]);//?>
          </div>
          <?= $this->Form->end() ?>
        </div>
      </div>
      <!-- /.box --> 
    </div>
    <!--/.col (left) --> 
  </div>
</section>
