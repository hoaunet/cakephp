<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Product Category'), ['action' => 'edit', $productCategory->categories_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Product Category'), ['action' => 'delete', $productCategory->categories_id], ['confirm' => __('Are you sure you want to delete # {0}?', $productCategory->categories_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Product Categories'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Product Category'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Categories'), ['controller' => 'Categories', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Category'), ['controller' => 'Categories', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Parent Product Categories'), ['controller' => 'ProductCategories', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Parent Product Category'), ['controller' => 'ProductCategories', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="productCategories view large-9 medium-8 columns content">
    <h3><?= h($productCategory->categories_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Category') ?></th>
            <td><?= $productCategory->has('category') ? $this->Html->link($productCategory->category->name, ['controller' => 'Categories', 'action' => 'view', $productCategory->category->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Categories Image') ?></th>
            <td><?= h($productCategory->categories_image) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Parent Product Category') ?></th>
            <td><?= $productCategory->has('parent_product_category') ? $this->Html->link($productCategory->parent_product_category->categories_id, ['controller' => 'ProductCategories', 'action' => 'view', $productCategory->parent_product_category->categories_id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sort Order') ?></th>
            <td><?= $this->Number->format($productCategory->sort_order) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date Added') ?></th>
            <td><?= h($productCategory->date_added) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Last Modified') ?></th>
            <td><?= h($productCategory->last_modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Product Categories') ?></h4>
        <?php if (!empty($productCategory->child_product_categories)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Categories Id') ?></th>
                <th scope="col"><?= __('Categories Image') ?></th>
                <th scope="col"><?= __('Parent Id') ?></th>
                <th scope="col"><?= __('Sort Order') ?></th>
                <th scope="col"><?= __('Date Added') ?></th>
                <th scope="col"><?= __('Last Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($productCategory->child_product_categories as $childProductCategories): ?>
            <tr>
                <td><?= h($childProductCategories->categories_id) ?></td>
                <td><?= h($childProductCategories->categories_image) ?></td>
                <td><?= h($childProductCategories->parent_id) ?></td>
                <td><?= h($childProductCategories->sort_order) ?></td>
                <td><?= h($childProductCategories->date_added) ?></td>
                <td><?= h($childProductCategories->last_modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'ProductCategories', 'action' => 'view', $childProductCategories->categories_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'ProductCategories', 'action' => 'edit', $childProductCategories->categories_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'ProductCategories', 'action' => 'delete', $childProductCategories->categories_id], ['confirm' => __('Are you sure you want to delete # {0}?', $childProductCategories->categories_id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
