<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Subscription'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Companies'), ['controller' => 'Companies', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Company'), ['controller' => 'Companies', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List User Subscriptions'), ['controller' => 'UserSubscriptions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User Subscription'), ['controller' => 'UserSubscriptions', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="subscriptions index large-9 medium-8 columns content">
    <h3><?= __('Subscriptions') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('plan') ?></th>
                <th scope="col"><?= $this->Paginator->sort('storage') ?></th>
                <th scope="col"><?= $this->Paginator->sort('project_limit') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_limit') ?></th>
                <th scope="col"><?= $this->Paginator->sort('milestone_limit') ?></th>
                <th scope="col"><?= $this->Paginator->sort('free_trail_days') ?></th>
                <th scope="col"><?= $this->Paginator->sort('price') ?></th>
                <th scope="col"><?= $this->Paginator->sort('month') ?></th>
                <th scope="col"><?= $this->Paginator->sort('is_active') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($subscriptions as $subscription): ?>
            <tr>
                <td><?= $this->Number->format($subscription->id) ?></td>
                <td><?= $this->Number->format($subscription->plan) ?></td>
                <td><?= h($subscription->storage) ?></td>
                <td><?= h($subscription->project_limit) ?></td>
                <td><?= h($subscription->user_limit) ?></td>
                <td><?= h($subscription->milestone_limit) ?></td>
                <td><?= $this->Number->format($subscription->free_trail_days) ?></td>
                <td><?= $this->Number->format($subscription->price) ?></td>
                <td><?= $this->Number->format($subscription->month) ?></td>
                <td><?= $this->Number->format($subscription->is_active) ?></td>
                <td><?= h($subscription->created) ?></td>
                <td><?= h($subscription->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $subscription->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $subscription->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $subscription->id], ['confirm' => __('Are you sure you want to delete # {0}?', $subscription->id)]) ?>
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
