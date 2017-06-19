<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Companyuser $companyuser
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Companyuser'), ['action' => 'edit', $companyuser->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Companyuser'), ['action' => 'delete', $companyuser->id], ['confirm' => __('Are you sure you want to delete # {0}?', $companyuser->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Companyusers'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Companyuser'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Companies'), ['controller' => 'Companies', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Company'), ['controller' => 'Companies', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="companyusers view large-9 medium-8 columns content">
    <h3><?= h($companyuser->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Company') ?></th>
            <td><?= $companyuser->has('company') ? $this->Html->link($companyuser->company->name, ['controller' => 'Companies', 'action' => 'view', $companyuser->company->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Company Uniq Id') ?></th>
            <td><?= h($companyuser->company_uniq_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $companyuser->has('user') ? $this->Html->link($companyuser->user->name, ['controller' => 'Users', 'action' => 'view', $companyuser->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($companyuser->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User Type') ?></th>
            <td><?= $this->Number->format($companyuser->user_type) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Is Active') ?></th>
            <td><?= $this->Number->format($companyuser->is_active) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Est Billing Amt') ?></th>
            <td><?= $this->Number->format($companyuser->est_billing_amt) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Act Date') ?></th>
            <td><?= h($companyuser->act_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Billing Start Date') ?></th>
            <td><?= h($companyuser->billing_start_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Billing End Date') ?></th>
            <td><?= h($companyuser->billing_end_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($companyuser->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($companyuser->modified) ?></td>
        </tr>
    </table>
</div>
