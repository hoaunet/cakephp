<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Type Company'), ['action' => 'edit', $typeCompany->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Type Company'), ['action' => 'delete', $typeCompany->id], ['confirm' => __('Are you sure you want to delete # {0}?', $typeCompany->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Type Companies'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Type Company'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Companies'), ['controller' => 'Companies', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Company'), ['controller' => 'Companies', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Types'), ['controller' => 'Types', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Type'), ['controller' => 'Types', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="typeCompanies view large-9 medium-8 columns content">
    <h3><?= h($typeCompany->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Company') ?></th>
            <td><?= $typeCompany->has('company') ? $this->Html->link($typeCompany->company->name, ['controller' => 'Companies', 'action' => 'view', $typeCompany->company->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Type') ?></th>
            <td><?= $typeCompany->has('type') ? $this->Html->link($typeCompany->type->name, ['controller' => 'Types', 'action' => 'view', $typeCompany->type->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($typeCompany->id) ?></td>
        </tr>
    </table>
</div>
