<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Product Category'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Categories'), ['controller' => 'Categories', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Category'), ['controller' => 'Categories', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="productCategories index large-9 medium-8 columns content">
    <h3><?= __('Product Categories') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('categories_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('categories_image') ?></th>
                <th scope="col"><?= $this->Paginator->sort('parent_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sort_order') ?></th>
                <th scope="col"><?= $this->Paginator->sort('date_added') ?></th>
                <th scope="col"><?= $this->Paginator->sort('last_modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($productCategories as $productCategory): ?>
            <tr>
                <td><?= $productCategory->has('category') ? $this->Html->link($productCategory->category->name, ['controller' => 'Categories', 'action' => 'view', $productCategory->category->id]) : '' ?></td>
                <td><?= h($productCategory->categories_image) ?></td>
                <td><?= $productCategory->has('parent_product_category') ? $this->Html->link($productCategory->parent_product_category->categories_id, ['controller' => 'ProductCategories', 'action' => 'view', $productCategory->parent_product_category->categories_id]) : '' ?></td>
                <td><?= $this->Number->format($productCategory->sort_order) ?></td>
                <td><?= h($productCategory->date_added) ?></td>
                <td><?= h($productCategory->last_modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $productCategory->categories_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $productCategory->categories_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $productCategory->categories_id], ['confirm' => __('Are you sure you want to delete # {0}?', $productCategory->categories_id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
