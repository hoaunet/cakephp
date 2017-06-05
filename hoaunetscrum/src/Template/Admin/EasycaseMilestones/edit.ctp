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
                ['action' => 'delete', $easycaseMilestone->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $easycaseMilestone->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Easycase Milestones'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Easycases'), ['controller' => 'Easycases', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Easycase'), ['controller' => 'Easycases', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Milestones'), ['controller' => 'Milestones', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Milestone'), ['controller' => 'Milestones', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projects'), ['controller' => 'Projects', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Project'), ['controller' => 'Projects', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="easycaseMilestones form large-9 medium-8 columns content">
    <?= $this->Form->create($easycaseMilestone) ?>
    <fieldset>
        <legend><?= __('Edit Easycase Milestone') ?></legend>
        <?php
            echo $this->Form->control('easycase_id', ['options' => $easycases]);
            echo $this->Form->control('milestone_id', ['options' => $milestones]);
            echo $this->Form->control('project_id', ['options' => $projects]);
            echo $this->Form->control('user_id', ['options' => $users]);
            echo $this->Form->control('id_seq');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
