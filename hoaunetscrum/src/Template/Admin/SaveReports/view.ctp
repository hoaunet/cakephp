<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Save Report'), ['action' => 'edit', $saveReport->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Save Report'), ['action' => 'delete', $saveReport->id], ['confirm' => __('Are you sure you want to delete # {0}?', $saveReport->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Save Reports'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Save Report'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="saveReports view large-9 medium-8 columns content">
    <h3><?= h($saveReport->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $saveReport->has('user') ? $this->Html->link($saveReport->user->name, ['controller' => 'Users', 'action' => 'view', $saveReport->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ip') ?></th>
            <td><?= h($saveReport->ip) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($saveReport->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Rpt Type') ?></th>
            <td><?= $this->Number->format($saveReport->rpt_type) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Frm Dt') ?></th>
            <td><?= h($saveReport->frm_dt) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('To Dt') ?></th>
            <td><?= h($saveReport->to_dt) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($saveReport->created) ?></td>
        </tr>
    </table>
</div>
