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
                ['action' => 'delete', $caseAction->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $caseAction->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Case Actions'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Easycases'), ['controller' => 'Easycases', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Easycase'), ['controller' => 'Easycases', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="caseActions form large-9 medium-8 columns content">
    <?= $this->Form->create($caseAction) ?>
    <fieldset>
        <legend><?= __('Edit Case Action') ?></legend>
        <?php
            echo $this->Form->control('easycase_id', ['options' => $easycases]);
            echo $this->Form->control('user_id', ['options' => $users]);
            echo $this->Form->control('action');
            echo $this->Form->control('dt_created');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
