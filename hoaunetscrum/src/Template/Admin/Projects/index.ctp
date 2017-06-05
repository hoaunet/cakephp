<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Project'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Companies'), ['controller' => 'Companies', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Company'), ['controller' => 'Companies', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Case Activities'), ['controller' => 'CaseActivities', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Case Activity'), ['controller' => 'CaseActivities', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Case File Drives'), ['controller' => 'CaseFileDrives', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Case File Drive'), ['controller' => 'CaseFileDrives', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Case Files'), ['controller' => 'CaseFiles', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Case File'), ['controller' => 'CaseFiles', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Case Recents'), ['controller' => 'CaseRecents', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Case Recent'), ['controller' => 'CaseRecents', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Case Settings'), ['controller' => 'CaseSettings', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Case Setting'), ['controller' => 'CaseSettings', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Case User Views'), ['controller' => 'CaseUserViews', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Case User View'), ['controller' => 'CaseUserViews', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Daily Updates'), ['controller' => 'DailyUpdates', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Daily Update'), ['controller' => 'DailyUpdates', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Easycase Milestones'), ['controller' => 'EasycaseMilestones', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Easycase Milestone'), ['controller' => 'EasycaseMilestones', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Easycases'), ['controller' => 'Easycases', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Easycase'), ['controller' => 'Easycases', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Milestones'), ['controller' => 'Milestones', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Milestone'), ['controller' => 'Milestones', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Project Technologies'), ['controller' => 'ProjectTechnologies', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Project Technology'), ['controller' => 'ProjectTechnologies', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Project Users'), ['controller' => 'ProjectUsers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Project User'), ['controller' => 'ProjectUsers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Template Module Cases'), ['controller' => 'TemplateModuleCases', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Template Module Case'), ['controller' => 'TemplateModuleCases', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List User Invitations'), ['controller' => 'UserInvitations', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User Invitation'), ['controller' => 'UserInvitations', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="projects index large-9 medium-8 columns content">
    <h3><?= __('Projects') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('uniq_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('company_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('short_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('logo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('project_type') ?></th>
                <th scope="col"><?= $this->Paginator->sort('default_assign') ?></th>
                <th scope="col"><?= $this->Paginator->sort('isactive') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dt_created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dt_updated') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($projects as $project): ?>
            <tr>
                <td><?= $this->Number->format($project->id) ?></td>
                <td><?= h($project->uniq_id) ?></td>
                <td><?= $project->has('user') ? $this->Html->link($project->user->name, ['controller' => 'Users', 'action' => 'view', $project->user->id]) : '' ?></td>
                <td><?= $project->has('company') ? $this->Html->link($project->company->name, ['controller' => 'Companies', 'action' => 'view', $project->company->id]) : '' ?></td>
                <td><?= h($project->name) ?></td>
                <td><?= h($project->short_name) ?></td>
                <td><?= h($project->logo) ?></td>
                <td><?= $this->Number->format($project->project_type) ?></td>
                <td><?= $this->Number->format($project->default_assign) ?></td>
                <td><?= $this->Number->format($project->isactive) ?></td>
                <td><?= h($project->dt_created) ?></td>
                <td><?= h($project->dt_updated) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $project->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $project->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $project->id], ['confirm' => __('Are you sure you want to delete # {0}?', $project->id)]) ?>
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
