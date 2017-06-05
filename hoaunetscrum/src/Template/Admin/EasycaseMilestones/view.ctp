<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Easycase Milestone'), ['action' => 'edit', $easycaseMilestone->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Easycase Milestone'), ['action' => 'delete', $easycaseMilestone->id], ['confirm' => __('Are you sure you want to delete # {0}?', $easycaseMilestone->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Easycase Milestones'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Easycase Milestone'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Easycases'), ['controller' => 'Easycases', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Easycase'), ['controller' => 'Easycases', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Milestones'), ['controller' => 'Milestones', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Milestone'), ['controller' => 'Milestones', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Projects'), ['controller' => 'Projects', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Project'), ['controller' => 'Projects', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="easycaseMilestones view large-9 medium-8 columns content">
    <h3><?= h($easycaseMilestone->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Easycase') ?></th>
            <td><?= $easycaseMilestone->has('easycase') ? $this->Html->link($easycaseMilestone->easycase->title, ['controller' => 'Easycases', 'action' => 'view', $easycaseMilestone->easycase->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Milestone') ?></th>
            <td><?= $easycaseMilestone->has('milestone') ? $this->Html->link($easycaseMilestone->milestone->title, ['controller' => 'Milestones', 'action' => 'view', $easycaseMilestone->milestone->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Project') ?></th>
            <td><?= $easycaseMilestone->has('project') ? $this->Html->link($easycaseMilestone->project->name, ['controller' => 'Projects', 'action' => 'view', $easycaseMilestone->project->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $easycaseMilestone->has('user') ? $this->Html->link($easycaseMilestone->user->name, ['controller' => 'Users', 'action' => 'view', $easycaseMilestone->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($easycaseMilestone->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Seq') ?></th>
            <td><?= $this->Number->format($easycaseMilestone->id_seq) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($easycaseMilestone->created) ?></td>
        </tr>
    </table>
</div>
