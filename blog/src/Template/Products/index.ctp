<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Product'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Categories'), ['controller' => 'Categories', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Category'), ['controller' => 'Categories', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="products index large-9 medium-8 columns content">
    <h3><?= __('Products') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('products_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('products_quantity') ?></th>
                <th scope="col"><?= $this->Paginator->sort('products_model') ?></th>
                <th scope="col"><?= $this->Paginator->sort('products_image') ?></th>
                <th scope="col"><?= $this->Paginator->sort('products_price') ?></th>
                <th scope="col"><?= $this->Paginator->sort('products_date_added') ?></th>
                <th scope="col"><?= $this->Paginator->sort('products_last_modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('products_date_available') ?></th>
                <th scope="col"><?= $this->Paginator->sort('products_weight') ?></th>
                <th scope="col"><?= $this->Paginator->sort('products_status') ?></th>
                <th scope="col"><?= $this->Paginator->sort('products_tax_class_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('manufacturers_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('products_ordered') ?></th>
                <th scope="col"><?= $this->Paginator->sort('categories_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($products as $product): ?>
            <tr>
                <td><?= $product->has('product') ? $this->Html->link($product->product->products_id, ['controller' => 'Products', 'action' => 'view', $product->product->products_id]) : '' ?></td>
                <td><?= $this->Number->format($product->products_quantity) ?></td>
                <td><?= h($product->products_model) ?></td>
                <td><?= h($product->products_image) ?></td>
                <td><?= $this->Number->format($product->products_price) ?></td>
                <td><?= h($product->products_date_added) ?></td>
                <td><?= h($product->products_last_modified) ?></td>
                <td><?= h($product->products_date_available) ?></td>
                <td><?= $this->Number->format($product->products_weight) ?></td>
                <td><?= h($product->products_status) ?></td>
                <td><?= $this->Number->format($product->products_tax_class_id) ?></td>
                <td><?= $this->Number->format($product->manufacturers_id) ?></td>
                <td><?= $this->Number->format($product->products_ordered) ?></td>
                <td><?= $product->has('category') ? $this->Html->link($product->category->name, ['controller' => 'Categories', 'action' => 'view', $product->category->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $product->products_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $product->products_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $product->products_id], ['confirm' => __('Are you sure you want to delete # {0}?', $product->products_id)]) ?>
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
