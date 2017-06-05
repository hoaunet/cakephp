<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Default Project Template'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Companies'), ['controller' => 'Companies', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Company'), ['controller' => 'Companies', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="defaultProjectTemplates index large-9 medium-8 columns content">
    <h3><?= __('Default Project Templates') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('company_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('module_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($defaultProjectTemplates as $defaultProjectTemplate): ?>
            <tr>
                <td><?= $this->Number->format($defaultProjectTemplate->id) ?></td>
                <td><?= $defaultProjectTemplate->has('user') ? $this->Html->link($defaultProjectTemplate->user->name, ['controller' => 'Users', 'action' => 'view', $defaultProjectTemplate->user->id]) : '' ?></td>
                <td><?= $defaultProjectTemplate->has('company') ? $this->Html->link($defaultProjectTemplate->company->name, ['controller' => 'Companies', 'action' => 'view', $defaultProjectTemplate->company->id]) : '' ?></td>
                <td><?= h($defaultProjectTemplate->module_name) ?></td>
                <td><?= h($defaultProjectTemplate->created) ?></td>
                <td><?= h($defaultProjectTemplate->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $defaultProjectTemplate->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $defaultProjectTemplate->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $defaultProjectTemplate->id], ['confirm' => __('Are you sure you want to delete # {0}?', $defaultProjectTemplate->id)]) ?>
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
