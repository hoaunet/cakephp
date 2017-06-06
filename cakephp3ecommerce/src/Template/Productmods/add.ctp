<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Productmods'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Products'), ['controller' => 'Products', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Product'), ['controller' => 'Products', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="productmods form large-9 medium-8 columns content">
    <?= $this->Form->create($productmod) ?>
    <fieldset>
        <legend><?= __('Add Productmod') ?></legend>
        <?php
            echo $this->Form->control('product_id', ['options' => $products, 'empty' => true]);
            echo $this->Form->control('sku');
            echo $this->Form->control('name');
            echo $this->Form->control('value');
            echo $this->Form->control('price');
            echo $this->Form->control('weight');
            echo $this->Form->control('active');
            echo $this->Form->control('views');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
