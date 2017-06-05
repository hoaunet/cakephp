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
                ['action' => 'delete', $caseActivity->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $caseActivity->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Case Activities'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Easycases'), ['controller' => 'Easycases', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Easycase'), ['controller' => 'Easycases', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projects'), ['controller' => 'Projects', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Project'), ['controller' => 'Projects', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="caseActivities form large-9 medium-8 columns content">
    <?= $this->Form->create($caseActivity) ?>
    <fieldset>
        <legend><?= __('Edit Case Activity') ?></legend>
        <?php
            echo $this->Form->control('easycase_id', ['options' => $easycases]);
            echo $this->Form->control('comment_id');
            echo $this->Form->control('case_no');
            echo $this->Form->control('project_id', ['options' => $projects]);
            echo $this->Form->control('user_id', ['options' => $users]);
            echo $this->Form->control('type');
            echo $this->Form->control('isactive');
            echo $this->Form->control('dt_created');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
