<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Email Reminder'), ['action' => 'edit', $emailReminder->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Email Reminder'), ['action' => 'delete', $emailReminder->id], ['confirm' => __('Are you sure you want to delete # {0}?', $emailReminder->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Email Reminders'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Email Reminder'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="emailReminders view large-9 medium-8 columns content">
    <h3><?= h($emailReminder->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $emailReminder->has('user') ? $this->Html->link($emailReminder->user->name, ['controller' => 'Users', 'action' => 'view', $emailReminder->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($emailReminder->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email Type') ?></th>
            <td><?= $this->Number->format($emailReminder->email_type) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cron Date') ?></th>
            <td><?= h($emailReminder->cron_date) ?></td>
        </tr>
    </table>
</div>
