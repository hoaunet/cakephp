<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Transaction'), ['action' => 'edit', $transaction->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Transaction'), ['action' => 'delete', $transaction->id], ['confirm' => __('Are you sure you want to delete # {0}?', $transaction->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Transactions'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Transaction'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Companies'), ['controller' => 'Companies', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Company'), ['controller' => 'Companies', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Transactions'), ['controller' => 'Transactions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Transaction'), ['controller' => 'Transactions', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="transactions view large-9 medium-8 columns content">
    <h3><?= h($transaction->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Btsubscription Id') ?></th>
            <td><?= h($transaction->btsubscription_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Transaction Id') ?></th>
            <td><?= h($transaction->transaction_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= h($transaction->status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Transaction Type') ?></th>
            <td><?= h($transaction->transaction_type) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Invoice Id') ?></th>
            <td><?= h($transaction->invoice_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ip') ?></th>
            <td><?= h($transaction->ip) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Company') ?></th>
            <td><?= $transaction->has('company') ? $this->Html->link($transaction->company->name, ['controller' => 'Companies', 'action' => 'view', $transaction->company->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $transaction->has('user') ? $this->Html->link($transaction->user->name, ['controller' => 'Users', 'action' => 'view', $transaction->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($transaction->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Plan Id') ?></th>
            <td><?= $this->Number->format($transaction->plan_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Subscription Price') ?></th>
            <td><?= $this->Number->format($transaction->subscription_price) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Amt') ?></th>
            <td><?= $this->Number->format($transaction->amt) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Discount') ?></th>
            <td><?= $this->Number->format($transaction->discount) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Addon') ?></th>
            <td><?= $this->Number->format($transaction->addon) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Invoice Mail Flag') ?></th>
            <td><?= $this->Number->format($transaction->invoice_mail_flag) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($transaction->created) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Transactions') ?></h4>
        <?php if (!empty($transaction->transactions)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Btsubscription Id') ?></th>
                <th scope="col"><?= __('Transaction Id') ?></th>
                <th scope="col"><?= __('Plan Id') ?></th>
                <th scope="col"><?= __('Status') ?></th>
                <th scope="col"><?= __('Subscription Price') ?></th>
                <th scope="col"><?= __('Amt') ?></th>
                <th scope="col"><?= __('Discount') ?></th>
                <th scope="col"><?= __('Addon') ?></th>
                <th scope="col"><?= __('Transaction Type') ?></th>
                <th scope="col"><?= __('Invoice Mail Flag') ?></th>
                <th scope="col"><?= __('Invoice Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Ip') ?></th>
                <th scope="col"><?= __('Company Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($transaction->transactions as $transactions): ?>
            <tr>
                <td><?= h($transactions->id) ?></td>
                <td><?= h($transactions->btsubscription_id) ?></td>
                <td><?= h($transactions->transaction_id) ?></td>
                <td><?= h($transactions->plan_id) ?></td>
                <td><?= h($transactions->status) ?></td>
                <td><?= h($transactions->subscription_price) ?></td>
                <td><?= h($transactions->amt) ?></td>
                <td><?= h($transactions->discount) ?></td>
                <td><?= h($transactions->addon) ?></td>
                <td><?= h($transactions->transaction_type) ?></td>
                <td><?= h($transactions->invoice_mail_flag) ?></td>
                <td><?= h($transactions->invoice_id) ?></td>
                <td><?= h($transactions->created) ?></td>
                <td><?= h($transactions->ip) ?></td>
                <td><?= h($transactions->company_id) ?></td>
                <td><?= h($transactions->user_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Transactions', 'action' => 'view', $transactions->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Transactions', 'action' => 'edit', $transactions->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Transactions', 'action' => 'delete', $transactions->id], ['confirm' => __('Are you sure you want to delete # {0}?', $transactions->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
