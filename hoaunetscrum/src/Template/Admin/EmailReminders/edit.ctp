<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $emailReminder->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $emailReminder->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Email Reminders'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="emailReminders form large-9 medium-8 columns content">
    <?= $this->Form->create($emailReminder) ?>
    <fieldset>
        <legend><?= __('Edit Email Reminder') ?></legend>
        <?php
            echo $this->Form->control('user_id', ['options' => $users]);
            echo $this->Form->control('email_type');
            echo $this->Form->control('cron_date');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
