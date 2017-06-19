<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Schools'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Provinces'), ['controller' => 'Provinces', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Province'), ['controller' => 'Provinces', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Resumes'), ['controller' => 'Resumes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Resume'), ['controller' => 'Resumes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="schools form large-9 medium-8 columns content">
    <?= $this->Form->create($school) ?>
    <fieldset>
        <legend><?= __('Add School') ?></legend>
        <?php
            echo $this->Form->control('school_name');
            echo $this->Form->control('school_address');
            echo $this->Form->control('school_type');
            echo $this->Form->control('school_website');
            echo $this->Form->control('province_id', ['options' => $provinces, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
