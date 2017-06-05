<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Log Type'), ['action' => 'edit', $logType->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Log Type'), ['action' => 'delete', $logType->id], ['confirm' => __('Are you sure you want to delete # {0}?', $logType->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Log Types'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Log Type'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Log Activities'), ['controller' => 'LogActivities', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Log Activity'), ['controller' => 'LogActivities', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="logTypes view large-9 medium-8 columns content">
    <h3><?= h($logType->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($logType->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($logType->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($logType->created) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Log Activities') ?></h4>
        <?php if (!empty($logType->log_activities)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Company Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Log Type Id') ?></th>
                <th scope="col"><?= __('Json Value') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Ip') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($logType->log_activities as $logActivities): ?>
            <tr>
                <td><?= h($logActivities->id) ?></td>
                <td><?= h($logActivities->company_id) ?></td>
                <td><?= h($logActivities->user_id) ?></td>
                <td><?= h($logActivities->log_type_id) ?></td>
                <td><?= h($logActivities->json_value) ?></td>
                <td><?= h($logActivities->created) ?></td>
                <td><?= h($logActivities->ip) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'LogActivities', 'action' => 'view', $logActivities->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'LogActivities', 'action' => 'edit', $logActivities->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'LogActivities', 'action' => 'delete', $logActivities->id], ['confirm' => __('Are you sure you want to delete # {0}?', $logActivities->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
