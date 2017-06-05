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
                ['action' => 'delete', $milestone->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $milestone->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Milestones'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Projects'), ['controller' => 'Projects', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Project'), ['controller' => 'Projects', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Companies'), ['controller' => 'Companies', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Company'), ['controller' => 'Companies', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Easycase Milestones'), ['controller' => 'EasycaseMilestones', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Easycase Milestone'), ['controller' => 'EasycaseMilestones', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="milestones form large-9 medium-8 columns content">
    <?= $this->Form->create($milestone) ?>
    <fieldset>
        <legend><?= __('Edit Milestone') ?></legend>
        <?php
            echo $this->Form->control('uniq_id');
            echo $this->Form->control('project_id', ['options' => $projects]);
            echo $this->Form->control('company_id', ['options' => $companies]);
            echo $this->Form->control('title');
            echo $this->Form->control('description');
            echo $this->Form->control('user_id', ['options' => $users]);
            echo $this->Form->control('start_date');
            echo $this->Form->control('end_date');
            echo $this->Form->control('isactive');
            echo $this->Form->control('id_seq');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
