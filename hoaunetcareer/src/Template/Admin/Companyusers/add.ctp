<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Companyusers'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Companies'), ['controller' => 'Companies', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Company'), ['controller' => 'Companies', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="companyusers form large-9 medium-8 columns content">
    <?= $this->Form->create($companyuser) ?>
    <fieldset>
        <legend><?= __('Add Companyuser') ?></legend>
        <?php
            echo $this->Form->control('company_id', ['options' => $companies]);
            echo $this->Form->control('company_uniq_id');
            echo $this->Form->control('user_id', ['options' => $users]);
            echo $this->Form->control('user_type');
            echo $this->Form->control('is_active');
            echo $this->Form->control('est_billing_amt');
            echo $this->Form->control('act_date', ['empty' => true]);
            echo $this->Form->control('billing_start_date', ['empty' => true]);
            echo $this->Form->control('billing_end_date', ['empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
