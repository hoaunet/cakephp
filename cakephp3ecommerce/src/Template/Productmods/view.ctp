<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Productmod'), ['action' => 'edit', $productmod->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Productmod'), ['action' => 'delete', $productmod->id], ['confirm' => __('Are you sure you want to delete # {0}?', $productmod->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Productmods'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Productmod'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Products'), ['controller' => 'Products', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Product'), ['controller' => 'Products', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="productmods view large-9 medium-8 columns content">
    <h3><?= h($productmod->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Product') ?></th>
            <td><?= $productmod->has('product') ? $this->Html->link($productmod->product->name, ['controller' => 'Products', 'action' => 'view', $productmod->product->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sku') ?></th>
            <td><?= h($productmod->sku) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($productmod->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Value') ?></th>
            <td><?= h($productmod->value) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($productmod->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Price') ?></th>
            <td><?= $this->Number->format($productmod->price) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Weight') ?></th>
            <td><?= $this->Number->format($productmod->weight) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Active') ?></th>
            <td><?= $this->Number->format($productmod->active) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Views') ?></th>
            <td><?= $this->Number->format($productmod->views) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($productmod->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($productmod->modified) ?></td>
        </tr>
    </table>
</div>
