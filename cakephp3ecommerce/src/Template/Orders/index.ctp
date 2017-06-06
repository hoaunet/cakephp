<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Order'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Order Items'), ['controller' => 'OrderItems', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Order Item'), ['controller' => 'OrderItems', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="orders index large-9 medium-8 columns content">
    <h3><?= __('Orders') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('first_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('last_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('phone') ?></th>
                <th scope="col"><?= $this->Paginator->sort('billing_address') ?></th>
                <th scope="col"><?= $this->Paginator->sort('billing_address2') ?></th>
                <th scope="col"><?= $this->Paginator->sort('billing_city') ?></th>
                <th scope="col"><?= $this->Paginator->sort('billing_zip') ?></th>
                <th scope="col"><?= $this->Paginator->sort('billing_state') ?></th>
                <th scope="col"><?= $this->Paginator->sort('billing_country') ?></th>
                <th scope="col"><?= $this->Paginator->sort('shipping_address') ?></th>
                <th scope="col"><?= $this->Paginator->sort('shipping_address2') ?></th>
                <th scope="col"><?= $this->Paginator->sort('shipping_city') ?></th>
                <th scope="col"><?= $this->Paginator->sort('shipping_zip') ?></th>
                <th scope="col"><?= $this->Paginator->sort('shipping_state') ?></th>
                <th scope="col"><?= $this->Paginator->sort('shipping_country') ?></th>
                <th scope="col"><?= $this->Paginator->sort('weight') ?></th>
                <th scope="col"><?= $this->Paginator->sort('order_item_count') ?></th>
                <th scope="col"><?= $this->Paginator->sort('subtotal') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tax') ?></th>
                <th scope="col"><?= $this->Paginator->sort('shipping') ?></th>
                <th scope="col"><?= $this->Paginator->sort('total') ?></th>
                <th scope="col"><?= $this->Paginator->sort('order_type') ?></th>
                <th scope="col"><?= $this->Paginator->sort('authorization') ?></th>
                <th scope="col"><?= $this->Paginator->sort('transaction') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ip_address') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($orders as $order): ?>
            <tr>
                <td><?= $this->Number->format($order->id) ?></td>
                <td><?= h($order->first_name) ?></td>
                <td><?= h($order->last_name) ?></td>
                <td><?= h($order->email) ?></td>
                <td><?= h($order->phone) ?></td>
                <td><?= h($order->billing_address) ?></td>
                <td><?= h($order->billing_address2) ?></td>
                <td><?= h($order->billing_city) ?></td>
                <td><?= h($order->billing_zip) ?></td>
                <td><?= h($order->billing_state) ?></td>
                <td><?= h($order->billing_country) ?></td>
                <td><?= h($order->shipping_address) ?></td>
                <td><?= h($order->shipping_address2) ?></td>
                <td><?= h($order->shipping_city) ?></td>
                <td><?= h($order->shipping_zip) ?></td>
                <td><?= h($order->shipping_state) ?></td>
                <td><?= h($order->shipping_country) ?></td>
                <td><?= $this->Number->format($order->weight) ?></td>
                <td><?= $this->Number->format($order->order_item_count) ?></td>
                <td><?= $this->Number->format($order->subtotal) ?></td>
                <td><?= $this->Number->format($order->tax) ?></td>
                <td><?= $this->Number->format($order->shipping) ?></td>
                <td><?= $this->Number->format($order->total) ?></td>
                <td><?= h($order->order_type) ?></td>
                <td><?= h($order->authorization) ?></td>
                <td><?= h($order->transaction) ?></td>
                <td><?= h($order->status) ?></td>
                <td><?= h($order->ip_address) ?></td>
                <td><?= h($order->created) ?></td>
                <td><?= h($order->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $order->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $order->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $order->id], ['confirm' => __('Are you sure you want to delete # {0}?', $order->id)]) ?>
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
