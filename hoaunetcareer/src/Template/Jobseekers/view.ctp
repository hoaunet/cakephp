<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Jobseeker $jobseeker
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Jobseeker'), ['action' => 'edit', $jobseeker->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Jobseeker'), ['action' => 'delete', $jobseeker->id], ['confirm' => __('Are you sure you want to delete # {0}?', $jobseeker->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Jobseekers'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Jobseeker'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Careers'), ['controller' => 'Careers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Career'), ['controller' => 'Careers', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Degrees'), ['controller' => 'Degrees', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Degree'), ['controller' => 'Degrees', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="jobseekers view large-9 medium-8 columns content">
    <h3><?= h($jobseeker->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $jobseeker->has('user') ? $this->Html->link($jobseeker->user->name, ['controller' => 'Users', 'action' => 'view', $jobseeker->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Career') ?></th>
            <td><?= $jobseeker->has('career') ? $this->Html->link($jobseeker->career->id, ['controller' => 'Careers', 'action' => 'view', $jobseeker->career->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Degree') ?></th>
            <td><?= $jobseeker->has('degree') ? $this->Html->link($jobseeker->degree->name, ['controller' => 'Degrees', 'action' => 'view', $jobseeker->degree->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Address') ?></th>
            <td><?= h($jobseeker->address) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Numphone') ?></th>
            <td><?= h($jobseeker->numphone) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($jobseeker->id) ?></td>
        </tr>
    </table>
</div>
