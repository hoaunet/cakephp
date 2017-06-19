<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Newsletter $newsletter
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Newsletter'), ['action' => 'edit', $newsletter->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Newsletter'), ['action' => 'delete', $newsletter->id], ['confirm' => __('Are you sure you want to delete # {0}?', $newsletter->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Newsletters'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Newsletter'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Careers'), ['controller' => 'Careers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Career'), ['controller' => 'Careers', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Levels'), ['controller' => 'Levels', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Level'), ['controller' => 'Levels', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="newsletters view large-9 medium-8 columns content">
    <h3><?= h($newsletter->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Career') ?></th>
            <td><?= $newsletter->has('career') ? $this->Html->link($newsletter->career->id, ['controller' => 'Careers', 'action' => 'view', $newsletter->career->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Level') ?></th>
            <td><?= $newsletter->has('level') ? $this->Html->link($newsletter->level->id, ['controller' => 'Levels', 'action' => 'view', $newsletter->level->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $newsletter->has('user') ? $this->Html->link($newsletter->user->name, ['controller' => 'Users', 'action' => 'view', $newsletter->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($newsletter->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($newsletter->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($newsletter->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($newsletter->modified) ?></td>
        </tr>
    </table>
</div>
