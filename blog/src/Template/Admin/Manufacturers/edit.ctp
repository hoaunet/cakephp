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
                ['action' => 'delete', $manufacturer->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $manufacturer->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Manufacturers'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="manufacturers form large-9 medium-8 columns content">
    <?= $this->Form->create($manufacturer) ?>
    <fieldset>
        <legend><?= __('Edit Manufacturer') ?></legend>
        <?php
            echo $this->Form->control('manufacturers_name');
            echo $this->Form->control('manufacturers_image');
            echo $this->Form->control('date_added', ['empty' => true]);
            echo $this->Form->control('last_modified', ['empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
