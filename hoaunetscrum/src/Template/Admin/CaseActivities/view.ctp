<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Case Activity'), ['action' => 'edit', $caseActivity->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Case Activity'), ['action' => 'delete', $caseActivity->id], ['confirm' => __('Are you sure you want to delete # {0}?', $caseActivity->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Case Activities'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Case Activity'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Easycases'), ['controller' => 'Easycases', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Easycase'), ['controller' => 'Easycases', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Projects'), ['controller' => 'Projects', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Project'), ['controller' => 'Projects', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="caseActivities view large-9 medium-8 columns content">
    <h3><?= h($caseActivity->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Easycase') ?></th>
            <td><?= $caseActivity->has('easycase') ? $this->Html->link($caseActivity->easycase->title, ['controller' => 'Easycases', 'action' => 'view', $caseActivity->easycase->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Project') ?></th>
            <td><?= $caseActivity->has('project') ? $this->Html->link($caseActivity->project->name, ['controller' => 'Projects', 'action' => 'view', $caseActivity->project->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $caseActivity->has('user') ? $this->Html->link($caseActivity->user->name, ['controller' => 'Users', 'action' => 'view', $caseActivity->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($caseActivity->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Comment Id') ?></th>
            <td><?= $this->Number->format($caseActivity->comment_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Case No') ?></th>
            <td><?= $this->Number->format($caseActivity->case_no) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Type') ?></th>
            <td><?= $this->Number->format($caseActivity->type) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Isactive') ?></th>
            <td><?= $this->Number->format($caseActivity->isactive) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dt Created') ?></th>
            <td><?= h($caseActivity->dt_created) ?></td>
        </tr>
    </table>
</div>
