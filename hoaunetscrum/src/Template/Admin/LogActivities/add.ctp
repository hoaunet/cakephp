<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Log Activities'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Companies'), ['controller' => 'Companies', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Company'), ['controller' => 'Companies', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Log Types'), ['controller' => 'LogTypes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Log Type'), ['controller' => 'LogTypes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="logActivities form large-9 medium-8 columns content">
    <?= $this->Form->create($logActivity) ?>
    <fieldset>
        <legend><?= __('Add Log Activity') ?></legend>
        <?php
            echo $this->Form->control('company_id', ['options' => $companies, 'empty' => true]);
            echo $this->Form->control('user_id', ['options' => $users, 'empty' => true]);
            echo $this->Form->control('log_type_id', ['options' => $logTypes, 'empty' => true]);
            echo $this->Form->control('json_value');
            echo $this->Form->control('ip');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
