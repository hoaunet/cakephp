<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $logType->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $logType->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Log Types'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Log Activities'), ['controller' => 'LogActivities', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Log Activity'), ['controller' => 'LogActivities', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="logTypes form large-9 medium-8 columns content">
    <?= $this->Form->create($logType) ?>
    <fieldset>
        <legend><?= __('Edit Log Type') ?></legend>
        <?php
            echo $this->Form->control('name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
