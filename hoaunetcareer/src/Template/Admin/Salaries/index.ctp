<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Salary[]|\Cake\Collection\CollectionInterface $salaries
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Salary'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="salaries index large-9 medium-8 columns content">
    <h3><?= __('Salaries') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('is_active') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($salaries as $salary): ?>
            <tr>
                <td><?= $this->Number->format($salary->id) ?></td>
                <td><?= h($salary->name) ?></td>
                <td><?= h($salary->created) ?></td>
                <td><?= h($salary->modified) ?></td>
                <td><?= $this->Number->format($salary->is_active) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $salary->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $salary->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $salary->id], ['confirm' => __('Are you sure you want to delete # {0}?', $salary->id)]) ?>
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
