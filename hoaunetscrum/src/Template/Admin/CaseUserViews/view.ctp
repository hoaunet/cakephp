<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Case User View'), ['action' => 'edit', $caseUserView->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Case User View'), ['action' => 'delete', $caseUserView->id], ['confirm' => __('Are you sure you want to delete # {0}?', $caseUserView->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Case User Views'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Case User View'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Easycases'), ['controller' => 'Easycases', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Easycase'), ['controller' => 'Easycases', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Projects'), ['controller' => 'Projects', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Project'), ['controller' => 'Projects', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="caseUserViews view large-9 medium-8 columns content">
    <h3><?= h($caseUserView->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Easycase') ?></th>
            <td><?= $caseUserView->has('easycase') ? $this->Html->link($caseUserView->easycase->title, ['controller' => 'Easycases', 'action' => 'view', $caseUserView->easycase->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $caseUserView->has('user') ? $this->Html->link($caseUserView->user->name, ['controller' => 'Users', 'action' => 'view', $caseUserView->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Project') ?></th>
            <td><?= $caseUserView->has('project') ? $this->Html->link($caseUserView->project->name, ['controller' => 'Projects', 'action' => 'view', $caseUserView->project->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($caseUserView->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Istype') ?></th>
            <td><?= $this->Number->format($caseUserView->istype) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Isviewed') ?></th>
            <td><?= $this->Number->format($caseUserView->isviewed) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dt Created') ?></th>
            <td><?= h($caseUserView->dt_created) ?></td>
        </tr>
    </table>
</div>
