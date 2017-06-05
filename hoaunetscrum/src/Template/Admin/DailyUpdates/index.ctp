<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Daily Update'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Companies'), ['controller' => 'Companies', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Company'), ['controller' => 'Companies', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projects'), ['controller' => 'Projects', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Project'), ['controller' => 'Projects', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Timezones'), ['controller' => 'Timezones', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Timezone'), ['controller' => 'Timezones', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="dailyUpdates index large-9 medium-8 columns content">
    <h3><?= __('Daily Updates') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('company_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('project_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('post_by') ?></th>
                <th scope="col"><?= $this->Paginator->sort('timezone_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('notification_time') ?></th>
                <th scope="col"><?= $this->Paginator->sort('days') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cron_email_date') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($dailyUpdates as $dailyUpdate): ?>
            <tr>
                <td><?= $this->Number->format($dailyUpdate->id) ?></td>
                <td><?= $dailyUpdate->has('company') ? $this->Html->link($dailyUpdate->company->name, ['controller' => 'Companies', 'action' => 'view', $dailyUpdate->company->id]) : '' ?></td>
                <td><?= $dailyUpdate->has('project') ? $this->Html->link($dailyUpdate->project->name, ['controller' => 'Projects', 'action' => 'view', $dailyUpdate->project->id]) : '' ?></td>
                <td><?= $this->Number->format($dailyUpdate->post_by) ?></td>
                <td><?= $dailyUpdate->has('timezone') ? $this->Html->link($dailyUpdate->timezone->id, ['controller' => 'Timezones', 'action' => 'view', $dailyUpdate->timezone->id]) : '' ?></td>
                <td><?= h($dailyUpdate->notification_time) ?></td>
                <td><?= $this->Number->format($dailyUpdate->days) ?></td>
                <td><?= h($dailyUpdate->cron_email_date) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $dailyUpdate->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $dailyUpdate->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $dailyUpdate->id], ['confirm' => __('Are you sure you want to delete # {0}?', $dailyUpdate->id)]) ?>
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
