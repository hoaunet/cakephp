<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
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
        <legend><?= __('Add User') ?></legend>
        <?php
            echo $this->Form->control('uniq_id');
            echo $this->Form->control('btprofile_id');
            echo $this->Form->control('usersubscription_id');
            echo $this->Form->control('credit_cardtoken');
            echo $this->Form->control('card_number');
            echo $this->Form->control('expiry_date');
            echo $this->Form->control('email');
            echo $this->Form->control('password');
            echo $this->Form->control('name');
            echo $this->Form->control('is_beta');
            echo $this->Form->control('last_name');
            echo $this->Form->control('short_name');
            echo $this->Form->control('istype');
            echo $this->Form->control('photo');
            echo $this->Form->control('photo_reset');
            echo $this->Form->control('isactive');
            echo $this->Form->control('timezone_id');
            echo $this->Form->control('isemail');
            echo $this->Form->control('is_agree');
            echo $this->Form->control('usersub_type');
            echo $this->Form->control('est_billing_amount');
            echo $this->Form->control('dt_created');
            echo $this->Form->control('dt_updated', ['empty' => true]);
            echo $this->Form->control('dt_last_login', ['empty' => true]);
            echo $this->Form->control('dt_last_logout', ['empty' => true]);
            echo $this->Form->control('query_string');
            echo $this->Form->control('update_email');
            echo $this->Form->control('update_random');
            echo $this->Form->control('gaccess_token');
            echo $this->Form->control('ip');
            echo $this->Form->control('sig');
            echo $this->Form->control('desk_notify');
            echo $this->Form->control('active_dashboard_tab');
            echo $this->Form->control('is_moderator');
            echo $this->Form->control('show_default_inner');
            echo $this->Form->control('province_id', ['options' => $provinces, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
