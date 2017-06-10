<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $product->products_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $product->products_id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Products'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Products'), ['controller' => 'Products', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Product'), ['controller' => 'Products', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Categories'), ['controller' => 'Categories', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Category'), ['controller' => 'Categories', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="products form large-9 medium-8 columns content">
    <?= $this->Form->create($product) ?>
    <fieldset>
        <legend><?= __('Edit Product') ?></legend>
        <?php
            echo $this->Form->control('products_quantity');
            echo $this->Form->control('products_model');
            echo $this->Form->control('products_image');
            echo $this->Form->control('products_price');
            echo $this->Form->control('products_date_added');
            echo $this->Form->control('products_last_modified', ['empty' => true]);
            echo $this->Form->control('products_date_available', ['empty' => true]);
            echo $this->Form->control('products_weight');
            echo $this->Form->control('products_status');
            echo $this->Form->control('products_tax_class_id');
            echo $this->Form->control('manufacturers_id');
            echo $this->Form->control('products_ordered');
            echo $this->Form->control('categories_id', ['options' => $categories]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
