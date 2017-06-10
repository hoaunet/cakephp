<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Productcategory[]|\Cake\Collection\CollectionInterface $productcategories
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Productcategory'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="productcategories index large-9 medium-8 columns content">
    <h3><?= __('Productcategories') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('categories_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('categories_image') ?></th>
                <th scope="col"><?= $this->Paginator->sort('parent_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sort_order') ?></th>
                <th scope="col"><?= $this->Paginator->sort('date_added') ?></th>
                <th scope="col"><?= $this->Paginator->sort('last_modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($productcategories as $productcategory): ?>
            <tr>
                <td><?= $this->Number->format($productcategory->id) ?></td>
                <td><?= h($productcategory->categories_name) ?></td>
                <td><?= h($productcategory->categories_image) ?></td>
                <td><?= $productcategory->has('parent_productcategory') ? $this->Html->link($productcategory->parent_productcategory->id, ['controller' => 'Productcategories', 'action' => 'view', $productcategory->parent_productcategory->id]) : '' ?></td>
                <td><?= $this->Number->format($productcategory->sort_order) ?></td>
                <td><?= h($productcategory->date_added) ?></td>
                <td><?= h($productcategory->last_modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $productcategory->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $productcategory->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $productcategory->id], ['confirm' => __('Are you sure you want to delete # {0}?', $productcategory->id)]) ?>
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
