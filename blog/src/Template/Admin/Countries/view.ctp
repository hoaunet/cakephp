<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Country $country
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Country'), ['action' => 'edit', $country->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Country'), ['action' => 'delete', $country->id], ['confirm' => __('Are you sure you want to delete # {0}?', $country->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Countries'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Country'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="countries view large-9 medium-8 columns content">
    <h3><?= h($country->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Countries Name') ?></th>
            <td><?= h($country->countries_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Countries Iso Code 2') ?></th>
            <td><?= h($country->countries_iso_code_2) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Countries Iso Code 3') ?></th>
            <td><?= h($country->countries_iso_code_3) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($country->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Address Format Id') ?></th>
            <td><?= $this->Number->format($country->address_format_id) ?></td>
        </tr>
    </table>
</div>
