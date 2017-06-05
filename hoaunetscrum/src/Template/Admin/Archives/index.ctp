<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Archive'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Easycases'), ['controller' => 'Easycases', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Easycase'), ['controller' => 'Easycases', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Case Files'), ['controller' => 'CaseFiles', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Case File'), ['controller' => 'CaseFiles', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Companies'), ['controller' => 'Companies', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Company'), ['controller' => 'Companies', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="archives index large-9 medium-8 columns content">
    <h3><?= __('Archives') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('easycase_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('case_file_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('type') ?></th>
                <th scope="col"><?= $this->Paginator->sort('company_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dt_created') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($archives as $archive): ?>
            <tr>
                <td><?= $this->Number->format($archive->id) ?></td>
                <td><?= $archive->has('easycase') ? $this->Html->link($archive->easycase->title, ['controller' => 'Easycases', 'action' => 'view', $archive->easycase->id]) : '' ?></td>
                <td><?= $archive->has('case_file') ? $this->Html->link($archive->case_file->id, ['controller' => 'CaseFiles', 'action' => 'view', $archive->case_file->id]) : '' ?></td>
                <td><?= $archive->has('user') ? $this->Html->link($archive->user->name, ['controller' => 'Users', 'action' => 'view', $archive->user->id]) : '' ?></td>
                <td><?= $this->Number->format($archive->type) ?></td>
                <td><?= $archive->has('company') ? $this->Html->link($archive->company->name, ['controller' => 'Companies', 'action' => 'view', $archive->company->id]) : '' ?></td>
                <td><?= h($archive->dt_created) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $archive->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $archive->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $archive->id], ['confirm' => __('Are you sure you want to delete # {0}?', $archive->id)]) ?>
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
