<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Daily Updates'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Companies'), ['controller' => 'Companies', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Company'), ['controller' => 'Companies', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projects'), ['controller' => 'Projects', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Project'), ['controller' => 'Projects', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Timezones'), ['controller' => 'Timezones', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Timezone'), ['controller' => 'Timezones', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="dailyUpdates form large-9 medium-8 columns content">
    <?= $this->Form->create($dailyUpdate) ?>
    <fieldset>
        <legend><?= __('Add Daily Update') ?></legend>
        <?php
            echo $this->Form->control('company_id', ['options' => $companies]);
            echo $this->Form->control('project_id', ['options' => $projects]);
            echo $this->Form->control('post_by');
            echo $this->Form->control('user_id', ['options' => $users]);
            echo $this->Form->control('timezone_id', ['options' => $timezones]);
            echo $this->Form->control('notification_time');
            echo $this->Form->control('days');
            echo $this->Form->control('cron_email_date', ['empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
