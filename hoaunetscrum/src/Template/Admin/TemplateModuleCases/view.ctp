<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Template Module Case'), ['action' => 'edit', $templateModuleCase->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Template Module Case'), ['action' => 'delete', $templateModuleCase->id], ['confirm' => __('Are you sure you want to delete # {0}?', $templateModuleCase->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Template Module Cases'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Template Module Case'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Companies'), ['controller' => 'Companies', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Company'), ['controller' => 'Companies', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Projects'), ['controller' => 'Projects', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Project'), ['controller' => 'Projects', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="templateModuleCases view large-9 medium-8 columns content">
    <h3><?= h($templateModuleCase->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $templateModuleCase->has('user') ? $this->Html->link($templateModuleCase->user->name, ['controller' => 'Users', 'action' => 'view', $templateModuleCase->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Company') ?></th>
            <td><?= $templateModuleCase->has('company') ? $this->Html->link($templateModuleCase->company->name, ['controller' => 'Companies', 'action' => 'view', $templateModuleCase->company->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Project') ?></th>
            <td><?= $templateModuleCase->has('project') ? $this->Html->link($templateModuleCase->project->name, ['controller' => 'Projects', 'action' => 'view', $templateModuleCase->project->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($templateModuleCase->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Template Module Id') ?></th>
            <td><?= $this->Number->format($templateModuleCase->template_module_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($templateModuleCase->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($templateModuleCase->modified) ?></td>
        </tr>
    </table>
</div>
