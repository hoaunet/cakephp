<?php $this->layout = "admin_template"; 
	  echo $this->Html->css('datatables/dataTables.bootstrap.css');	
?>

<section class="content-header">
  <h1>
    <?= __('Công ty') ?>
    <small>Control panel</small> </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
    <li class="active">
      <?= __('Công ty') ?>
    </li>
  </ol>
</section>
<div class="row " >
  <div class="col-xs-12"><span class="label label-primary" >
    <?= $this->Html->link('Thêm Công ty', ['controller' => 'Companies','action' => 'add'],[ 'style'=>'height:45px; color:#fff']) ?>
    </span> <span class="label label-primary" >  
    
     <?= $this->Html->link(__('Thêm nhân viên'), ['controller' => 'Companyusers', 'action' => 'add'],[ 'style'=>'height:45px; color:#fff']) ?>
    </span> <span class="label label-primary" ><?= $this->Html->link(__('Danh sách nhân viên'), ['controller' => 'Companyusers', 'action' => 'index'],[ 'style'=>'height:45px; color:#fff']) ?></span></div>
</div>

<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">
            <?= __('Công ty') ?>
          </h3>
        </div>
        <div class="box-body table-responsive">
          <table id="example1" class="table table-bordered table-hover">
            <thead>
              <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('seo_url') ?></th>
                <th scope="col"><?= $this->Paginator->sort('website') ?></th>
                <th scope="col"><?= $this->Paginator->sort('address') ?></th>
                <th scope="col"><?= $this->Paginator->sort('contact_phone') ?></th>
                <th scope="col"><?= $this->Paginator->sort('masothue') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('is_active') ?></th>
                <th scope="col" class="actions"></th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($companies as $company): ?>
              <tr>
                <td><?= $this->Number->format($company->id) ?></td>
                <td><?= h($company->name) ?></td>
                <td><?= h($company->seo_url) ?></td>
                <td><?= h($company->website) ?></td>
                <td><?= h($company->address) ?></td>
                <td><?= h($company->contact_phone) ?></td>
                <td><?= h($company->masothue) ?></td>
                <td><?= h($company->created) ?></td>
                <td><?= h($company->modified) ?></td>
                <td><?= $this->Number->format($company->is_active) ?></td>
                <td class="actions"><?= $this->Html->link(__('View'), ['action' => 'view', $company->id]) ?>
                  <?= $this->Html->link(__('Edit'), ['action' => 'edit', $company->id]) ?>
                  <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $company->id], ['confirm' => __('Are you sure you want to delete # {0}?', $company->id)]) ?></td>
              </tr>
              <?php endforeach; ?>
            </tbody>
            <tr>
                <td ><?= __('ID') ?></td>
                <td ><?= __('Tên') ?></td>
                <th><?= __('Url') ?></th>
                <th scope="col"><?= $this->Paginator->sort('website') ?></th>
                <th scope="col"><?= $this->Paginator->sort('address') ?></th>
                <th scope="col"><?= $this->Paginator->sort('contact_phone') ?></th>
                <th scope="col"><?= $this->Paginator->sort('masothue') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('is_active') ?></th>
                <th ></th>
              </tr>
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