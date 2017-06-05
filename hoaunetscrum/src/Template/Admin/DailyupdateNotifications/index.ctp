<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Dailyupdate Notification'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Companies'), ['controller' => 'Companies', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Company'), ['controller' => 'Companies', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="dailyupdateNotifications index large-9 medium-8 columns content">
    <h3><?= __('Dailyupdate Notifications') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('company_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dly_update') ?></th>
                <th scope="col"><?= $this->Paginator->sort('notification_time') ?></th>
                <th scope="col"><?= $this->Paginator->sort('proj_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('mail_sent') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($dailyupdateNotifications as $dailyupdateNotification): ?>
            <tr>
                <td><?= $this->Number->format($dailyupdateNotification->id) ?></td>
                <td><?= $dailyupdateNotification->has('user') ? $this->Html->link($dailyupdateNotification->user->name, ['controller' => 'Users', 'action' => 'view', $dailyupdateNotification->user->id]) : '' ?></td>
                <td><?= $dailyupdateNotification->has('company') ? $this->Html->link($dailyupdateNotification->company->name, ['controller' => 'Companies', 'action' => 'view', $dailyupdateNotification->company->id]) : '' ?></td>
                <td><?= $this->Number->format($dailyupdateNotification->dly_update) ?></td>
                <td><?= h($dailyupdateNotification->notification_time) ?></td>
                <td><?= h($dailyupdateNotification->proj_name) ?></td>
                <td><?= h($dailyupdateNotification->mail_sent) ?></td>
                <td><?= h($dailyupdateNotification->modified) ?></td>
                <td><?= h($dailyupdateNotification->status) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $dailyupdateNotification->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $dailyupdateNotification->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $dailyupdateNotification->id], ['confirm' => __('Are you sure you want to delete # {0}?', $dailyupdateNotification->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
