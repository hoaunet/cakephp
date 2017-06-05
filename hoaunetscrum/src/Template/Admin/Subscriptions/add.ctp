<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Subscriptions'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Companies'), ['controller' => 'Companies', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Company'), ['controller' => 'Companies', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List User Subscriptions'), ['controller' => 'UserSubscriptions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User Subscription'), ['controller' => 'UserSubscriptions', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="subscriptions form large-9 medium-8 columns content">
    <?= $this->Form->create($subscription) ?>
    <fieldset>
        <legend><?= __('Add Subscription') ?></legend>
        <?php
            echo $this->Form->control('plan');
            echo $this->Form->control('storage');
            echo $this->Form->control('project_limit');
            echo $this->Form->control('user_limit');
            echo $this->Form->control('milestone_limit');
            echo $this->Form->control('free_trail_days');
            echo $this->Form->control('price');
            echo $this->Form->control('month');
            echo $this->Form->control('is_active');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
