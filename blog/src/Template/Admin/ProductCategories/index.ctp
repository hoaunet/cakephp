<?php $this->layout = "admin_template"; 
	  echo $this->Html->css('datatables/dataTables.bootstrap.css');	
?>
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1> <?= __('Thể loại sản phẩm') ?> <small>Control panel</small> </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active"><?= __('Thể loại sản phẩm') ?></li>
  </ol>
</section>
<div class="row " ><div class="col-xs-12"><span class="label label-primary" >
  <?= $this->Html->link('Thêm thể loại sản phẩm', ['controller' => 'Categories','action' => 'add'],[ 'style'=>'height:35px; color:#fff']) ?>
  </span> </div>
</div>
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title"><?= __('Thể loại sản phẩm') ?></h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive">
          <table id="example1" class="table table-bordered table-hover">
	        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Tên') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Hình ảnh') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Cấp bậc') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Thứ tự') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Ngày tạo') ?></th>
                <th scope="col" class="actions"><?= __('Hành động') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($productcategories as $productcategory): ?>
            <tr>
                <td><?= $this->Number->format($productcategory->id) ?></td>
                <td><?= h($productcategory->categories_name) ?></td>
                <td><?= h($productcategory->categories_image) ?></td>
                <td><?= $productcategory->has('parent_productcategory') ? $this->Html->link($productcategory->parent_productcategory->id, ['controller' => 'Productcategories', 'action' => 'view', $productcategory->parent_productcategory->id]) : '' ?></td>
                <td><?= $this->Number->format($productcategory->sort_order) ?></td>
                <td><?= h($productcategory->date_added) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Xem chi tiết'), ['action' => 'view', $productcategory->id]) ?><span style="padding-left:5px">||</span>
                    <?= $this->Html->link(__('Chỉnh sửa'), ['action' => 'edit', $productcategory->id]) ?><span style="padding-left:5px">||</span>
                    <?= $this->Form->postLink(__('Xóa'), ['action' => 'delete', $productcategory->id], ['confirm' => __('Are you sure you want to delete # {0}?', $productcategory->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
        <tfoot>
              <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Tên') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Hình ảnh') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Cấp bậc') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Thứ tự') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Ngày tạo') ?></th>
                
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
