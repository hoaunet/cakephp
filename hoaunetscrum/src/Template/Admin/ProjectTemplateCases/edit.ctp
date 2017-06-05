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
                ['action' => 'delete', $projectTemplateCase->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $projectTemplateCase->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Project Template Cases'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Companies'), ['controller' => 'Companies', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Company'), ['controller' => 'Companies', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="projectTemplateCases form large-9 medium-8 columns content">
    <?= $this->Form->create($projectTemplateCase) ?>
    <fieldset>
        <legend><?= __('Edit Project Template Case') ?></legend>
        <?php
            echo $this->Form->control('user_id', ['options' => $users]);
            echo $this->Form->control('company_id', ['options' => $companies]);
            echo $this->Form->control('template_id');
            echo $this->Form->control('title');
            echo $this->Form->control('description');
            echo $this->Form->control('sort');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
