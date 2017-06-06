<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Product'), ['action' => 'edit', $product->products_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Product'), ['action' => 'delete', $product->products_id], ['confirm' => __('Are you sure you want to delete # {0}?', $product->products_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Products'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Product'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Products'), ['controller' => 'Products', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Product'), ['controller' => 'Products', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Categories'), ['controller' => 'Categories', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Category'), ['controller' => 'Categories', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="products view large-9 medium-8 columns content">
    <h3><?= h($product->products_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Product') ?></th>
            <td><?= $product->has('product') ? $this->Html->link($product->product->products_id, ['controller' => 'Products', 'action' => 'view', $product->product->products_id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Products Model') ?></th>
            <td><?= h($product->products_model) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Products Image') ?></th>
            <td><?= h($product->products_image) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Category') ?></th>
            <td><?= $product->has('category') ? $this->Html->link($product->category->name, ['controller' => 'Categories', 'action' => 'view', $product->category->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Products Quantity') ?></th>
            <td><?= $this->Number->format($product->products_quantity) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Products Price') ?></th>
            <td><?= $this->Number->format($product->products_price) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Products Weight') ?></th>
            <td><?= $this->Number->format($product->products_weight) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Products Tax Class Id') ?></th>
            <td><?= $this->Number->format($product->products_tax_class_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Manufacturers Id') ?></th>
            <td><?= $this->Number->format($product->manufacturers_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Products Ordered') ?></th>
            <td><?= $this->Number->format($product->products_ordered) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Products Date Added') ?></th>
            <td><?= h($product->products_date_added) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Products Last Modified') ?></th>
            <td><?= h($product->products_last_modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Products Date Available') ?></th>
            <td><?= h($product->products_date_available) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Products Status') ?></th>
            <td><?= $product->products_status ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
</div>
