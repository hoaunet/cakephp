<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Project Template'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Companies'), ['controller' => 'Companies', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Company'), ['controller' => 'Companies', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="projectTemplates index large-9 medium-8 columns content">
    <h3><?= __('Project Templates') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('company_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('module_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('is_default') ?></th>
                <th scope="col"><?= $this->Paginator->sort('is_active') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($projectTemplates as $projectTemplate): ?>
            <tr>
                <td><?= $this->Number->format($projectTemplate->id) ?></td>
                <td><?= $projectTemplate->has('user') ? $this->Html->link($projectTemplate->user->name, ['controller' => 'Users', 'action' => 'view', $projectTemplate->user->id]) : '' ?></td>
                <td><?= $projectTemplate->has('company') ? $this->Html->link($projectTemplate->company->name, ['controller' => 'Companies', 'action' => 'view', $projectTemplate->company->id]) : '' ?></td>
                <td><?= h($projectTemplate->module_name) ?></td>
                <td><?= $this->Number->format($projectTemplate->is_default) ?></td>
                <td><?= $this->Number->format($projectTemplate->is_active) ?></td>
                <td><?= h($projectTemplate->created) ?></td>
                <td><?= h($projectTemplate->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $projectTemplate->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $projectTemplate->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $projectTemplate->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projectTemplate->id)]) ?>
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
