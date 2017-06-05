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
                ['action' => 'delete', $defaultTemplate->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $defaultTemplate->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Default Templates'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="defaultTemplates form large-9 medium-8 columns content">
    <?= $this->Form->create($defaultTemplate) ?>
    <fieldset>
        <legend><?= __('Edit Default Template') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('description');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
