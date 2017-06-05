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
                ['action' => 'delete', $caseFile->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $caseFile->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Case Files'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projects'), ['controller' => 'Projects', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Project'), ['controller' => 'Projects', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Companies'), ['controller' => 'Companies', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Company'), ['controller' => 'Companies', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Easycases'), ['controller' => 'Easycases', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Easycase'), ['controller' => 'Easycases', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Archives'), ['controller' => 'Archives', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Archive'), ['controller' => 'Archives', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="caseFiles form large-9 medium-8 columns content">
    <?= $this->Form->create($caseFile) ?>
    <fieldset>
        <legend><?= __('Edit Case File') ?></legend>
        <?php
            echo $this->Form->control('user_id', ['options' => $users]);
            echo $this->Form->control('project_id', ['options' => $projects]);
            echo $this->Form->control('company_id', ['options' => $companies]);
            echo $this->Form->control('easycase_id', ['options' => $easycases]);
            echo $this->Form->control('comment_id');
            echo $this->Form->control('file');
            echo $this->Form->control('thumb');
            echo $this->Form->control('file_size');
            echo $this->Form->control('count');
            echo $this->Form->control('downloadurl');
            echo $this->Form->control('isactive');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
