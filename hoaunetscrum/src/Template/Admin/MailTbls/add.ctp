<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Mail Tbls'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="mailTbls form large-9 medium-8 columns content">
    <?= $this->Form->create($mailTbl) ?>
    <fieldset>
        <legend><?= __('Add Mail Tbl') ?></legend>
        <?php
            echo $this->Form->control('mail');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
