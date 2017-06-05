<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Template Module Case'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Companies'), ['controller' => 'Companies', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Company'), ['controller' => 'Companies', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projects'), ['controller' => 'Projects', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Project'), ['controller' => 'Projects', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="templateModuleCases index large-9 medium-8 columns content">
    <h3><?= __('Template Module Cases') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('company_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('template_module_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('project_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($templateModuleCases as $templateModuleCase): ?>
            <tr>
                <td><?= $this->Number->format($templateModuleCase->id) ?></td>
                <td><?= $templateModuleCase->has('user') ? $this->Html->link($templateModuleCase->user->name, ['controller' => 'Users', 'action' => 'view', $templateModuleCase->user->id]) : '' ?></td>
                <td><?= $templateModuleCase->has('company') ? $this->Html->link($templateModuleCase->company->name, ['controller' => 'Companies', 'action' => 'view', $templateModuleCase->company->id]) : '' ?></td>
                <td><?= $this->Number->format($templateModuleCase->template_module_id) ?></td>
                <td><?= $templateModuleCase->has('project') ? $this->Html->link($templateModuleCase->project->name, ['controller' => 'Projects', 'action' => 'view', $templateModuleCase->project->id]) : '' ?></td>
                <td><?= h($templateModuleCase->created) ?></td>
                <td><?= h($templateModuleCase->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $templateModuleCase->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $templateModuleCase->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $templateModuleCase->id], ['confirm' => __('Are you sure you want to delete # {0}?', $templateModuleCase->id)]) ?>
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
