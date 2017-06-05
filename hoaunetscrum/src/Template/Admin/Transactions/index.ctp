<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Transaction'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Companies'), ['controller' => 'Companies', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Company'), ['controller' => 'Companies', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="transactions index large-9 medium-8 columns content">
    <h3><?= __('Transactions') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('btsubscription_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('transaction_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('plan_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                <th scope="col"><?= $this->Paginator->sort('subscription_price') ?></th>
                <th scope="col"><?= $this->Paginator->sort('amt') ?></th>
                <th scope="col"><?= $this->Paginator->sort('discount') ?></th>
                <th scope="col"><?= $this->Paginator->sort('addon') ?></th>
                <th scope="col"><?= $this->Paginator->sort('transaction_type') ?></th>
                <th scope="col"><?= $this->Paginator->sort('invoice_mail_flag') ?></th>
                <th scope="col"><?= $this->Paginator->sort('invoice_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ip') ?></th>
                <th scope="col"><?= $this->Paginator->sort('company_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($transactions as $transaction): ?>
            <tr>
                <td><?= $this->Number->format($transaction->id) ?></td>
                <td><?= h($transaction->btsubscription_id) ?></td>
                <td><?= h($transaction->transaction_id) ?></td>
                <td><?= $this->Number->format($transaction->plan_id) ?></td>
                <td><?= h($transaction->status) ?></td>
                <td><?= $this->Number->format($transaction->subscription_price) ?></td>
                <td><?= $this->Number->format($transaction->amt) ?></td>
                <td><?= $this->Number->format($transaction->discount) ?></td>
                <td><?= $this->Number->format($transaction->addon) ?></td>
                <td><?= h($transaction->transaction_type) ?></td>
                <td><?= $this->Number->format($transaction->invoice_mail_flag) ?></td>
                <td><?= h($transaction->invoice_id) ?></td>
                <td><?= h($transaction->created) ?></td>
                <td><?= h($transaction->ip) ?></td>
                <td><?= $transaction->has('company') ? $this->Html->link($transaction->company->name, ['controller' => 'Companies', 'action' => 'view', $transaction->company->id]) : '' ?></td>
                <td><?= $transaction->has('user') ? $this->Html->link($transaction->user->name, ['controller' => 'Users', 'action' => 'view', $transaction->user->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $transaction->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $transaction->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $transaction->id], ['confirm' => __('Are you sure you want to delete # {0}?', $transaction->id)]) ?>
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
