<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Order Items'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Orders'), ['controller' => 'Orders', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Order'), ['controller' => 'Orders', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Products'), ['controller' => 'Products', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Product'), ['controller' => 'Products', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="orderItems form large-9 medium-8 columns content">
    <?= $this->Form->create($orderItem) ?>
    <fieldset>
        <legend><?= __('Add Order Item') ?></legend>
        <?php
            echo $this->Form->control('order_id', ['options' => $orders, 'empty' => true]);
            echo $this->Form->control('product_id', ['options' => $products, 'empty' => true]);
            echo $this->Form->control('name');
            echo $this->Form->control('quantity');
            echo $this->Form->control('weight');
            echo $this->Form->control('price');
            echo $this->Form->control('subtotal');
            echo $this->Form->control('productmod_name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>