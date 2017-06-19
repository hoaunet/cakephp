<?php $this->layout = "admin_template";
	  echo $this->Html->css('datatables/dataTables.bootstrap.css');
?>
<section class="content-header">
  <h1> <?= __('Thể loại') ?>  <small>Control panel</small> </h1>
  <ol class="breadcrumb">
    <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
     <li><?php echo $this->Html->link('Thể loại',['controller' => 'Categories', 'action' => 'index', '_full' => true]);?></li>
    <li class="active"><?= __('Xem Thể loại') ?> #<?=$category->id?></li>
  </ol>
</section>
<section class="content">
<div class="row">
	<div class="col-xs-12">
    <table width="100%" cellpadding="2" border="0" cellspacing="2">
    <tr> 
        <td><?= __('Actions') ?></td>
        <td><?= $this->Html->link(__('Sửa thể loại'), ['action' => 'edit', $category->id]) ?> </td>
        <td><?= $this->Form->postLink(__('Xóa thể loại'), ['action' => 'delete', $category->id], ['confirm' => __('Are you sure you want to delete # {0}?', $category->id)]) ?> </td>
        <td><?= $this->Html->link(__('Danh sách thể loại'), ['action' => 'index']) ?> </td>
        <td><?= $this->Html->link(__('Thêm thể loại'), ['action' => 'add']) ?> </td>
        <td><?= $this->Html->link(__('Danh sách thể loại cha'), ['controller' => 'Categories', 'action' => 'index']) ?> </td>
        <td><?= $this->Html->link(__('Thêm thể loại cấp cha'), ['controller' => 'Categories', 'action' => 'add']) ?></td>
        <td><?= $this->Html->link(__('Danh sách tin tức'), ['controller' => 'Articles', 'action' => 'index']) ?> </td>
        <td><?= $this->Html->link(__('Thêm tin tức'), ['controller' => 'Articles', 'action' => 'add']) ?> </td>
        <tr> 
  </table>
    </div>
</div>
<div class="categories view large-9 medium-8 columns content">
    <h3 style="color:#F00"><?= h($category->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Thể loại cấp cha') ?></th>
            <td><?= $category->has('parent_category') ? $this->Html->link($category->parent_category->name, ['controller' => 'Categories', 'action' => 'view', $category->parent_category->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($category->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Description') ?></th>
            <td><?= h($category->description) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($category->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Lft') ?></th>
            <td><?= $this->Number->format($category->lft) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Rght') ?></th>
            <td><?= $this->Number->format($category->rght) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($category->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($category->modified) ?></td>
        </tr>
    </table>
     <div class="box-body table-responsive">
        <h4 style="color:#F00"><?= __('Tin tức') ?></h4>
        <?php if (!empty($category->articles)): ?>
        <table id="example1" class="table table-bordered table-hover">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Tiêu đề') ?></th>             
                
                <th scope="col"><?= __('Hình ảnh') ?></th>                
                <th scope="col"><?= __('Ngày tạo') ?></th>
                <th scope="col"><?= __('Ngày cập nhật') ?></th>                
                <th scope="col" class="actions"><?= __('Hành động') ?></th>
            </tr>
            <?php foreach ($category->articles as $articles): ?>
            <tr>
                <td><?= h($articles->id) ?></td>
                <td><?= $this->Html->link(__($articles->title), ['controller' => 'Articles', 'action' => 'view', $articles->id]) ?></td>                
                <td><?= h($articles->articles_image) ?></td>               
                <td><?= h($articles->created) ?></td>
                <td><?= h($articles->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Articles', 'action' => 'view', $articles->id]) ?> || 
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Articles', 'action' => 'edit', $articles->id]) ?> || 
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Articles', 'action' => 'delete', $articles->id], ['confirm' => __('Are you sure you want to delete # {0}?', $articles->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
     <div class="box-body table-responsive">
        <h4 style="color:#F00"><?= __('Thể loại') ?></h4>
        <?php if (!empty($category->child_categories)): ?>
        <table id="example2" class="table table-bordered table-hover">
            <tr>
                <th scope="col"><?= __('Id') ?></th>                
                <th scope="col"><?= __('Tên') ?></th>
                <th scope="col"><?= __('Mô tả') ?></th>
                <th scope="col"><?= __('Ngày tạo') ?></th>
                <th scope="col"><?= __('Ngày cập nhật') ?></th>
                <th scope="col" class="actions"><?= __('Hành động') ?></th>
            </tr>
            <?php foreach ($category->child_categories as $childCategories): ?>
            <tr>
                <td><?= h($childCategories->id) ?></td>           
                
                <td><?=$this->Html->link(__(h($childCategories->name)), ['controller' => 'Categories', 'action' => 'view', $childCategories->id]) ?></td>
                <td><?= h($childCategories->description) ?></td>
                <td><?= h($childCategories->created) ?></td>
                <td><?= h($childCategories->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Xem'), ['controller' => 'Categories', 'action' => 'view', $childCategories->id]) ?> ||                     
					<?= $this->Html->link(__('Sửa'), ['controller' => 'Categories', 'action' => 'edit', $childCategories->id]) ?> || 
                    <?= $this->Form->postLink(__('Xóa'), ['controller' => 'Categories', 'action' => 'delete', $childCategories->id], ['confirm' => __('Are you sure you want to delete # {0}?', $childCategories->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</section>

<?php echo $this->Html->script('plugins/datatables/jquery.dataTables.js');//DATA TABES SCRIPT
	  echo $this->Html->script('plugins/datatables/dataTables.bootstrap.js');//DATA TABES SCRIPT

?><script type="text/javascript">
            $(function() {
                $("#example1").dataTable();
                $("#example2").dataTable();
            });
        </script>
