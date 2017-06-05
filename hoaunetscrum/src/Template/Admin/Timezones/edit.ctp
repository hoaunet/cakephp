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
                ['action' => 'delete', $timezone->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $timezone->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Timezones'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Daily Updates'), ['controller' => 'DailyUpdates', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Daily Update'), ['controller' => 'DailyUpdates', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="timezones form large-9 medium-8 columns content">
    <?= $this->Form->create($timezone) ?>
    <fieldset>
        <legend><?= __('Edit Timezone') ?></legend>
        <?php
            echo $this->Form->control('gmt_offset');
            echo $this->Form->control('dst_offset');
            echo $this->Form->control('code');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
