<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Case File Drives'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Projects'), ['controller' => 'Projects', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Project'), ['controller' => 'Projects', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Easycases'), ['controller' => 'Easycases', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Easycase'), ['controller' => 'Easycases', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="caseFileDrives form large-9 medium-8 columns content">
    <?= $this->Form->create($caseFileDrive) ?>
    <fieldset>
        <legend><?= __('Add Case File Drive') ?></legend>
        <?php
            echo $this->Form->control('project_id', ['options' => $projects]);
            echo $this->Form->control('easycase_id', ['options' => $easycases]);
            echo $this->Form->control('file_info');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
