<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Archive'), ['action' => 'edit', $archive->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Archive'), ['action' => 'delete', $archive->id], ['confirm' => __('Are you sure you want to delete # {0}?', $archive->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Archives'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Archive'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Easycases'), ['controller' => 'Easycases', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Easycase'), ['controller' => 'Easycases', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Case Files'), ['controller' => 'CaseFiles', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Case File'), ['controller' => 'CaseFiles', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Companies'), ['controller' => 'Companies', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Company'), ['controller' => 'Companies', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="archives view large-9 medium-8 columns content">
    <h3><?= h($archive->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Easycase') ?></th>
            <td><?= $archive->has('easycase') ? $this->Html->link($archive->easycase->title, ['controller' => 'Easycases', 'action' => 'view', $archive->easycase->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Case File') ?></th>
            <td><?= $archive->has('case_file') ? $this->Html->link($archive->case_file->id, ['controller' => 'CaseFiles', 'action' => 'view', $archive->case_file->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $archive->has('user') ? $this->Html->link($archive->user->name, ['controller' => 'Users', 'action' => 'view', $archive->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Company') ?></th>
            <td><?= $archive->has('company') ? $this->Html->link($archive->company->name, ['controller' => 'Companies', 'action' => 'view', $archive->company->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($archive->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Type') ?></th>
            <td><?= $this->Number->format($archive->type) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dt Created') ?></th>
            <td><?= h($archive->dt_created) ?></td>
        </tr>
    </table>
</div>
