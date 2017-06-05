<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Save Report'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="saveReports index large-9 medium-8 columns content">
    <h3><?= __('Save Reports') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('rpt_type') ?></th>
                <th scope="col"><?= $this->Paginator->sort('frm_dt') ?></th>
                <th scope="col"><?= $this->Paginator->sort('to_dt') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ip') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($saveReports as $saveReport): ?>
            <tr>
                <td><?= $this->Number->format($saveReport->id) ?></td>
                <td><?= $saveReport->has('user') ? $this->Html->link($saveReport->user->name, ['controller' => 'Users', 'action' => 'view', $saveReport->user->id]) : '' ?></td>
                <td><?= $this->Number->format($saveReport->rpt_type) ?></td>
                <td><?= h($saveReport->frm_dt) ?></td>
                <td><?= h($saveReport->to_dt) ?></td>
                <td><?= h($saveReport->created) ?></td>
                <td><?= h($saveReport->ip) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $saveReport->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $saveReport->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $saveReport->id], ['confirm' => __('Are you sure you want to delete # {0}?', $saveReport->id)]) ?>
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
