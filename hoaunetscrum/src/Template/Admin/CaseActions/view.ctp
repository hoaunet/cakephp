<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Case Action'), ['action' => 'edit', $caseAction->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Case Action'), ['action' => 'delete', $caseAction->id], ['confirm' => __('Are you sure you want to delete # {0}?', $caseAction->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Case Actions'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Case Action'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Easycases'), ['controller' => 'Easycases', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Easycase'), ['controller' => 'Easycases', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="caseActions view large-9 medium-8 columns content">
    <h3><?= h($caseAction->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Easycase') ?></th>
            <td><?= $caseAction->has('easycase') ? $this->Html->link($caseAction->easycase->title, ['controller' => 'Easycases', 'action' => 'view', $caseAction->easycase->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $caseAction->has('user') ? $this->Html->link($caseAction->user->name, ['controller' => 'Users', 'action' => 'view', $caseAction->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($caseAction->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Action') ?></th>
            <td><?= $this->Number->format($caseAction->action) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dt Created') ?></th>
            <td><?= h($caseAction->dt_created) ?></td>
        </tr>
    </table>
</div>
