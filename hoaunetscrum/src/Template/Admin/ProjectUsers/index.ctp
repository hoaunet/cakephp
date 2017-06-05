<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Project User'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projects'), ['controller' => 'Projects', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Project'), ['controller' => 'Projects', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Companies'), ['controller' => 'Companies', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Company'), ['controller' => 'Companies', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="projectUsers index large-9 medium-8 columns content">
    <h3><?= __('Project Users') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('project_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('company_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('istype') ?></th>
                <th scope="col"><?= $this->Paginator->sort('default_email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dt_visited') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($projectUsers as $projectUser): ?>
            <tr>
                <td><?= $this->Number->format($projectUser->id) ?></td>
                <td><?= $projectUser->has('project') ? $this->Html->link($projectUser->project->name, ['controller' => 'Projects', 'action' => 'view', $projectUser->project->id]) : '' ?></td>
                <td><?= $projectUser->has('company') ? $this->Html->link($projectUser->company->name, ['controller' => 'Companies', 'action' => 'view', $projectUser->company->id]) : '' ?></td>
                <td><?= $projectUser->has('user') ? $this->Html->link($projectUser->user->name, ['controller' => 'Users', 'action' => 'view', $projectUser->user->id]) : '' ?></td>
                <td><?= $this->Number->format($projectUser->istype) ?></td>
                <td><?= $this->Number->format($projectUser->default_email) ?></td>
                <td><?= h($projectUser->dt_visited) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $projectUser->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $projectUser->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $projectUser->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projectUser->id)]) ?>
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
