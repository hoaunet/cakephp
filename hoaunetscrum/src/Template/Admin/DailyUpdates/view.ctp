<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Daily Update'), ['action' => 'edit', $dailyUpdate->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Daily Update'), ['action' => 'delete', $dailyUpdate->id], ['confirm' => __('Are you sure you want to delete # {0}?', $dailyUpdate->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Daily Updates'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Daily Update'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Companies'), ['controller' => 'Companies', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Company'), ['controller' => 'Companies', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Projects'), ['controller' => 'Projects', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Project'), ['controller' => 'Projects', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Timezones'), ['controller' => 'Timezones', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Timezone'), ['controller' => 'Timezones', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="dailyUpdates view large-9 medium-8 columns content">
    <h3><?= h($dailyUpdate->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Company') ?></th>
            <td><?= $dailyUpdate->has('company') ? $this->Html->link($dailyUpdate->company->name, ['controller' => 'Companies', 'action' => 'view', $dailyUpdate->company->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Project') ?></th>
            <td><?= $dailyUpdate->has('project') ? $this->Html->link($dailyUpdate->project->name, ['controller' => 'Projects', 'action' => 'view', $dailyUpdate->project->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $dailyUpdate->has('user') ? $this->Html->link($dailyUpdate->user->name, ['controller' => 'Users', 'action' => 'view', $dailyUpdate->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Timezone') ?></th>
            <td><?= $dailyUpdate->has('timezone') ? $this->Html->link($dailyUpdate->timezone->id, ['controller' => 'Timezones', 'action' => 'view', $dailyUpdate->timezone->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($dailyUpdate->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Post By') ?></th>
            <td><?= $this->Number->format($dailyUpdate->post_by) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Days') ?></th>
            <td><?= $this->Number->format($dailyUpdate->days) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Notification Time') ?></th>
            <td><?= h($dailyUpdate->notification_time) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cron Email Date') ?></th>
            <td><?= h($dailyUpdate->cron_email_date) ?></td>
        </tr>
    </table>
</div>
