<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Salary $salary
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Salary'), ['action' => 'edit', $salary->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Salary'), ['action' => 'delete', $salary->id], ['confirm' => __('Are you sure you want to delete # {0}?', $salary->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Salaries'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Salary'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="salaries view large-9 medium-8 columns content">
    <h3><?= h($salary->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($salary->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($salary->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Is Active') ?></th>
            <td><?= $this->Number->format($salary->is_active) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($salary->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($salary->modified) ?></td>
        </tr>
    </table>
</div>
