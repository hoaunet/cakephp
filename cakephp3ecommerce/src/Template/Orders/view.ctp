<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Order'), ['action' => 'edit', $order->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Order'), ['action' => 'delete', $order->id], ['confirm' => __('Are you sure you want to delete # {0}?', $order->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Orders'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Order'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Order Items'), ['controller' => 'OrderItems', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Order Item'), ['controller' => 'OrderItems', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="orders view large-9 medium-8 columns content">
    <h3><?= h($order->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('First Name') ?></th>
            <td><?= h($order->first_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Last Name') ?></th>
            <td><?= h($order->last_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($order->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Phone') ?></th>
            <td><?= h($order->phone) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Billing Address') ?></th>
            <td><?= h($order->billing_address) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Billing Address2') ?></th>
            <td><?= h($order->billing_address2) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Billing City') ?></th>
            <td><?= h($order->billing_city) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Billing Zip') ?></th>
            <td><?= h($order->billing_zip) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Billing State') ?></th>
            <td><?= h($order->billing_state) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Billing Country') ?></th>
            <td><?= h($order->billing_country) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Shipping Address') ?></th>
            <td><?= h($order->shipping_address) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Shipping Address2') ?></th>
            <td><?= h($order->shipping_address2) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Shipping City') ?></th>
            <td><?= h($order->shipping_city) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Shipping Zip') ?></th>
            <td><?= h($order->shipping_zip) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Shipping State') ?></th>
            <td><?= h($order->shipping_state) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Shipping Country') ?></th>
            <td><?= h($order->shipping_country) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Order Type') ?></th>
            <td><?= h($order->order_type) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Authorization') ?></th>
            <td><?= h($order->authorization) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Transaction') ?></th>
            <td><?= h($order->transaction) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= h($order->status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ip Address') ?></th>
            <td><?= h($order->ip_address) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($order->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Weight') ?></th>
            <td><?= $this->Number->format($order->weight) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Order Item Count') ?></th>
            <td><?= $this->Number->format($order->order_item_count) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Subtotal') ?></th>
            <td><?= $this->Number->format($order->subtotal) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tax') ?></th>
            <td><?= $this->Number->format($order->tax) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Shipping') ?></th>
            <td><?= $this->Number->format($order->shipping) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Total') ?></th>
            <td><?= $this->Number->format($order->total) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($order->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($order->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Order Items') ?></h4>
        <?php if (!empty($order->order_items)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Order Id') ?></th>
                <th scope="col"><?= __('Product Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Quantity') ?></th>
                <th scope="col"><?= __('Weight') ?></th>
                <th scope="col"><?= __('Price') ?></th>
                <th scope="col"><?= __('Subtotal') ?></th>
                <th scope="col"><?= __('Productmod Name') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($order->order_items as $orderItems): ?>
            <tr>
                <td><?= h($orderItems->id) ?></td>
                <td><?= h($orderItems->order_id) ?></td>
                <td><?= h($orderItems->product_id) ?></td>
                <td><?= h($orderItems->name) ?></td>
                <td><?= h($orderItems->quantity) ?></td>
                <td><?= h($orderItems->weight) ?></td>
                <td><?= h($orderItems->price) ?></td>
                <td><?= h($orderItems->subtotal) ?></td>
                <td><?= h($orderItems->productmod_name) ?></td>
                <td><?= h($orderItems->created) ?></td>
                <td><?= h($orderItems->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'OrderItems', 'action' => 'view', $orderItems->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'OrderItems', 'action' => 'edit', $orderItems->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'OrderItems', 'action' => 'delete', $orderItems->id], ['confirm' => __('Are you sure you want to delete # {0}?', $orderItems->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
