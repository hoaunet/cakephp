<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Timezone'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Daily Updates'), ['controller' => 'DailyUpdates', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Daily Update'), ['controller' => 'DailyUpdates', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="timezones index large-9 medium-8 columns content">
    <h3><?= __('Timezones') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('gmt_offset') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dst_offset') ?></th>
                <th scope="col"><?= $this->Paginator->sort('code') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($timezones as $timezone): ?>
            <tr>
                <td><?= $this->Number->format($timezone->id) ?></td>
                <td><?= $this->Number->format($timezone->gmt_offset) ?></td>
                <td><?= $this->Number->format($timezone->dst_offset) ?></td>
                <td><?= h($timezone->code) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $timezone->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $timezone->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $timezone->id], ['confirm' => __('Are you sure you want to delete # {0}?', $timezone->id)]) ?>
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
