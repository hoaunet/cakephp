<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Custom Filter'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Companies'), ['controller' => 'Companies', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Company'), ['controller' => 'Companies', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="customFilters index large-9 medium-8 columns content">
    <h3><?= __('Custom Filters') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('project_uniq_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('company_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('filter_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('filter_duedate') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dt_created') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($customFilters as $customFilter): ?>
            <tr>
                <td><?= $this->Number->format($customFilter->id) ?></td>
                <td><?= h($customFilter->project_uniq_id) ?></td>
                <td><?= $customFilter->has('company') ? $this->Html->link($customFilter->company->name, ['controller' => 'Companies', 'action' => 'view', $customFilter->company->id]) : '' ?></td>
                <td><?= $customFilter->has('user') ? $this->Html->link($customFilter->user->name, ['controller' => 'Users', 'action' => 'view', $customFilter->user->id]) : '' ?></td>
                <td><?= h($customFilter->filter_name) ?></td>
                <td><?= h($customFilter->filter_duedate) ?></td>
                <td><?= h($customFilter->dt_created) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $customFilter->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $customFilter->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $customFilter->id], ['confirm' => __('Are you sure you want to delete # {0}?', $customFilter->id)]) ?>
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
