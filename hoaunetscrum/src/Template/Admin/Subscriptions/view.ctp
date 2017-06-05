<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Subscription'), ['action' => 'edit', $subscription->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Subscription'), ['action' => 'delete', $subscription->id], ['confirm' => __('Are you sure you want to delete # {0}?', $subscription->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Subscriptions'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Subscription'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Companies'), ['controller' => 'Companies', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Company'), ['controller' => 'Companies', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List User Subscriptions'), ['controller' => 'UserSubscriptions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User Subscription'), ['controller' => 'UserSubscriptions', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="subscriptions view large-9 medium-8 columns content">
    <h3><?= h($subscription->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Storage') ?></th>
            <td><?= h($subscription->storage) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Project Limit') ?></th>
            <td><?= h($subscription->project_limit) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User Limit') ?></th>
            <td><?= h($subscription->user_limit) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Milestone Limit') ?></th>
            <td><?= h($subscription->milestone_limit) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($subscription->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Plan') ?></th>
            <td><?= $this->Number->format($subscription->plan) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Free Trail Days') ?></th>
            <td><?= $this->Number->format($subscription->free_trail_days) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Price') ?></th>
            <td><?= $this->Number->format($subscription->price) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Month') ?></th>
            <td><?= $this->Number->format($subscription->month) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Is Active') ?></th>
            <td><?= $this->Number->format($subscription->is_active) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($subscription->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($subscription->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Companies') ?></h4>
        <?php if (!empty($subscription->companies)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Uniq Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Seo Url') ?></th>
                <th scope="col"><?= __('Subscription Id') ?></th>
                <th scope="col"><?= __('Logo') ?></th>
                <th scope="col"><?= __('Website') ?></th>
                <th scope="col"><?= __('Contact Phone') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Is Beta') ?></th>
                <th scope="col"><?= __('Is Active') ?></th>
                <th scope="col"><?= __('Is Deactivated') ?></th>
                <th scope="col"><?= __('Twitted') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($subscription->companies as $companies): ?>
            <tr>
                <td><?= h($companies->id) ?></td>
                <td><?= h($companies->uniq_id) ?></td>
                <td><?= h($companies->name) ?></td>
                <td><?= h($companies->seo_url) ?></td>
                <td><?= h($companies->subscription_id) ?></td>
                <td><?= h($companies->logo) ?></td>
                <td><?= h($companies->website) ?></td>
                <td><?= h($companies->contact_phone) ?></td>
                <td><?= h($companies->created) ?></td>
                <td><?= h($companies->modified) ?></td>
                <td><?= h($companies->is_beta) ?></td>
                <td><?= h($companies->is_active) ?></td>
                <td><?= h($companies->is_deactivated) ?></td>
                <td><?= h($companies->twitted) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Companies', 'action' => 'view', $companies->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Companies', 'action' => 'edit', $companies->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Companies', 'action' => 'delete', $companies->id], ['confirm' => __('Are you sure you want to delete # {0}?', $companies->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related User Subscriptions') ?></h4>
        <?php if (!empty($subscription->user_subscriptions)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Company Id') ?></th>
                <th scope="col"><?= __('Subscription Id') ?></th>
                <th scope="col"><?= __('Storage') ?></th>
                <th scope="col"><?= __('Project Limit') ?></th>
                <th scope="col"><?= __('User Limit') ?></th>
                <th scope="col"><?= __('Milestone Limit') ?></th>
                <th scope="col"><?= __('Free Trail Days') ?></th>
                <th scope="col"><?= __('Price') ?></th>
                <th scope="col"><?= __('Month') ?></th>
                <th scope="col"><?= __('Amt Due') ?></th>
                <th scope="col"><?= __('Coupon Code') ?></th>
                <th scope="col"><?= __('Btsubscription Id') ?></th>
                <th scope="col"><?= __('Btprofile Id') ?></th>
                <th scope="col"><?= __('Creditcard Token') ?></th>
                <th scope="col"><?= __('Payment Status') ?></th>
                <th scope="col"><?= __('Discount') ?></th>
                <th scope="col"><?= __('Is Cancel') ?></th>
                <th scope="col"><?= __('Is Sub Upgraded Bt') ?></th>
                <th scope="col"><?= __('Cancel Mail Flag') ?></th>
                <th scope="col"><?= __('No Of Atmpt Upgrd') ?></th>
                <th scope="col"><?= __('Is Free') ?></th>
                <th scope="col"><?= __('Is Updown') ?></th>
                <th scope="col"><?= __('Sub Start Date') ?></th>
                <th scope="col"><?= __('Next Billing Date') ?></th>
                <th scope="col"><?= __('Cancel Date') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($subscription->user_subscriptions as $userSubscriptions): ?>
            <tr>
                <td><?= h($userSubscriptions->id) ?></td>
                <td><?= h($userSubscriptions->user_id) ?></td>
                <td><?= h($userSubscriptions->company_id) ?></td>
                <td><?= h($userSubscriptions->subscription_id) ?></td>
                <td><?= h($userSubscriptions->storage) ?></td>
                <td><?= h($userSubscriptions->project_limit) ?></td>
                <td><?= h($userSubscriptions->user_limit) ?></td>
                <td><?= h($userSubscriptions->milestone_limit) ?></td>
                <td><?= h($userSubscriptions->free_trail_days) ?></td>
                <td><?= h($userSubscriptions->price) ?></td>
                <td><?= h($userSubscriptions->month) ?></td>
                <td><?= h($userSubscriptions->amt_due) ?></td>
                <td><?= h($userSubscriptions->coupon_code) ?></td>
                <td><?= h($userSubscriptions->btsubscription_id) ?></td>
                <td><?= h($userSubscriptions->btprofile_id) ?></td>
                <td><?= h($userSubscriptions->creditcard_token) ?></td>
                <td><?= h($userSubscriptions->payment_status) ?></td>
                <td><?= h($userSubscriptions->discount) ?></td>
                <td><?= h($userSubscriptions->is_cancel) ?></td>
                <td><?= h($userSubscriptions->is_sub_upgraded_bt) ?></td>
                <td><?= h($userSubscriptions->cancel_mail_flag) ?></td>
                <td><?= h($userSubscriptions->no_of_atmpt_upgrd) ?></td>
                <td><?= h($userSubscriptions->is_free) ?></td>
                <td><?= h($userSubscriptions->is_updown) ?></td>
                <td><?= h($userSubscriptions->sub_start_date) ?></td>
                <td><?= h($userSubscriptions->next_billing_date) ?></td>
                <td><?= h($userSubscriptions->cancel_date) ?></td>
                <td><?= h($userSubscriptions->created) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'UserSubscriptions', 'action' => 'view', $userSubscriptions->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'UserSubscriptions', 'action' => 'edit', $userSubscriptions->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'UserSubscriptions', 'action' => 'delete', $userSubscriptions->id], ['confirm' => __('Are you sure you want to delete # {0}?', $userSubscriptions->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
