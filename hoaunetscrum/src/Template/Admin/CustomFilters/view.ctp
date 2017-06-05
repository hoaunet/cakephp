<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Custom Filter'), ['action' => 'edit', $customFilter->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Custom Filter'), ['action' => 'delete', $customFilter->id], ['confirm' => __('Are you sure you want to delete # {0}?', $customFilter->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Custom Filters'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Custom Filter'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Companies'), ['controller' => 'Companies', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Company'), ['controller' => 'Companies', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="customFilters view large-9 medium-8 columns content">
    <h3><?= h($customFilter->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Project Uniq Id') ?></th>
            <td><?= h($customFilter->project_uniq_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Company') ?></th>
            <td><?= $customFilter->has('company') ? $this->Html->link($customFilter->company->name, ['controller' => 'Companies', 'action' => 'view', $customFilter->company->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $customFilter->has('user') ? $this->Html->link($customFilter->user->name, ['controller' => 'Users', 'action' => 'view', $customFilter->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Filter Name') ?></th>
            <td><?= h($customFilter->filter_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($customFilter->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Filter Duedate') ?></th>
            <td><?= h($customFilter->filter_duedate) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dt Created') ?></th>
            <td><?= h($customFilter->dt_created) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Filter Date') ?></h4>
        <?= $this->Text->autoParagraph(h($customFilter->filter_date)); ?>
    </div>
    <div class="row">
        <h4><?= __('Filter Type Id') ?></h4>
        <?= $this->Text->autoParagraph(h($customFilter->filter_type_id)); ?>
    </div>
    <div class="row">
        <h4><?= __('Filter Status') ?></h4>
        <?= $this->Text->autoParagraph(h($customFilter->filter_status)); ?>
    </div>
    <div class="row">
        <h4><?= __('Filter Member Id') ?></h4>
        <?= $this->Text->autoParagraph(h($customFilter->filter_member_id)); ?>
    </div>
    <div class="row">
        <h4><?= __('Filter Priority') ?></h4>
        <?= $this->Text->autoParagraph(h($customFilter->filter_priority)); ?>
    </div>
    <div class="row">
        <h4><?= __('Filter Assignto') ?></h4>
        <?= $this->Text->autoParagraph(h($customFilter->filter_assignto)); ?>
    </div>
    <div class="row">
        <h4><?= __('Filter Search') ?></h4>
        <?= $this->Text->autoParagraph(h($customFilter->filter_search)); ?>
    </div>
</div>
