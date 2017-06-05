<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Default Project Template Case'), ['action' => 'edit', $defaultProjectTemplateCase->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Default Project Template Case'), ['action' => 'delete', $defaultProjectTemplateCase->id], ['confirm' => __('Are you sure you want to delete # {0}?', $defaultProjectTemplateCase->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Default Project Template Cases'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Default Project Template Case'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Companies'), ['controller' => 'Companies', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Company'), ['controller' => 'Companies', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="defaultProjectTemplateCases view large-9 medium-8 columns content">
    <h3><?= h($defaultProjectTemplateCase->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $defaultProjectTemplateCase->has('user') ? $this->Html->link($defaultProjectTemplateCase->user->name, ['controller' => 'Users', 'action' => 'view', $defaultProjectTemplateCase->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Company') ?></th>
            <td><?= $defaultProjectTemplateCase->has('company') ? $this->Html->link($defaultProjectTemplateCase->company->name, ['controller' => 'Companies', 'action' => 'view', $defaultProjectTemplateCase->company->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($defaultProjectTemplateCase->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Template Id') ?></th>
            <td><?= $this->Number->format($defaultProjectTemplateCase->template_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($defaultProjectTemplateCase->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($defaultProjectTemplateCase->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Title') ?></h4>
        <?= $this->Text->autoParagraph(h($defaultProjectTemplateCase->title)); ?>
    </div>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($defaultProjectTemplateCase->description)); ?>
    </div>
</div>
