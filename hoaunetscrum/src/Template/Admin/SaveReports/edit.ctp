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
                ['action' => 'delete', $saveReport->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $saveReport->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Save Reports'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="saveReports form large-9 medium-8 columns content">
    <?= $this->Form->create($saveReport) ?>
    <fieldset>
        <legend><?= __('Edit Save Report') ?></legend>
        <?php
            echo $this->Form->control('user_id', ['options' => $users]);
            echo $this->Form->control('rpt_type');
            echo $this->Form->control('frm_dt');
            echo $this->Form->control('to_dt');
            echo $this->Form->control('ip');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
