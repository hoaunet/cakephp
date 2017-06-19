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
                ['action' => 'delete', $user->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Provinces'), ['controller' => 'Provinces', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Province'), ['controller' => 'Provinces', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Companyusers'), ['controller' => 'Companyusers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Companyuser'), ['controller' => 'Companyusers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Newsletters'), ['controller' => 'Newsletters', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Newsletter'), ['controller' => 'Newsletters', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Userinfos'), ['controller' => 'Userinfos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Userinfo'), ['controller' => 'Userinfos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Userlogins'), ['controller' => 'Userlogins', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Userlogin'), ['controller' => 'Userlogins', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Edit User') ?></legend>
        <?php
            echo $this->Form->control('uniq_id');
            echo $this->Form->control('btprofile_id');
            echo $this->Form->control('usersubscription_id');
            echo $this->Form->control('email');
            echo $this->Form->control('password');
            echo $this->Form->control('fullname');
            echo $this->Form->control('istype');
            echo $this->Form->control('photo');
            echo $this->Form->control('isactive');
            echo $this->Form->control('dt_last_login', ['empty' => true]);
            echo $this->Form->control('dt_last_logout', ['empty' => true]);
            echo $this->Form->control('ip');
            echo $this->Form->control('active_dashboard_tab');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
