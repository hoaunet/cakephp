<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Case User Email'), ['action' => 'edit', $caseUserEmail->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Case User Email'), ['action' => 'delete', $caseUserEmail->id], ['confirm' => __('Are you sure you want to delete # {0}?', $caseUserEmail->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Case User Emails'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Case User Email'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Easycases'), ['controller' => 'Easycases', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Easycase'), ['controller' => 'Easycases', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="caseUserEmails view large-9 medium-8 columns content">
    <h3><?= h($caseUserEmail->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Easycase') ?></th>
            <td><?= $caseUserEmail->has('easycase') ? $this->Html->link($caseUserEmail->easycase->title, ['controller' => 'Easycases', 'action' => 'view', $caseUserEmail->easycase->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $caseUserEmail->has('user') ? $this->Html->link($caseUserEmail->user->name, ['controller' => 'Users', 'action' => 'view', $caseUserEmail->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($caseUserEmail->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ismail') ?></th>
            <td><?= $this->Number->format($caseUserEmail->ismail) ?></td>
        </tr>
    </table>
</div>
