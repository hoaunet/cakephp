<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Case Recent'), ['action' => 'edit', $caseRecent->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Case Recent'), ['action' => 'delete', $caseRecent->id], ['confirm' => __('Are you sure you want to delete # {0}?', $caseRecent->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Case Recents'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Case Recent'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Easycases'), ['controller' => 'Easycases', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Easycase'), ['controller' => 'Easycases', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Companies'), ['controller' => 'Companies', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Company'), ['controller' => 'Companies', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Projects'), ['controller' => 'Projects', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Project'), ['controller' => 'Projects', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="caseRecents view large-9 medium-8 columns content">
    <h3><?= h($caseRecent->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Easycase') ?></th>
            <td><?= $caseRecent->has('easycase') ? $this->Html->link($caseRecent->easycase->title, ['controller' => 'Easycases', 'action' => 'view', $caseRecent->easycase->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Company') ?></th>
            <td><?= $caseRecent->has('company') ? $this->Html->link($caseRecent->company->name, ['controller' => 'Companies', 'action' => 'view', $caseRecent->company->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $caseRecent->has('user') ? $this->Html->link($caseRecent->user->name, ['controller' => 'Users', 'action' => 'view', $caseRecent->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Project') ?></th>
            <td><?= $caseRecent->has('project') ? $this->Html->link($caseRecent->project->name, ['controller' => 'Projects', 'action' => 'view', $caseRecent->project->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($caseRecent->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dt Created') ?></th>
            <td><?= h($caseRecent->dt_created) ?></td>
        </tr>
    </table>
</div>
