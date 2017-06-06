<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Product'), ['action' => 'edit', $product->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Product'), ['action' => 'delete', $product->id], ['confirm' => __('Are you sure you want to delete # {0}?', $product->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Products'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Product'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Categories'), ['controller' => 'Categories', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Category'), ['controller' => 'Categories', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Brands'), ['controller' => 'Brands', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Brand'), ['controller' => 'Brands', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Order Items'), ['controller' => 'OrderItems', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Order Item'), ['controller' => 'OrderItems', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Productmods'), ['controller' => 'Productmods', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Productmod'), ['controller' => 'Productmods', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="products view large-9 medium-8 columns content">
    <h3><?= h($product->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Category') ?></th>
            <td><?= $product->has('category') ? $this->Html->link($product->category->name, ['controller' => 'Categories', 'action' => 'view', $product->category->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Brand') ?></th>
            <td><?= $product->has('brand') ? $this->Html->link($product->brand->name, ['controller' => 'Brands', 'action' => 'view', $product->brand->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($product->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Slug') ?></th>
            <td><?= h($product->slug) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Image') ?></th>
            <td><?= h($product->image) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tags') ?></th>
            <td><?= h($product->tags) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($product->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Price') ?></th>
            <td><?= $this->Number->format($product->price) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Weight') ?></th>
            <td><?= $this->Number->format($product->weight) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Views') ?></th>
            <td><?= $this->Number->format($product->views) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Active') ?></th>
            <td><?= $this->Number->format($product->active) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($product->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($product->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($product->description)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Order Items') ?></h4>
        <?php if (!empty($product->order_items)): ?>
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
            <?php foreach ($product->order_items as $orderItems): ?>
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
    <div class="related">
        <h4><?= __('Related Productmods') ?></h4>
        <?php if (!empty($product->productmods)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Product Id') ?></th>
                <th scope="col"><?= __('Sku') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Value') ?></th>
                <th scope="col"><?= __('Price') ?></th>
                <th scope="col"><?= __('Weight') ?></th>
                <th scope="col"><?= __('Active') ?></th>
                <th scope="col"><?= __('Views') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($product->productmods as $productmods): ?>
            <tr>
                <td><?= h($productmods->id) ?></td>
                <td><?= h($productmods->product_id) ?></td>
                <td><?= h($productmods->sku) ?></td>
                <td><?= h($productmods->name) ?></td>
                <td><?= h($productmods->value) ?></td>
                <td><?= h($productmods->price) ?></td>
                <td><?= h($productmods->weight) ?></td>
                <td><?= h($productmods->active) ?></td>
                <td><?= h($productmods->views) ?></td>
                <td><?= h($productmods->created) ?></td>
                <td><?= h($productmods->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Productmods', 'action' => 'view', $productmods->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Productmods', 'action' => 'edit', $productmods->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Productmods', 'action' => 'delete', $productmods->id], ['confirm' => __('Are you sure you want to delete # {0}?', $productmods->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
