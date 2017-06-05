<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Case User View'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Easycases'), ['controller' => 'Easycases', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Easycase'), ['controller' => 'Easycases', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projects'), ['controller' => 'Projects', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Project'), ['controller' => 'Projects', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="caseUserViews index large-9 medium-8 columns content">
    <h3><?= __('Case User Views') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('easycase_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('project_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('istype') ?></th>
                <th scope="col"><?= $this->Paginator->sort('isviewed') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dt_created') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($caseUserViews as $caseUserView): ?>
            <tr>
                <td><?= $this->Number->format($caseUserView->id) ?></td>
                <td><?= $caseUserView->has('easycase') ? $this->Html->link($caseUserView->easycase->title, ['controller' => 'Easycases', 'action' => 'view', $caseUserView->easycase->id]) : '' ?></td>
                <td><?= $caseUserView->has('user') ? $this->Html->link($caseUserView->user->name, ['controller' => 'Users', 'action' => 'view', $caseUserView->user->id]) : '' ?></td>
                <td><?= $caseUserView->has('project') ? $this->Html->link($caseUserView->project->name, ['controller' => 'Projects', 'action' => 'view', $caseUserView->project->id]) : '' ?></td>
                <td><?= $this->Number->format($caseUserView->istype) ?></td>
                <td><?= $this->Number->format($caseUserView->isviewed) ?></td>
                <td><?= h($caseUserView->dt_created) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $caseUserView->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $caseUserView->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $caseUserView->id], ['confirm' => __('Are you sure you want to delete # {0}?', $caseUserView->id)]) ?>
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
