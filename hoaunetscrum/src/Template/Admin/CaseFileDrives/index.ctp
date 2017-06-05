<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Case File Drive'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projects'), ['controller' => 'Projects', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Project'), ['controller' => 'Projects', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Easycases'), ['controller' => 'Easycases', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Easycase'), ['controller' => 'Easycases', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="caseFileDrives index large-9 medium-8 columns content">
    <h3><?= __('Case File Drives') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('project_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('easycase_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($caseFileDrives as $caseFileDrive): ?>
            <tr>
                <td><?= $this->Number->format($caseFileDrive->id) ?></td>
                <td><?= $caseFileDrive->has('project') ? $this->Html->link($caseFileDrive->project->name, ['controller' => 'Projects', 'action' => 'view', $caseFileDrive->project->id]) : '' ?></td>
                <td><?= $caseFileDrive->has('easycase') ? $this->Html->link($caseFileDrive->easycase->title, ['controller' => 'Easycases', 'action' => 'view', $caseFileDrive->easycase->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $caseFileDrive->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $caseFileDrive->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $caseFileDrive->id], ['confirm' => __('Are you sure you want to delete # {0}?', $caseFileDrive->id)]) ?>
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
