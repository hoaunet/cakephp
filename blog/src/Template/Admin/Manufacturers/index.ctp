<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Manufacturer'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="manufacturers index large-9 medium-8 columns content">
    <h3><?= __('Manufacturers') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('manufacturers_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('manufacturers_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('manufacturers_image') ?></th>
                <th scope="col"><?= $this->Paginator->sort('date_added') ?></th>
                <th scope="col"><?= $this->Paginator->sort('last_modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($manufacturers as $manufacturer): ?>
            <tr>
                <td><?= $manufacturer->has('manufacturer') ? $this->Html->link($manufacturer->manufacturer->manufacturers_id, ['controller' => 'Manufacturers', 'action' => 'view', $manufacturer->manufacturer->manufacturers_id]) : '' ?></td>
                <td><?= h($manufacturer->manufacturers_name) ?></td>
                <td><?= h($manufacturer->manufacturers_image) ?></td>
                <td><?= h($manufacturer->date_added) ?></td>
                <td><?= h($manufacturer->last_modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $manufacturer->manufacturers_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $manufacturer->manufacturers_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $manufacturer->manufacturers_id], ['confirm' => __('Are you sure you want to delete # {0}?', $manufacturer->manufacturers_id)]) ?>
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
