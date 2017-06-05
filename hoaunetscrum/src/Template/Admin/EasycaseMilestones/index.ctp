<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Easycase Milestone'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Easycases'), ['controller' => 'Easycases', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Easycase'), ['controller' => 'Easycases', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Milestones'), ['controller' => 'Milestones', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Milestone'), ['controller' => 'Milestones', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projects'), ['controller' => 'Projects', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Project'), ['controller' => 'Projects', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="easycaseMilestones index large-9 medium-8 columns content">
    <h3><?= __('Easycase Milestones') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('easycase_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('milestone_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('project_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('id_seq') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($easycaseMilestones as $easycaseMilestone): ?>
            <tr>
                <td><?= $this->Number->format($easycaseMilestone->id) ?></td>
                <td><?= $easycaseMilestone->has('easycase') ? $this->Html->link($easycaseMilestone->easycase->title, ['controller' => 'Easycases', 'action' => 'view', $easycaseMilestone->easycase->id]) : '' ?></td>
                <td><?= $easycaseMilestone->has('milestone') ? $this->Html->link($easycaseMilestone->milestone->title, ['controller' => 'Milestones', 'action' => 'view', $easycaseMilestone->milestone->id]) : '' ?></td>
                <td><?= $easycaseMilestone->has('project') ? $this->Html->link($easycaseMilestone->project->name, ['controller' => 'Projects', 'action' => 'view', $easycaseMilestone->project->id]) : '' ?></td>
                <td><?= $easycaseMilestone->has('user') ? $this->Html->link($easycaseMilestone->user->name, ['controller' => 'Users', 'action' => 'view', $easycaseMilestone->user->id]) : '' ?></td>
                <td><?= h($easycaseMilestone->created) ?></td>
                <td><?= $this->Number->format($easycaseMilestone->id_seq) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $easycaseMilestone->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $easycaseMilestone->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $easycaseMilestone->id], ['confirm' => __('Are you sure you want to delete # {0}?', $easycaseMilestone->id)]) ?>
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
