<?php $this->layout = "admin_template";
     echo $this->Html->css('datatables/dataTables.bootstrap.css');//bootstrap 3.0.2 ?>

<section class="content-header">
  <h1> <?= __('Sản phẩm') ?><small>Control panel</small> </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">
      <?= __('Sản phẩm') ?>
    </li>
  </ol>
</section>
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <table width="100%" cellpadding="2" border="0" cellspacing="2">
        <tr>
          <td ><?= __('Actions') ?></td>
          <td><?= $this->Html->link(__('Thêm sản phẩm'), ['action' => 'add']) ?></td>
          <td><?= $this->Html->link(__('Danh sách thể loại'), ['controller' => 'Productcategories', 'action' => 'index']) ?></td>
          <td><?= $this->Html->link(__('Thêm thể loại'), ['controller' => 'Productcategories', 'action' => 'add']) ?></td>
        </tr>
      </table>
    </div>
  </div>
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
          <th scope="col"><?= $this->Paginator->sort('ID') ?></th>
          <th scope="col"><?= $this->Paginator->sort('Tên') ?></th>
          <th scope="col"><?= $this->Paginator->sort('Số lượng') ?></th>
          <th scope="col"><?= $this->Paginator->sort('Model') ?></th>          
          <th scope="col"><?= $this->Paginator->sort('Giá') ?></th>
          <th scope="col"><?= $this->Paginator->sort('Ngày tạo') ?></th>         
          <th scope="col"><?= $this->Paginator->sort('Ngày bán') ?></th>
          <th scope="col"><?= $this->Paginator->sort('Trạng thái') ?></th>
          <th scope="col"><?= $this->Paginator->sort('Nhà SX') ?></th>
          <th scope="col"><?= $this->Paginator->sort('Thứ tự') ?></th>
          <th scope="col"><?= $this->Paginator->sort('Thể loại') ?></th>
          <th scope="col" class="actions"><?= __('Hành động') ?></th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($products as $product): ?>        
        <tr>
          <td><?= $product->has('product') ? $this->Html->link($product->product->id, ['controller' => 'Products', 'action' => 'view', $product->product->id]) : '' ?></td>
          <td><?= $this->Html->link(_($product->products_name), ['action' => 'view', $product->products_id]) ?></td>
          <td><?= $this->Number->format($product->products_quantity) ?></td>
          <td><?= h($product->products_model) ?></td>
          <td><?= $this->Number->format($product->products_price) ?></td>
          <td><?= h($product->products_date_added) ?></td>          
          <td><?= h($product->products_date_available) ?></td>          
          <td><?= h($product->products_status) ?></td>
          <td><?= $product->has('manufacturer') ? $this->Html->link($product->manufacturer->manufacturers_name, ['controller' => 'Manufacturers_names', 'action' => 'view', $product->manufacturer->id]) : '' ?></td>
          <td><?= $this->Number->format($product->products_ordered) ?></td>
          <td><?= $product->has('productcategory') ? $this->Html->link($product->productcategory->categories_name, ['controller' => 'Productcategories', 'action' => 'view', $product->productcategory->id]) : '' ?></td>
          <td class="actions"><?= $this->Html->link(__('Xem'), ['action' => 'view', $product->products_id]) ?>
            <?= $this->Html->link(__('Sửa'), ['action' => 'edit', $product->products_id]) ?>
            <?= $this->Form->postLink(__('Xóa'), ['action' => 'delete', $product->products_id], ['confirm' => __('Are you sure you want to delete # {0}?', $product->products_id)]) ?></td>
        </tr>
        <?php endforeach; ?>
      </tbody>
       <tfoot>
              <tr>
                 <th scope="col"><?= $this->Paginator->sort('ID') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('Tên') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('Số lượng') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('Model') ?></th>          
                  <th scope="col"><?= $this->Paginator->sort('Giá') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('Ngày tạo') ?></th>         
                  <th scope="col"><?= $this->Paginator->sort('Ngày bán') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('Trạng thái') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('Nhà SX') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('Thứ tự') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('Thể loại') ?></th>
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
