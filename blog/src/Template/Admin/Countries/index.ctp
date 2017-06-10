<?php $this->layout = "admin_template"; 
	  echo $this->Html->css('datatables/dataTables.bootstrap.css'); 	
?>
<section class="content-header">
  <h1> <?= __('Quốc gia') ?> <small>Control panel</small> </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active"><?= __('Quốc gia') ?></li>
  </ol>
</section>
<div class="row " ><div class="col-xs-12"><span class="label label-primary" >
  <?= $this->Html->link('Thêm quốc gia', ['controller' => 'Countries','action' => 'add'],[ 'style'=>'height:35px; color:#fff']) ?>
  </span> </div>
</div>
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title"><?= __('Quốc gia') ?></h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive">
          <table id="example1" class="table table-bordered table-hover">
           <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('ID') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Tên') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ISO code 2') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ISO code 3') ?></th>                
                <th scope="col" class="actions"><?= __('Hành động') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($countries as $country): ?>
            <tr>
                <td><?= $this->Number->format($country->id) ?></td>
                <td><?= h($country->countries_name) ?></td>
                <td><?= h($country->countries_iso_code_2) ?></td>
                <td><?= h($country->countries_iso_code_3) ?></td>
                
                <td class="actions">
                    <?= $this->Html->link(__('Xem'), ['action' => 'view', $country->id]) ?>  ||  
                    <?= $this->Html->link(__('Chỉnh sửa'), ['action' => 'edit', $country->id]) ?>  ||  
                    <?= $this->Form->postLink(__('Xóa'), ['action' => 'delete', $country->id], ['confirm' => __('Bạn thật sự muốn xóa # {0} không?', $country->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </tbody>
            <tfoot>
              <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Tên') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ISO code 2') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ISO code 3') ?></th>                               
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

