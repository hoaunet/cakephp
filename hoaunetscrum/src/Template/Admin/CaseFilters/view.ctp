<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Case Filter'), ['action' => 'edit', $caseFilter->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Case Filter'), ['action' => 'delete', $caseFilter->id], ['confirm' => __('Are you sure you want to delete # {0}?', $caseFilter->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Case Filters'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Case Filter'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="caseFilters view large-9 medium-8 columns content">
    <h3><?= h($caseFilter->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $caseFilter->has('user') ? $this->Html->link($caseFilter->user->name, ['controller' => 'Users', 'action' => 'view', $caseFilter->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($caseFilter->id) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Order') ?></h4>
        <?= $this->Text->autoParagraph(h($caseFilter->order)); ?>
    </div>
</div>
