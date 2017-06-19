<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Resume $resume
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Resume'), ['action' => 'edit', $resume->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Resume'), ['action' => 'delete', $resume->id], ['confirm' => __('Are you sure you want to delete # {0}?', $resume->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Resumes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Resume'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Careers'), ['controller' => 'Careers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Career'), ['controller' => 'Careers', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Degrees'), ['controller' => 'Degrees', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Degree'), ['controller' => 'Degrees', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Levels'), ['controller' => 'Levels', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Level'), ['controller' => 'Levels', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Salaries'), ['controller' => 'Salaries', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Salary'), ['controller' => 'Salaries', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Schools'), ['controller' => 'Schools', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New School'), ['controller' => 'Schools', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="resumes view large-9 medium-8 columns content">
    <h3><?= h($resume->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $resume->has('user') ? $this->Html->link($resume->user->name, ['controller' => 'Users', 'action' => 'view', $resume->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Career') ?></th>
            <td><?= $resume->has('career') ? $this->Html->link($resume->career->id, ['controller' => 'Careers', 'action' => 'view', $resume->career->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Degree') ?></th>
            <td><?= $resume->has('degree') ? $this->Html->link($resume->degree->name, ['controller' => 'Degrees', 'action' => 'view', $resume->degree->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Level') ?></th>
            <td><?= $resume->has('level') ? $this->Html->link($resume->level->id, ['controller' => 'Levels', 'action' => 'view', $resume->level->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Salary') ?></th>
            <td><?= $resume->has('salary') ? $this->Html->link($resume->salary->name, ['controller' => 'Salaries', 'action' => 'view', $resume->salary->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('School') ?></th>
            <td><?= $resume->has('school') ? $this->Html->link($resume->school->, ['controller' => 'Schools', 'action' => 'view', $resume->school->]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Address') ?></th>
            <td><?= h($resume->address) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Uploadcv') ?></th>
            <td><?= h($resume->uploadcv) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Lastcompany') ?></th>
            <td><?= h($resume->lastcompany) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($resume->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Experience') ?></th>
            <td><?= $this->Number->format($resume->experience) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($resume->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($resume->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Summary') ?></h4>
        <?= $this->Text->autoParagraph(h($resume->summary)); ?>
    </div>
</div>
