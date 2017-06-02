<!-- File: src/Template/Articles/index.ctp (delete links added) -->
<?php $this->layout = "admin_template";?>
<!-- Content Header (Page header) -->

<section class="content-header">
  <h1> Categories <small>Control panel</small> </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active"><?= __('Add Category') ?></li>
  </ol>
</section>
<section class="content">
<div class="row">
	<div class="col-xs-12">
    <table width="100%" cellpadding="2" border="0" cellspacing="2">
    <tr> 
        <td><?= __('Actions') ?></td>
        <td><?= $this->Html->link(__('Edit Category'), ['action' => 'edit', $category->id]) ?> </td>
        <td><?= $this->Form->postLink(__('Delete Category'), ['action' => 'delete', $category->id], ['confirm' => __('Are you sure you want to delete # {0}?', $category->id)]) ?> </td>
        <td><?= $this->Html->link(__('List Categories'), ['action' => 'index']) ?> </td>
        <td><?= $this->Html->link(__('New Category'), ['action' => 'add']) ?> </td>
        <td><?= $this->Html->link(__('List Parent Categories'), ['controller' => 'Categories', 'action' => 'index']) ?> </td>
        <td><?= $this->Html->link(__('New Parent Category'), ['controller' => 'Categories', 'action' => 'add']) ?></td>
        <td><?= $this->Html->link(__('List Articles'), ['controller' => 'Articles', 'action' => 'index']) ?> </td>
        <td><?= $this->Html->link(__('New Article'), ['controller' => 'Articles', 'action' => 'add']) ?> </td>
        <tr> 
  </table>
    </div>
</div>
<div class="categories view large-9 medium-8 columns content">
    <h3><?= h($category->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Parent Category') ?></th>
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
    <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">
            <?= __('Related Articles') ?>
          </h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive">
        <?php if (!empty($category->articles)): ?>
          <table id="example1" class="table table-bordered table-hover">
            <thead>
              <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Title') ?></th>
                <th scope="col"><?= __('Body') ?></th>
                <th scope="col"><?= __('Category Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
              </tr>
            </thead>
            <tbody>
               <?php foreach ($category->articles as $articles): ?>
              <tr>
                <td><?= h($articles->id) ?></td>
                <td><?= h($articles->title) ?></td>
                <td><?= h($articles->body) ?></td>
                <td><?= h($articles->category_id) ?></td>
                <td><?= h($articles->created) ?></td>
                <td><?= h($articles->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Articles', 'action' => 'view', $articles->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Articles', 'action' => 'edit', $articles->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Articles', 'action' => 'delete', $articles->id], ['confirm' => __('Are you sure you want to delete # {0}?', $articles->id)]) ?>
                </td>
              </tr>
              <?php endforeach; ?>
            </tbody>
            <tfoot>
              <tr>
                <th ><?= __('Id') ?></th>
                <th ><?= __('Title') ?></th>
                <th ><?= __('Body') ?></th>
                <th ><?= __('Category Id') ?></th>
                <th ><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th></th>
              </tr>
            </tfoot>
          </table>
           <?php endif; ?>
        </div>
        <!-- /.box-body --> 
      </div>
      <!-- /.box --> 
    </div>
  </div>
    <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">
            <?= __('Related Categories') ?>
          </h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive">
        <?php if (!empty($category->child_categories)): ?>
          <table id="example2" class="table table-bordered table-hover">
            <thead>
              <tr>
                 <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Parent Id') ?></th>
                <th scope="col"><?= __('Lft') ?></th>
                <th scope="col"><?= __('Rght') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Description') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
              </tr>
            </thead>
            <tbody>
               <?php foreach ($category->child_categories as $childCategories): ?>
              <tr>
                 <td><?= h($childCategories->id) ?></td>
                <td><?= h($childCategories->parent_id) ?></td>
                <td><?= h($childCategories->lft) ?></td>
                <td><?= h($childCategories->rght) ?></td>
                <td><?= h($childCategories->name) ?></td>
                <td><?= h($childCategories->description) ?></td>
                <td><?= h($childCategories->created) ?></td>
                <td><?= h($childCategories->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Categories', 'action' => 'view', $childCategories->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Categories', 'action' => 'edit', $childCategories->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Categories', 'action' => 'delete', $childCategories->id], ['confirm' => __('Are you sure you want to delete # {0}?', $childCategories->id)]) ?>
                </td>
              </tr>
              <?php endforeach; ?>
            </tbody>
            <tfoot>
              <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Parent Id') ?></th>
                <th><?= __('Lft') ?></th>
                <th><?= __('Rght') ?></th>
                <th><?= __('Name') ?></th>
                <th><?= __('Description') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th></th>
              </tr>
            </tfoot>
          </table>
           <?php endif; ?>
        </div>
        <!-- /.box-body --> 
      </div>
      <!-- /.box --> 
    </div>
  </div>
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