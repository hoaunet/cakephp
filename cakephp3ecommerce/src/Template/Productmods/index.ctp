<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Productmod'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Products'), ['controller' => 'Products', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Product'), ['controller' => 'Products', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="productmods index large-9 medium-8 columns content">
    <h3><?= __('Productmods') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('product_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sku') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('value') ?></th>
                <th scope="col"><?= $this->Paginator->sort('price') ?></th>
                <th scope="col"><?= $this->Paginator->sort('weight') ?></th>
                <th scope="col"><?= $this->Paginator->sort('active') ?></th>
                <th scope="col"><?= $this->Paginator->sort('views') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($productmods as $productmod): ?>
            <tr>
                <td><?= $this->Number->format($productmod->id) ?></td>
                <td><?= $productmod->has('product') ? $this->Html->link($productmod->product->name, ['controller' => 'Products', 'action' => 'view', $productmod->product->id]) : '' ?></td>
                <td><?= h($productmod->sku) ?></td>
                <td><?= h($productmod->name) ?></td>
                <td><?= h($productmod->value) ?></td>
                <td><?= $this->Number->format($productmod->price) ?></td>
                <td><?= $this->Number->format($productmod->weight) ?></td>
                <td><?= $this->Number->format($productmod->active) ?></td>
                <td><?= $this->Number->format($productmod->views) ?></td>
                <td><?= h($productmod->created) ?></td>
                <td><?= h($productmod->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $productmod->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $productmod->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $productmod->id], ['confirm' => __('Are you sure you want to delete # {0}?', $productmod->id)]) ?>
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
