<?php $this->layout = "admin_template";
	  echo $this->Html->css('datatables/dataTables.bootstrap.css');      
?>
<section class="content-header">
  <h1> <?= __('Thể loại') ?>  <small>Control panel</small> </h1>
  <ol class="breadcrumb">
    <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
     <li><?php echo $this->Html->link('Thể loại',['controller' => 'Productcategories', 'action' => 'index', '_full' => true]);?></li>
    <li class="active"><?= __('Xem Thể loại') ?> #<?=$productcategory->id?></li>
  </ol>
</section>
<section class="content">
<div class="row">
	<div class="col-xs-12">
    <table width="100%" cellpadding="2" border="0" cellspacing="2">
    <tr> 
        <td><?= __('Actions') ?></td>
        <td><?= $this->Html->link(__('Sửa thể loại'), ['action' => 'edit', $productcategory->id]) ?> </td>
        <td><?= $this->Form->postLink(__('Xóa thể loại'), ['action' => 'delete', $productcategory->id], ['confirm' => __('Are you sure you want to delete # {0}?', $productcategory->id)]) ?> </td>
        <td><?= $this->Html->link(__('Danh sách thể loại'), ['action' => 'index']) ?> </td>
        <td><?= $this->Html->link(__('Thêm thể loại'), ['action' => 'add']) ?> </td>
        <td><?= $this->Html->link(__('Danh sách thể loại cha'), ['controller' => 'Productcategories', 'action' => 'index']) ?> </td>
        <td><?= $this->Html->link(__('Thêm thể loại cấp cha'), ['controller' => 'Productcategories', 'action' => 'add']) ?></td>
        <td><?= $this->Html->link(__('Danh sách sản phẩm'), ['controller' => 'Products', 'action' => 'index']) ?> </td>
        <td><?= $this->Html->link(__('Thêm sản phẩm'), ['controller' => 'Products', 'action' => 'add']) ?> </td>
        <tr> 
  </table>
    </div>
</div>

<div class="productcategories view large-9 medium-8 columns content">
    <h3><?= h($productcategory->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Tên') ?></th>
            <td><?= h($productcategory->categories_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Hình ảnh') ?></th>
            <td><?= h($productcategory->categories_image) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cấp cha') ?></th>
            <td><?= $productcategory->has('parent_productcategory') ? $this->Html->link($productcategory->parent_productcategory->id, ['controller' => 'Productcategories', 'action' => 'view', $productcategory->parent_productcategory->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($productcategory->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Thứ tự') ?></th>
            <td><?= $this->Number->format($productcategory->sort_order) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ngày tạo') ?></th>
            <td><?= h($productcategory->date_added) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ngày chỉnh sửa') ?></th>
            <td><?= h($productcategory->last_modified) ?></td>
        </tr>
    </table>
    <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title"><?= __('Thể loại sản phẩm') ?></h3>
        </div
    	<div class="box-body table-responsive">       
        <?php if (!empty($productcategory->child_productcategories)): ?>
        <table cellpadding="0" cellspacing="0" id="example1" class="table table-bordered table-hover">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Tên') ?></th>
                <th scope="col"><?= __('Hình ảnh') ?></th>
                <th scope="col"><?= __('Cấp cha') ?></th>
                <th scope="col"><?= __('Thứ tự') ?></th>
                <th scope="col"><?= __('Ngày tạo') ?></th>
                <th scope="col"><?= __('Ngày chỉnh sửa') ?></th>
                <th scope="col" class="actions"><?= __('Hành động') ?></th>
            </tr>
            <?php foreach ($productcategory->child_productcategories as $childProductcategories): ?>
            <tr>
                <td><?= h($childProductcategories->id) ?></td>
                <td><?= h($childProductcategories->categories_name) ?></td>
                <td><?= h($childProductcategories->categories_image) ?></td>
                <td><?= h($childProductcategories->parent_id) ?></td>
                <td><?= h($childProductcategories->sort_order) ?></td>
                <td><?= h($childProductcategories->date_added) ?></td>
                <td><?= h($childProductcategories->last_modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Xem'), ['controller' => 'Productcategories', 'action' => 'view', $childProductcategories->id]) ?>  ||  
                    <?= $this->Html->link(__('Sửa'), ['controller' => 'Productcategories', 'action' => 'edit', $childProductcategories->id]) ?>  || 
                    <?= $this->Form->postLink(__('Xóa'), ['controller' => 'Productcategories', 'action' => 'delete', $childProductcategories->id], ['confirm' => __('Bạn thật sự muốn xóa # {0} không?', $childProductcategories->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
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
