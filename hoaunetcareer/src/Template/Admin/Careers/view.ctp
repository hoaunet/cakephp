<?php $this->layout = "admin_template";
	  echo $this->Html->css('datatables/dataTables.bootstrap.css');
?>

<section class="content-header">
  <h1> <?= __('Ngành nghề') ?>  <small>Control panel</small> </h1>
  <ol class="breadcrumb">
    <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
     <li><?php echo $this->Html->link('Articles',['controller' => 'Careers', 'action' => 'index', '_full' => true]);?></li>
    <li class="active"><?= __('Xem Ngành nghề') ?> #<?=$career->id?></li>
  </ol>
</section>

<section class="content">
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Career'), ['action' => 'edit', $career->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Career'), ['action' => 'delete', $career->id], ['confirm' => __('Are you sure you want to delete # {0}?', $career->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Careers'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Career'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Parent Careers'), ['controller' => 'Careers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Parent Career'), ['controller' => 'Careers', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="careers view large-9 medium-8 columns content">
    <h3><?= h($career->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Career Name') ?></th>
            <td><?= h($career->career_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Parent Career') ?></th>
            <td><?= $career->has('parent_career') ? $this->Html->link($career->parent_career->id, ['controller' => 'Careers', 'action' => 'view', $career->parent_career->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($career->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $this->Number->format($career->status) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Ngành nghề') ?></h4>
        <?php if (!empty($career->child_careers)): ?>
        <table id="example1" class="table table-bordered table-hover">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Career Name') ?></th>
                <th scope="col"><?= __('Parent Id') ?></th>
                <th scope="col"><?= __('Status') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($career->child_careers as $childCareers): ?>
            <tr>
                <td><?= h($childCareers->id) ?></td>
                <td><?= h($childCareers->career_name) ?></td>
                <td><?= h($childCareers->parent_id) ?></td>
                <td><?= h($childCareers->status) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Careers', 'action' => 'view', $childCareers->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Careers', 'action' => 'edit', $childCareers->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Careers', 'action' => 'delete', $childCareers->id], ['confirm' => __('Are you sure you want to delete # {0}?', $childCareers->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
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
