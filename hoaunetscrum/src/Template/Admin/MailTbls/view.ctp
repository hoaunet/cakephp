<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Mail Tbl'), ['action' => 'edit', $mailTbl->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Mail Tbl'), ['action' => 'delete', $mailTbl->id], ['confirm' => __('Are you sure you want to delete # {0}?', $mailTbl->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Mail Tbls'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Mail Tbl'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="mailTbls view large-9 medium-8 columns content">
    <h3><?= h($mailTbl->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Mail') ?></th>
            <td><?= h($mailTbl->mail) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($mailTbl->id) ?></td>
        </tr>
    </table>
</div>
