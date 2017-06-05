<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Default Template'), ['action' => 'edit', $defaultTemplate->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Default Template'), ['action' => 'delete', $defaultTemplate->id], ['confirm' => __('Are you sure you want to delete # {0}?', $defaultTemplate->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Default Templates'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Default Template'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="defaultTemplates view large-9 medium-8 columns content">
    <h3><?= h($defaultTemplate->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($defaultTemplate->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($defaultTemplate->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($defaultTemplate->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($defaultTemplate->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($defaultTemplate->description)); ?>
    </div>
</div>
