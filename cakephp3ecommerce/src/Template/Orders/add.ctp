<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Orders'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Order Items'), ['controller' => 'OrderItems', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Order Item'), ['controller' => 'OrderItems', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="orders form large-9 medium-8 columns content">
    <?= $this->Form->create($order) ?>
    <fieldset>
        <legend><?= __('Add Order') ?></legend>
        <?php
            echo $this->Form->control('first_name');
            echo $this->Form->control('last_name');
            echo $this->Form->control('email');
            echo $this->Form->control('phone');
            echo $this->Form->control('billing_address');
            echo $this->Form->control('billing_address2');
            echo $this->Form->control('billing_city');
            echo $this->Form->control('billing_zip');
            echo $this->Form->control('billing_state');
            echo $this->Form->control('billing_country');
            echo $this->Form->control('shipping_address');
            echo $this->Form->control('shipping_address2');
            echo $this->Form->control('shipping_city');
            echo $this->Form->control('shipping_zip');
            echo $this->Form->control('shipping_state');
            echo $this->Form->control('shipping_country');
            echo $this->Form->control('weight');
            echo $this->Form->control('order_item_count');
            echo $this->Form->control('subtotal');
            echo $this->Form->control('tax');
            echo $this->Form->control('shipping');
            echo $this->Form->control('total');
            echo $this->Form->control('order_type');
            echo $this->Form->control('authorization');
            echo $this->Form->control('transaction');
            echo $this->Form->control('status');
            echo $this->Form->control('ip_address');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
