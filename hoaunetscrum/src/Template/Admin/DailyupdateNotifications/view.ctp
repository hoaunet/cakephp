<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Dailyupdate Notification'), ['action' => 'edit', $dailyupdateNotification->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Dailyupdate Notification'), ['action' => 'delete', $dailyupdateNotification->id], ['confirm' => __('Are you sure you want to delete # {0}?', $dailyupdateNotification->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Dailyupdate Notifications'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Dailyupdate Notification'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Companies'), ['controller' => 'Companies', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Company'), ['controller' => 'Companies', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="dailyupdateNotifications view large-9 medium-8 columns content">
    <h3><?= h($dailyupdateNotification->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $dailyupdateNotification->has('user') ? $this->Html->link($dailyupdateNotification->user->name, ['controller' => 'Users', 'action' => 'view', $dailyupdateNotification->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Company') ?></th>
            <td><?= $dailyupdateNotification->has('company') ? $this->Html->link($dailyupdateNotification->company->name, ['controller' => 'Companies', 'action' => 'view', $dailyupdateNotification->company->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Notification Time') ?></th>
            <td><?= h($dailyupdateNotification->notification_time) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Proj Name') ?></th>
            <td><?= h($dailyupdateNotification->proj_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($dailyupdateNotification->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dly Update') ?></th>
            <td><?= $this->Number->format($dailyupdateNotification->dly_update) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Mail Sent') ?></th>
            <td><?= h($dailyupdateNotification->mail_sent) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($dailyupdateNotification->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $dailyupdateNotification->status ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
</div>
