<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Jobseeker[]|\Cake\Collection\CollectionInterface $jobseekers
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Jobseeker'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Careers'), ['controller' => 'Careers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Career'), ['controller' => 'Careers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Degrees'), ['controller' => 'Degrees', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Degree'), ['controller' => 'Degrees', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="jobseekers index large-9 medium-8 columns content">
    <h3><?= __('Jobseekers') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('career_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('degree_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('address') ?></th>
                <th scope="col"><?= $this->Paginator->sort('numphone') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($jobseekers as $jobseeker): ?>
            <tr>
                <td><?= $this->Number->format($jobseeker->id) ?></td>
                <td><?= $jobseeker->has('user') ? $this->Html->link($jobseeker->user->name, ['controller' => 'Users', 'action' => 'view', $jobseeker->user->id]) : '' ?></td>
                <td><?= $jobseeker->has('career') ? $this->Html->link($jobseeker->career->id, ['controller' => 'Careers', 'action' => 'view', $jobseeker->career->id]) : '' ?></td>
                <td><?= $jobseeker->has('degree') ? $this->Html->link($jobseeker->degree->name, ['controller' => 'Degrees', 'action' => 'view', $jobseeker->degree->id]) : '' ?></td>
                <td><?= h($jobseeker->address) ?></td>
                <td><?= h($jobseeker->numphone) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $jobseeker->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $jobseeker->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $jobseeker->id], ['confirm' => __('Are you sure you want to delete # {0}?', $jobseeker->id)]) ?>
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
