<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Default Project Template'), ['action' => 'edit', $defaultProjectTemplate->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Default Project Template'), ['action' => 'delete', $defaultProjectTemplate->id], ['confirm' => __('Are you sure you want to delete # {0}?', $defaultProjectTemplate->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Default Project Templates'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Default Project Template'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Companies'), ['controller' => 'Companies', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Company'), ['controller' => 'Companies', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="defaultProjectTemplates view large-9 medium-8 columns content">
    <h3><?= h($defaultProjectTemplate->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $defaultProjectTemplate->has('user') ? $this->Html->link($defaultProjectTemplate->user->name, ['controller' => 'Users', 'action' => 'view', $defaultProjectTemplate->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Company') ?></th>
            <td><?= $defaultProjectTemplate->has('company') ? $this->Html->link($defaultProjectTemplate->company->name, ['controller' => 'Companies', 'action' => 'view', $defaultProjectTemplate->company->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Module Name') ?></th>
            <td><?= h($defaultProjectTemplate->module_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($defaultProjectTemplate->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($defaultProjectTemplate->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($defaultProjectTemplate->modified) ?></td>
        </tr>
    </table>
</div>
