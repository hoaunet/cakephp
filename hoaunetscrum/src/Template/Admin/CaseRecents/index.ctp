<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Case Recent'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Easycases'), ['controller' => 'Easycases', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Easycase'), ['controller' => 'Easycases', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Companies'), ['controller' => 'Companies', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Company'), ['controller' => 'Companies', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projects'), ['controller' => 'Projects', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Project'), ['controller' => 'Projects', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="caseRecents index large-9 medium-8 columns content">
    <h3><?= __('Case Recents') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('easycase_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('company_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('project_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dt_created') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($caseRecents as $caseRecent): ?>
            <tr>
                <td><?= $this->Number->format($caseRecent->id) ?></td>
                <td><?= $caseRecent->has('easycase') ? $this->Html->link($caseRecent->easycase->title, ['controller' => 'Easycases', 'action' => 'view', $caseRecent->easycase->id]) : '' ?></td>
                <td><?= $caseRecent->has('company') ? $this->Html->link($caseRecent->company->name, ['controller' => 'Companies', 'action' => 'view', $caseRecent->company->id]) : '' ?></td>
                <td><?= $caseRecent->has('user') ? $this->Html->link($caseRecent->user->name, ['controller' => 'Users', 'action' => 'view', $caseRecent->user->id]) : '' ?></td>
                <td><?= $caseRecent->has('project') ? $this->Html->link($caseRecent->project->name, ['controller' => 'Projects', 'action' => 'view', $caseRecent->project->id]) : '' ?></td>
                <td><?= h($caseRecent->dt_created) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $caseRecent->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $caseRecent->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $caseRecent->id], ['confirm' => __('Are you sure you want to delete # {0}?', $caseRecent->id)]) ?>
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
