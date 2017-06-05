<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Case Setting'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projects'), ['controller' => 'Projects', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Project'), ['controller' => 'Projects', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Types'), ['controller' => 'Types', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Type'), ['controller' => 'Types', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="caseSettings index large-9 medium-8 columns content">
    <h3><?= __('Case Settings') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('project_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('project_uniqid') ?></th>
                <th scope="col"><?= $this->Paginator->sort('type_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('assign_to') ?></th>
                <th scope="col"><?= $this->Paginator->sort('priority') ?></th>
                <th scope="col"><?= $this->Paginator->sort('due_date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($caseSettings as $caseSetting): ?>
            <tr>
                <td><?= $this->Number->format($caseSetting->id) ?></td>
                <td><?= $caseSetting->has('project') ? $this->Html->link($caseSetting->project->name, ['controller' => 'Projects', 'action' => 'view', $caseSetting->project->id]) : '' ?></td>
                <td><?= h($caseSetting->project_uniqid) ?></td>
                <td><?= $caseSetting->has('type') ? $this->Html->link($caseSetting->type->name, ['controller' => 'Types', 'action' => 'view', $caseSetting->type->id]) : '' ?></td>
                <td><?= $this->Number->format($caseSetting->assign_to) ?></td>
                <td><?= $this->Number->format($caseSetting->priority) ?></td>
                <td><?= h($caseSetting->due_date) ?></td>
                <td><?= h($caseSetting->email) ?></td>
                <td><?= $caseSetting->has('user') ? $this->Html->link($caseSetting->user->name, ['controller' => 'Users', 'action' => 'view', $caseSetting->user->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $caseSetting->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $caseSetting->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $caseSetting->id], ['confirm' => __('Are you sure you want to delete # {0}?', $caseSetting->id)]) ?>
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
