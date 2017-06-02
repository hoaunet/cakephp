<!-- File: src/Template/Articles/index.ctp (delete links added) -->
<?php $this->layout = "admin_template";?>
<!-- Content Header (Page header) -->

<section class="content-header">
  <h1> Blog articles <small>Control panel</small> </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Blog articles</li>
  </ol>
</section>
<div class="row col-xs-12" style="height:35px; color:#fff"><span class="label label-primary" >
  <?= $this->Html->link('Add Article', ['action' => 'add', 'style'=>'height:35px; color:#fff']) ?>
  </span> </div>
<div class="box-body table-responsive no-padding">
  <table class="table table-hover">
    <tr>
      <th>ID</th>
      <th>Title</th>
      <th>Created</th>
      <th>Actions</th>
    </tr>
    <?php foreach ($articles as $article): ?>
    <tr>
      <td><?= $article->id ?></td>
      <td><?= $this->Html->link($article->title, ['action' => 'view', $article->id]) ?></td>
      <td><?= $article->created->format(DATE_RFC850) ?></td>
      <td><?= $this->Form->postLink(
                'Delete',
                ['action' => 'delete', $article->id],
                ['confirm' => 'Are you sure?'])
            ?>
        <span style="padding-left:5px">||</span>
        <?= $this->Html->link('Edit', ['action' => 'edit', $article->id]) ?></td>
    </tr>
    <?php endforeach; ?>
  </table>
</div>
