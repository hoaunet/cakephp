<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Case Action'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Easycases'), ['controller' => 'Easycases', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Easycase'), ['controller' => 'Easycases', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="caseActions index large-9 medium-8 columns content">
    <h3><?= __('Case Actions') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('easycase_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('action') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dt_created') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($caseActions as $caseAction): ?>
            <tr>
                <td><?= $this->Number->format($caseAction->id) ?></td>
                <td><?= $caseAction->has('easycase') ? $this->Html->link($caseAction->easycase->title, ['controller' => 'Easycases', 'action' => 'view', $caseAction->easycase->id]) : '' ?></td>
                <td><?= $caseAction->has('user') ? $this->Html->link($caseAction->user->name, ['controller' => 'Users', 'action' => 'view', $caseAction->user->id]) : '' ?></td>
                <td><?= $this->Number->format($caseAction->action) ?></td>
                <td><?= h($caseAction->dt_created) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $caseAction->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $caseAction->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $caseAction->id], ['confirm' => __('Are you sure you want to delete # {0}?', $caseAction->id)]) ?>
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
