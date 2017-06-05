<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Milestone'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projects'), ['controller' => 'Projects', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Project'), ['controller' => 'Projects', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Companies'), ['controller' => 'Companies', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Company'), ['controller' => 'Companies', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Easycase Milestones'), ['controller' => 'EasycaseMilestones', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Easycase Milestone'), ['controller' => 'EasycaseMilestones', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="milestones index large-9 medium-8 columns content">
    <h3><?= __('Milestones') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('uniq_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('project_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('company_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('title') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('start_date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('end_date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('isactive') ?></th>
                <th scope="col"><?= $this->Paginator->sort('id_seq') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($milestones as $milestone): ?>
            <tr>
                <td><?= $this->Number->format($milestone->id) ?></td>
                <td><?= h($milestone->uniq_id) ?></td>
                <td><?= $milestone->has('project') ? $this->Html->link($milestone->project->name, ['controller' => 'Projects', 'action' => 'view', $milestone->project->id]) : '' ?></td>
                <td><?= $milestone->has('company') ? $this->Html->link($milestone->company->name, ['controller' => 'Companies', 'action' => 'view', $milestone->company->id]) : '' ?></td>
                <td><?= h($milestone->title) ?></td>
                <td><?= $milestone->has('user') ? $this->Html->link($milestone->user->name, ['controller' => 'Users', 'action' => 'view', $milestone->user->id]) : '' ?></td>
                <td><?= h($milestone->start_date) ?></td>
                <td><?= h($milestone->end_date) ?></td>
                <td><?= h($milestone->created) ?></td>
                <td><?= h($milestone->modified) ?></td>
                <td><?= $this->Number->format($milestone->isactive) ?></td>
                <td><?= $this->Number->format($milestone->id_seq) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $milestone->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $milestone->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $milestone->id], ['confirm' => __('Are you sure you want to delete # {0}?', $milestone->id)]) ?>
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
