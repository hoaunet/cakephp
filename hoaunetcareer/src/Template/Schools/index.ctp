<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\School[]|\Cake\Collection\CollectionInterface $schools
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New School'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Provinces'), ['controller' => 'Provinces', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Province'), ['controller' => 'Provinces', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Resumes'), ['controller' => 'Resumes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Resume'), ['controller' => 'Resumes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="schools index large-9 medium-8 columns content">
    <h3><?= __('Schools') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('school_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('school_address') ?></th>
                <th scope="col"><?= $this->Paginator->sort('school_type') ?></th>
                <th scope="col"><?= $this->Paginator->sort('school_website') ?></th>
                <th scope="col"><?= $this->Paginator->sort('province_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($schools as $school): ?>
            <tr>
                <td><?= $this->Number->format($school->id) ?></td>
                <td><?= h($school->school_name) ?></td>
                <td><?= h($school->school_address) ?></td>
                <td><?= h($school->school_type) ?></td>
                <td><?= h($school->school_website) ?></td>
                <td><?= $school->has('province') ? $this->Html->link($school->province->id, ['controller' => 'Provinces', 'action' => 'view', $school->province->id]) : '' ?></td>
                <td><?= h($school->created) ?></td>
                <td><?= h($school->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $school->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $school->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $school->id], ['confirm' => __('Are you sure you want to delete # {0}?', $school->id)]) ?>
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
