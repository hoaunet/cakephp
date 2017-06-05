<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Case Setting'), ['action' => 'edit', $caseSetting->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Case Setting'), ['action' => 'delete', $caseSetting->id], ['confirm' => __('Are you sure you want to delete # {0}?', $caseSetting->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Case Settings'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Case Setting'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Projects'), ['controller' => 'Projects', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Project'), ['controller' => 'Projects', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Types'), ['controller' => 'Types', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Type'), ['controller' => 'Types', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="caseSettings view large-9 medium-8 columns content">
    <h3><?= h($caseSetting->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Project') ?></th>
            <td><?= $caseSetting->has('project') ? $this->Html->link($caseSetting->project->name, ['controller' => 'Projects', 'action' => 'view', $caseSetting->project->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Project Uniqid') ?></th>
            <td><?= h($caseSetting->project_uniqid) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Type') ?></th>
            <td><?= $caseSetting->has('type') ? $this->Html->link($caseSetting->type->name, ['controller' => 'Types', 'action' => 'view', $caseSetting->type->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Due Date') ?></th>
            <td><?= h($caseSetting->due_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($caseSetting->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $caseSetting->has('user') ? $this->Html->link($caseSetting->user->name, ['controller' => 'Users', 'action' => 'view', $caseSetting->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($caseSetting->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Assign To') ?></th>
            <td><?= $this->Number->format($caseSetting->assign_to) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Priority') ?></th>
            <td><?= $this->Number->format($caseSetting->priority) ?></td>
        </tr>
    </table>
</div>
