<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Easycase'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projects'), ['controller' => 'Projects', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Project'), ['controller' => 'Projects', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Types'), ['controller' => 'Types', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Type'), ['controller' => 'Types', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Archives'), ['controller' => 'Archives', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Archive'), ['controller' => 'Archives', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Case Actions'), ['controller' => 'CaseActions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Case Action'), ['controller' => 'CaseActions', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Case Activities'), ['controller' => 'CaseActivities', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Case Activity'), ['controller' => 'CaseActivities', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Case File Drives'), ['controller' => 'CaseFileDrives', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Case File Drive'), ['controller' => 'CaseFileDrives', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Case Files'), ['controller' => 'CaseFiles', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Case File'), ['controller' => 'CaseFiles', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Case Recents'), ['controller' => 'CaseRecents', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Case Recent'), ['controller' => 'CaseRecents', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Case User Emails'), ['controller' => 'CaseUserEmails', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Case User Email'), ['controller' => 'CaseUserEmails', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Case User Views'), ['controller' => 'CaseUserViews', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Case User View'), ['controller' => 'CaseUserViews', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Easycase Milestones'), ['controller' => 'EasycaseMilestones', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Easycase Milestone'), ['controller' => 'EasycaseMilestones', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="easycases index large-9 medium-8 columns content">
    <h3><?= __('Easycases') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('uniq_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('case_no') ?></th>
                <th scope="col"><?= $this->Paginator->sort('case_count') ?></th>
                <th scope="col"><?= $this->Paginator->sort('project_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('updated_by') ?></th>
                <th scope="col"><?= $this->Paginator->sort('type_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('priority') ?></th>
                <th scope="col"><?= $this->Paginator->sort('title') ?></th>
                <th scope="col"><?= $this->Paginator->sort('estimated_hours') ?></th>
                <th scope="col"><?= $this->Paginator->sort('hours') ?></th>
                <th scope="col"><?= $this->Paginator->sort('completed_task') ?></th>
                <th scope="col"><?= $this->Paginator->sort('assign_to') ?></th>
                <th scope="col"><?= $this->Paginator->sort('due_date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('istype') ?></th>
                <th scope="col"><?= $this->Paginator->sort('format') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                <th scope="col"><?= $this->Paginator->sort('legend') ?></th>
                <th scope="col"><?= $this->Paginator->sort('isactive') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dt_created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('actual_dt_created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('reply_type') ?></th>
                <th scope="col"><?= $this->Paginator->sort('is_chrome_extension') ?></th>
                <th scope="col"><?= $this->Paginator->sort('from_email') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($easycases as $easycase): ?>
            <tr>
                <td><?= $this->Number->format($easycase->id) ?></td>
                <td><?= h($easycase->uniq_id) ?></td>
                <td><?= $this->Number->format($easycase->case_no) ?></td>
                <td><?= $this->Number->format($easycase->case_count) ?></td>
                <td><?= $easycase->has('project') ? $this->Html->link($easycase->project->name, ['controller' => 'Projects', 'action' => 'view', $easycase->project->id]) : '' ?></td>
                <td><?= $easycase->has('user') ? $this->Html->link($easycase->user->name, ['controller' => 'Users', 'action' => 'view', $easycase->user->id]) : '' ?></td>
                <td><?= $this->Number->format($easycase->updated_by) ?></td>
                <td><?= $easycase->has('type') ? $this->Html->link($easycase->type->name, ['controller' => 'Types', 'action' => 'view', $easycase->type->id]) : '' ?></td>
                <td><?= h($easycase->priority) ?></td>
                <td><?= h($easycase->title) ?></td>
                <td><?= $this->Number->format($easycase->estimated_hours) ?></td>
                <td><?= $this->Number->format($easycase->hours) ?></td>
                <td><?= $this->Number->format($easycase->completed_task) ?></td>
                <td><?= $this->Number->format($easycase->assign_to) ?></td>
                <td><?= h($easycase->due_date) ?></td>
                <td><?= $this->Number->format($easycase->istype) ?></td>
                <td><?= $this->Number->format($easycase->format) ?></td>
                <td><?= $this->Number->format($easycase->status) ?></td>
                <td><?= $this->Number->format($easycase->legend) ?></td>
                <td><?= $this->Number->format($easycase->isactive) ?></td>
                <td><?= h($easycase->dt_created) ?></td>
                <td><?= h($easycase->actual_dt_created) ?></td>
                <td><?= $this->Number->format($easycase->reply_type) ?></td>
                <td><?= h($easycase->is_chrome_extension) ?></td>
                <td><?= h($easycase->from_email) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $easycase->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $easycase->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $easycase->id], ['confirm' => __('Are you sure you want to delete # {0}?', $easycase->id)]) ?>
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
