<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Case Activity'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Easycases'), ['controller' => 'Easycases', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Easycase'), ['controller' => 'Easycases', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projects'), ['controller' => 'Projects', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Project'), ['controller' => 'Projects', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="caseActivities index large-9 medium-8 columns content">
    <h3><?= __('Case Activities') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('easycase_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('comment_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('case_no') ?></th>
                <th scope="col"><?= $this->Paginator->sort('project_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('type') ?></th>
                <th scope="col"><?= $this->Paginator->sort('isactive') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dt_created') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($caseActivities as $caseActivity): ?>
            <tr>
                <td><?= $this->Number->format($caseActivity->id) ?></td>
                <td><?= $caseActivity->has('easycase') ? $this->Html->link($caseActivity->easycase->title, ['controller' => 'Easycases', 'action' => 'view', $caseActivity->easycase->id]) : '' ?></td>
                <td><?= $this->Number->format($caseActivity->comment_id) ?></td>
                <td><?= $this->Number->format($caseActivity->case_no) ?></td>
                <td><?= $caseActivity->has('project') ? $this->Html->link($caseActivity->project->name, ['controller' => 'Projects', 'action' => 'view', $caseActivity->project->id]) : '' ?></td>
                <td><?= $caseActivity->has('user') ? $this->Html->link($caseActivity->user->name, ['controller' => 'Users', 'action' => 'view', $caseActivity->user->id]) : '' ?></td>
                <td><?= $this->Number->format($caseActivity->type) ?></td>
                <td><?= $this->Number->format($caseActivity->isactive) ?></td>
                <td><?= h($caseActivity->dt_created) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $caseActivity->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $caseActivity->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $caseActivity->id], ['confirm' => __('Are you sure you want to delete # {0}?', $caseActivity->id)]) ?>
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
