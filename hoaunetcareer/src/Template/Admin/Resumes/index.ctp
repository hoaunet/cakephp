<?php $this->layout = "admin_template"; 
	  echo $this->Html->css('datatables/dataTables.bootstrap.css');	
?>
<section class="content-header">
  <h1> <?= __('Ứng viên') ?><small>Control panel</small> </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
    <li class="active"><?= __('Ứng viên') ?></li>
  </ol>
</section>
<div class="row " >
  <div class="col-xs-12"><span class="label label-primary" >
    <?= $this->Html->link('Thêm Ứng viên', ['controller' => 'Careers','action' => 'add'],[ 'style'=>'height:45px; color:#fff']) ?>
    </span> </div>
</div>
<section class="content">
<div class="row">
    <div class="col-xs-12">
      <table width="100%" cellpadding="2" border="0" cellspacing="2">
        <tr>
          <td><?= $this->Html->link(__('New Resume'), ['action' => 'add']) ?></td>
          <td><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></td>
        <td><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></td>
        <td><?= $this->Html->link(__('List Careers'), ['controller' => 'Careers', 'action' => 'index']) ?></td>
        <td><?= $this->Html->link(__('New Career'), ['controller' => 'Careers', 'action' => 'add']) ?></td>
        <td><?= $this->Html->link(__('List Degrees'), ['controller' => 'Degrees', 'action' => 'index']) ?></td>
        <td><?= $this->Html->link(__('New Degree'), ['controller' => 'Degrees', 'action' => 'add']) ?></td>
        <td><?= $this->Html->link(__('List Levels'), ['controller' => 'Levels', 'action' => 'index']) ?></td>
        <td><?= $this->Html->link(__('New Level'), ['controller' => 'Levels', 'action' => 'add']) ?></td>
        <td><?= $this->Html->link(__('List Salaries'), ['controller' => 'Salaries', 'action' => 'index']) ?></td>
        <td><?= $this->Html->link(__('New Salary'), ['controller' => 'Salaries', 'action' => 'add']) ?></td>
        <td><?= $this->Html->link(__('List Schools'), ['controller' => 'Schools', 'action' => 'index']) ?></td>
        <td><?= $this->Html->link(__('New School'), ['controller' => 'Schools', 'action' => 'add']) ?></td>
        <tr>
      </table>
    </div>
  </div>
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">
            <?= __('Ứng viên') ?>
          </h3>
        </div>

<div class="box-body table-responsive">
          <table id="example1" class="table table-bordered table-hover">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('career_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('degree_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('level_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('salary_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('school_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('experience') ?></th>
                <th scope="col"><?= $this->Paginator->sort('address') ?></th>
                <th scope="col"><?= $this->Paginator->sort('uploadcv') ?></th>
                <th scope="col"><?= $this->Paginator->sort('lastcompany') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($resumes as $resume): ?>
            <tr>
                <td><?= $this->Number->format($resume->id) ?></td>
                <td><?= $resume->has('user') ? $this->Html->link($resume->user->name, ['controller' => 'Users', 'action' => 'view', $resume->user->id]) : '' ?></td>
                <td><?= $resume->has('career') ? $this->Html->link($resume->career->id, ['controller' => 'Careers', 'action' => 'view', $resume->career->id]) : '' ?></td>
                <td><?= $resume->has('degree') ? $this->Html->link($resume->degree->name, ['controller' => 'Degrees', 'action' => 'view', $resume->degree->id]) : '' ?></td>
                <td><?= $resume->has('level') ? $this->Html->link($resume->level->id, ['controller' => 'Levels', 'action' => 'view', $resume->level->id]) : '' ?></td>
                <td><?= $resume->has('salary') ? $this->Html->link($resume->salary->name, ['controller' => 'Salaries', 'action' => 'view', $resume->salary->id]) : '' ?></td>
                <td><?= $resume->has('school') ? $this->Html->link($resume->school->name, ['controller' => 'Schools', 'action' => 'view', $resume->school->id]) : '' ?></td>
                <td><?= $this->Number->format($resume->experience) ?></td>
                <td><?= h($resume->address) ?></td>
                <td><?= h($resume->uploadcv) ?></td>
                <td><?= h($resume->lastcompany) ?></td>
                <td><?= h($resume->created) ?></td>
                <td><?= h($resume->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $resume->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $resume->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $resume->id], ['confirm' => __('Are you sure you want to delete # {0}?', $resume->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
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
