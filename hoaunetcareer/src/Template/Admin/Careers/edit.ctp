<?php $this->layout = "admin_template";?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $career->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $career->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Careers'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Parent Careers'), ['controller' => 'Careers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Parent Career'), ['controller' => 'Careers', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="careers form large-9 medium-8 columns content">
    <?= $this->Form->create($career) ?>
    <fieldset>
        <legend><?= __('Edit Career') ?></legend>
        <?php
            echo $this->Form->control('career_name');
            echo $this->Form->control('parent_id', ['options' => $parentCareers]);
            echo $this->Form->control('status');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
