<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Project Template'), ['action' => 'edit', $projectTemplate->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Project Template'), ['action' => 'delete', $projectTemplate->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projectTemplate->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Project Templates'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Project Template'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Companies'), ['controller' => 'Companies', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Company'), ['controller' => 'Companies', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="projectTemplates view large-9 medium-8 columns content">
    <h3><?= h($projectTemplate->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $projectTemplate->has('user') ? $this->Html->link($projectTemplate->user->name, ['controller' => 'Users', 'action' => 'view', $projectTemplate->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Company') ?></th>
            <td><?= $projectTemplate->has('company') ? $this->Html->link($projectTemplate->company->name, ['controller' => 'Companies', 'action' => 'view', $projectTemplate->company->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Module Name') ?></th>
            <td><?= h($projectTemplate->module_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($projectTemplate->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Is Default') ?></th>
            <td><?= $this->Number->format($projectTemplate->is_default) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Is Active') ?></th>
            <td><?= $this->Number->format($projectTemplate->is_active) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($projectTemplate->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($projectTemplate->modified) ?></td>
        </tr>
    </table>
</div>
