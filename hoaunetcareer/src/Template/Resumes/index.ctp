<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Resume[]|\Cake\Collection\CollectionInterface $resumes
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Resume'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Careers'), ['controller' => 'Careers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Career'), ['controller' => 'Careers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Degrees'), ['controller' => 'Degrees', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Degree'), ['controller' => 'Degrees', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Levels'), ['controller' => 'Levels', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Level'), ['controller' => 'Levels', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Salaries'), ['controller' => 'Salaries', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Salary'), ['controller' => 'Salaries', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Schools'), ['controller' => 'Schools', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New School'), ['controller' => 'Schools', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="resumes index large-9 medium-8 columns content">
    <h3><?= __('Resumes') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('career_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('degree_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('level_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('salary_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('school_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('experience') ?></th>
                <th scope="col"><?= $this->Paginator->sort('address') ?></th>
                <th scope="col"><?= $this->Paginator->sort('uploadcv') ?></th>
                <th scope="col"><?= $this->Paginator->sort('lastcompany') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($resumes as $resume): ?>
            <tr>
                <td><?= $this->Number->format($resume->id) ?></td>
                <td><?= $resume->has('user') ? $this->Html->link($resume->user->name, ['controller' => 'Users', 'action' => 'view', $resume->user->id]) : '' ?></td>
                <td><?= $resume->has('career') ? $this->Html->link($resume->career->id, ['controller' => 'Careers', 'action' => 'view', $resume->career->id]) : '' ?></td>
                <td><?= $resume->has('degree') ? $this->Html->link($resume->degree->name, ['controller' => 'Degrees', 'action' => 'view', $resume->degree->id]) : '' ?></td>
                <td><?= $resume->has('level') ? $this->Html->link($resume->level->id, ['controller' => 'Levels', 'action' => 'view', $resume->level->id]) : '' ?></td>
                <td><?= $resume->has('salary') ? $this->Html->link($resume->salary->name, ['controller' => 'Salaries', 'action' => 'view', $resume->salary->id]) : '' ?></td>
                <td><?= $resume->has('school') ? $this->Html->link($resume->school->, ['controller' => 'Schools', 'action' => 'view', $resume->school->]) : '' ?></td>
                <td><?= $this->Number->format($resume->experience) ?></td>
                <td><?= h($resume->address) ?></td>
                <td><?= h($resume->uploadcv) ?></td>
                <td><?= h($resume->lastcompany) ?></td>
                <td><?= h($resume->created) ?></td>
                <td><?= h($resume->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $resume->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $resume->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $resume->id], ['confirm' => __('Are you sure you want to delete # {0}?', $resume->id)]) ?>
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
