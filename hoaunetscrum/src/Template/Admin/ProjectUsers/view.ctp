<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Project User'), ['action' => 'edit', $projectUser->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Project User'), ['action' => 'delete', $projectUser->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projectUser->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Project Users'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Project User'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Projects'), ['controller' => 'Projects', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Project'), ['controller' => 'Projects', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Companies'), ['controller' => 'Companies', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Company'), ['controller' => 'Companies', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="projectUsers view large-9 medium-8 columns content">
    <h3><?= h($projectUser->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Project') ?></th>
            <td><?= $projectUser->has('project') ? $this->Html->link($projectUser->project->name, ['controller' => 'Projects', 'action' => 'view', $projectUser->project->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Company') ?></th>
            <td><?= $projectUser->has('company') ? $this->Html->link($projectUser->company->name, ['controller' => 'Companies', 'action' => 'view', $projectUser->company->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $projectUser->has('user') ? $this->Html->link($projectUser->user->name, ['controller' => 'Users', 'action' => 'view', $projectUser->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($projectUser->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Istype') ?></th>
            <td><?= $this->Number->format($projectUser->istype) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Default Email') ?></th>
            <td><?= $this->Number->format($projectUser->default_email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dt Visited') ?></th>
            <td><?= h($projectUser->dt_visited) ?></td>
        </tr>
    </table>
</div>
