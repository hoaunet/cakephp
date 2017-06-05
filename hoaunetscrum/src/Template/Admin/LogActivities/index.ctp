<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Log Activity'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Companies'), ['controller' => 'Companies', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Company'), ['controller' => 'Companies', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Log Types'), ['controller' => 'LogTypes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Log Type'), ['controller' => 'LogTypes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="logActivities index large-9 medium-8 columns content">
    <h3><?= __('Log Activities') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('company_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('log_type_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ip') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($logActivities as $logActivity): ?>
            <tr>
                <td><?= $this->Number->format($logActivity->id) ?></td>
                <td><?= $logActivity->has('company') ? $this->Html->link($logActivity->company->name, ['controller' => 'Companies', 'action' => 'view', $logActivity->company->id]) : '' ?></td>
                <td><?= $logActivity->has('user') ? $this->Html->link($logActivity->user->name, ['controller' => 'Users', 'action' => 'view', $logActivity->user->id]) : '' ?></td>
                <td><?= $logActivity->has('log_type') ? $this->Html->link($logActivity->log_type->name, ['controller' => 'LogTypes', 'action' => 'view', $logActivity->log_type->id]) : '' ?></td>
                <td><?= h($logActivity->created) ?></td>
                <td><?= h($logActivity->ip) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $logActivity->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $logActivity->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $logActivity->id], ['confirm' => __('Are you sure you want to delete # {0}?', $logActivity->id)]) ?>
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
