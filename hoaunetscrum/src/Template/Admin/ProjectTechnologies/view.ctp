<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Project Technology'), ['action' => 'edit', $projectTechnology->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Project Technology'), ['action' => 'delete', $projectTechnology->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projectTechnology->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Project Technologies'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Project Technology'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Projects'), ['controller' => 'Projects', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Project'), ['controller' => 'Projects', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="projectTechnologies view large-9 medium-8 columns content">
    <h3><?= h($projectTechnology->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Project') ?></th>
            <td><?= $projectTechnology->has('project') ? $this->Html->link($projectTechnology->project->name, ['controller' => 'Projects', 'action' => 'view', $projectTechnology->project->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($projectTechnology->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Technology Id') ?></th>
            <td><?= $this->Number->format($projectTechnology->technology_id) ?></td>
        </tr>
    </table>
</div>
