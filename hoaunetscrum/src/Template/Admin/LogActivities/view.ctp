<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Log Activity'), ['action' => 'edit', $logActivity->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Log Activity'), ['action' => 'delete', $logActivity->id], ['confirm' => __('Are you sure you want to delete # {0}?', $logActivity->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Log Activities'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Log Activity'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Companies'), ['controller' => 'Companies', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Company'), ['controller' => 'Companies', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Log Types'), ['controller' => 'LogTypes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Log Type'), ['controller' => 'LogTypes', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="logActivities view large-9 medium-8 columns content">
    <h3><?= h($logActivity->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Company') ?></th>
            <td><?= $logActivity->has('company') ? $this->Html->link($logActivity->company->name, ['controller' => 'Companies', 'action' => 'view', $logActivity->company->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $logActivity->has('user') ? $this->Html->link($logActivity->user->name, ['controller' => 'Users', 'action' => 'view', $logActivity->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Log Type') ?></th>
            <td><?= $logActivity->has('log_type') ? $this->Html->link($logActivity->log_type->name, ['controller' => 'LogTypes', 'action' => 'view', $logActivity->log_type->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ip') ?></th>
            <td><?= h($logActivity->ip) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($logActivity->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($logActivity->created) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Json Value') ?></h4>
        <?= $this->Text->autoParagraph(h($logActivity->json_value)); ?>
    </div>
</div>
