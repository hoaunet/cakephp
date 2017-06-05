<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Case File'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projects'), ['controller' => 'Projects', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Project'), ['controller' => 'Projects', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Companies'), ['controller' => 'Companies', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Company'), ['controller' => 'Companies', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Easycases'), ['controller' => 'Easycases', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Easycase'), ['controller' => 'Easycases', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Archives'), ['controller' => 'Archives', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Archive'), ['controller' => 'Archives', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="caseFiles index large-9 medium-8 columns content">
    <h3><?= __('Case Files') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('project_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('company_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('easycase_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('comment_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('file') ?></th>
                <th scope="col"><?= $this->Paginator->sort('thumb') ?></th>
                <th scope="col"><?= $this->Paginator->sort('file_size') ?></th>
                <th scope="col"><?= $this->Paginator->sort('count') ?></th>
                <th scope="col"><?= $this->Paginator->sort('isactive') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($caseFiles as $caseFile): ?>
            <tr>
                <td><?= $this->Number->format($caseFile->id) ?></td>
                <td><?= $caseFile->has('user') ? $this->Html->link($caseFile->user->name, ['controller' => 'Users', 'action' => 'view', $caseFile->user->id]) : '' ?></td>
                <td><?= $caseFile->has('project') ? $this->Html->link($caseFile->project->name, ['controller' => 'Projects', 'action' => 'view', $caseFile->project->id]) : '' ?></td>
                <td><?= $caseFile->has('company') ? $this->Html->link($caseFile->company->name, ['controller' => 'Companies', 'action' => 'view', $caseFile->company->id]) : '' ?></td>
                <td><?= $caseFile->has('easycase') ? $this->Html->link($caseFile->easycase->title, ['controller' => 'Easycases', 'action' => 'view', $caseFile->easycase->id]) : '' ?></td>
                <td><?= $this->Number->format($caseFile->comment_id) ?></td>
                <td><?= h($caseFile->file) ?></td>
                <td><?= h($caseFile->thumb) ?></td>
                <td><?= $this->Number->format($caseFile->file_size) ?></td>
                <td><?= $this->Number->format($caseFile->count) ?></td>
                <td><?= $this->Number->format($caseFile->isactive) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $caseFile->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $caseFile->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $caseFile->id], ['confirm' => __('Are you sure you want to delete # {0}?', $caseFile->id)]) ?>
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
