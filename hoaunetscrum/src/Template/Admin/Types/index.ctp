<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Type'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Companies'), ['controller' => 'Companies', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Company'), ['controller' => 'Companies', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Case Settings'), ['controller' => 'CaseSettings', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Case Setting'), ['controller' => 'CaseSettings', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Easycases'), ['controller' => 'Easycases', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Easycase'), ['controller' => 'Easycases', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Type Companies'), ['controller' => 'TypeCompanies', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Type Company'), ['controller' => 'TypeCompanies', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="types index large-9 medium-8 columns content">
    <h3><?= __('Types') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('company_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('short_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('seq_order') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($types as $type): ?>
            <tr>
                <td><?= $this->Number->format($type->id) ?></td>
                <td><?= $type->has('company') ? $this->Html->link($type->company->name, ['controller' => 'Companies', 'action' => 'view', $type->company->id]) : '' ?></td>
                <td><?= h($type->short_name) ?></td>
                <td><?= h($type->name) ?></td>
                <td><?= $this->Number->format($type->seq_order) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $type->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $type->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $type->id], ['confirm' => __('Are you sure you want to delete # {0}?', $type->id)]) ?>
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
