<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Manufacturer'), ['action' => 'edit', $manufacturer->manufacturers_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Manufacturer'), ['action' => 'delete', $manufacturer->manufacturers_id], ['confirm' => __('Are you sure you want to delete # {0}?', $manufacturer->manufacturers_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Manufacturers'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Manufacturer'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Manufacturers'), ['controller' => 'Manufacturers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Manufacturer'), ['controller' => 'Manufacturers', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="manufacturers view large-9 medium-8 columns content">
    <h3><?= h($manufacturer->manufacturers_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Manufacturer') ?></th>
            <td><?= $manufacturer->has('manufacturer') ? $this->Html->link($manufacturer->manufacturer->manufacturers_id, ['controller' => 'Manufacturers', 'action' => 'view', $manufacturer->manufacturer->manufacturers_id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Manufacturers Name') ?></th>
            <td><?= h($manufacturer->manufacturers_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Manufacturers Image') ?></th>
            <td><?= h($manufacturer->manufacturers_image) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date Added') ?></th>
            <td><?= h($manufacturer->date_added) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Last Modified') ?></th>
            <td><?= h($manufacturer->last_modified) ?></td>
        </tr>
    </table>
</div>
