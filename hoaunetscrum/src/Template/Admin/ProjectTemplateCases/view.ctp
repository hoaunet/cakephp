<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Project Template Case'), ['action' => 'edit', $projectTemplateCase->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Project Template Case'), ['action' => 'delete', $projectTemplateCase->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projectTemplateCase->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Project Template Cases'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Project Template Case'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Companies'), ['controller' => 'Companies', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Company'), ['controller' => 'Companies', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="projectTemplateCases view large-9 medium-8 columns content">
    <h3><?= h($projectTemplateCase->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $projectTemplateCase->has('user') ? $this->Html->link($projectTemplateCase->user->name, ['controller' => 'Users', 'action' => 'view', $projectTemplateCase->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Company') ?></th>
            <td><?= $projectTemplateCase->has('company') ? $this->Html->link($projectTemplateCase->company->name, ['controller' => 'Companies', 'action' => 'view', $projectTemplateCase->company->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($projectTemplateCase->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Template Id') ?></th>
            <td><?= $this->Number->format($projectTemplateCase->template_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sort') ?></th>
            <td><?= $this->Number->format($projectTemplateCase->sort) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($projectTemplateCase->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($projectTemplateCase->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Title') ?></h4>
        <?= $this->Text->autoParagraph(h($projectTemplateCase->title)); ?>
    </div>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($projectTemplateCase->description)); ?>
    </div>
</div>
