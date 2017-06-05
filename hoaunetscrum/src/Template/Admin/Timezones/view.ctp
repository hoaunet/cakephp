<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Timezone'), ['action' => 'edit', $timezone->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Timezone'), ['action' => 'delete', $timezone->id], ['confirm' => __('Are you sure you want to delete # {0}?', $timezone->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Timezones'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Timezone'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Daily Updates'), ['controller' => 'DailyUpdates', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Daily Update'), ['controller' => 'DailyUpdates', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="timezones view large-9 medium-8 columns content">
    <h3><?= h($timezone->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Code') ?></th>
            <td><?= h($timezone->code) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($timezone->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Gmt Offset') ?></th>
            <td><?= $this->Number->format($timezone->gmt_offset) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dst Offset') ?></th>
            <td><?= $this->Number->format($timezone->dst_offset) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Daily Updates') ?></h4>
        <?php if (!empty($timezone->daily_updates)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Company Id') ?></th>
                <th scope="col"><?= __('Project Id') ?></th>
                <th scope="col"><?= __('Post By') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Timezone Id') ?></th>
                <th scope="col"><?= __('Notification Time') ?></th>
                <th scope="col"><?= __('Days') ?></th>
                <th scope="col"><?= __('Cron Email Date') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($timezone->daily_updates as $dailyUpdates): ?>
            <tr>
                <td><?= h($dailyUpdates->id) ?></td>
                <td><?= h($dailyUpdates->company_id) ?></td>
                <td><?= h($dailyUpdates->project_id) ?></td>
                <td><?= h($dailyUpdates->post_by) ?></td>
                <td><?= h($dailyUpdates->user_id) ?></td>
                <td><?= h($dailyUpdates->timezone_id) ?></td>
                <td><?= h($dailyUpdates->notification_time) ?></td>
                <td><?= h($dailyUpdates->days) ?></td>
                <td><?= h($dailyUpdates->cron_email_date) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'DailyUpdates', 'action' => 'view', $dailyUpdates->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'DailyUpdates', 'action' => 'edit', $dailyUpdates->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'DailyUpdates', 'action' => 'delete', $dailyUpdates->id], ['confirm' => __('Are you sure you want to delete # {0}?', $dailyUpdates->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Users') ?></h4>
        <?php if (!empty($timezone->users)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Uniq Id') ?></th>
                <th scope="col"><?= __('Btprofile Id') ?></th>
                <th scope="col"><?= __('Usersubscription Id') ?></th>
                <th scope="col"><?= __('Credit Cardtoken') ?></th>
                <th scope="col"><?= __('Card Number') ?></th>
                <th scope="col"><?= __('Expiry Date') ?></th>
                <th scope="col"><?= __('Email') ?></th>
                <th scope="col"><?= __('Password') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Is Beta') ?></th>
                <th scope="col"><?= __('Last Name') ?></th>
                <th scope="col"><?= __('Short Name') ?></th>
                <th scope="col"><?= __('Istype') ?></th>
                <th scope="col"><?= __('Photo') ?></th>
                <th scope="col"><?= __('Photo Reset') ?></th>
                <th scope="col"><?= __('Isactive') ?></th>
                <th scope="col"><?= __('Timezone Id') ?></th>
                <th scope="col"><?= __('Isemail') ?></th>
                <th scope="col"><?= __('Is Agree') ?></th>
                <th scope="col"><?= __('Usersub Type') ?></th>
                <th scope="col"><?= __('Est Billing Amount') ?></th>
                <th scope="col"><?= __('Dt Created') ?></th>
                <th scope="col"><?= __('Dt Updated') ?></th>
                <th scope="col"><?= __('Dt Last Login') ?></th>
                <th scope="col"><?= __('Dt Last Logout') ?></th>
                <th scope="col"><?= __('Query String') ?></th>
                <th scope="col"><?= __('Update Email') ?></th>
                <th scope="col"><?= __('Update Random') ?></th>
                <th scope="col"><?= __('Gaccess Token') ?></th>
                <th scope="col"><?= __('Ip') ?></th>
                <th scope="col"><?= __('Sig') ?></th>
                <th scope="col"><?= __('Desk Notify') ?></th>
                <th scope="col"><?= __('Active Dashboard Tab') ?></th>
                <th scope="col"><?= __('Is Moderator') ?></th>
                <th scope="col"><?= __('Show Default Inner') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($timezone->users as $users): ?>
            <tr>
                <td><?= h($users->id) ?></td>
                <td><?= h($users->uniq_id) ?></td>
                <td><?= h($users->btprofile_id) ?></td>
                <td><?= h($users->usersubscription_id) ?></td>
                <td><?= h($users->credit_cardtoken) ?></td>
                <td><?= h($users->card_number) ?></td>
                <td><?= h($users->expiry_date) ?></td>
                <td><?= h($users->email) ?></td>
                <td><?= h($users->password) ?></td>
                <td><?= h($users->name) ?></td>
                <td><?= h($users->is_beta) ?></td>
                <td><?= h($users->last_name) ?></td>
                <td><?= h($users->short_name) ?></td>
                <td><?= h($users->istype) ?></td>
                <td><?= h($users->photo) ?></td>
                <td><?= h($users->photo_reset) ?></td>
                <td><?= h($users->isactive) ?></td>
                <td><?= h($users->timezone_id) ?></td>
                <td><?= h($users->isemail) ?></td>
                <td><?= h($users->is_agree) ?></td>
                <td><?= h($users->usersub_type) ?></td>
                <td><?= h($users->est_billing_amount) ?></td>
                <td><?= h($users->dt_created) ?></td>
                <td><?= h($users->dt_updated) ?></td>
                <td><?= h($users->dt_last_login) ?></td>
                <td><?= h($users->dt_last_logout) ?></td>
                <td><?= h($users->query_string) ?></td>
                <td><?= h($users->update_email) ?></td>
                <td><?= h($users->update_random) ?></td>
                <td><?= h($users->gaccess_token) ?></td>
                <td><?= h($users->ip) ?></td>
                <td><?= h($users->sig) ?></td>
                <td><?= h($users->desk_notify) ?></td>
                <td><?= h($users->active_dashboard_tab) ?></td>
                <td><?= h($users->is_moderator) ?></td>
                <td><?= h($users->show_default_inner) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Users', 'action' => 'view', $users->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Users', 'action' => 'edit', $users->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Users', 'action' => 'delete', $users->id], ['confirm' => __('Are you sure you want to delete # {0}?', $users->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
