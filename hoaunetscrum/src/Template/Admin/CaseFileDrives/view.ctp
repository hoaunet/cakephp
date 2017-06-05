<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Case File Drive'), ['action' => 'edit', $caseFileDrive->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Case File Drive'), ['action' => 'delete', $caseFileDrive->id], ['confirm' => __('Are you sure you want to delete # {0}?', $caseFileDrive->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Case File Drives'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Case File Drive'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Projects'), ['controller' => 'Projects', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Project'), ['controller' => 'Projects', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Easycases'), ['controller' => 'Easycases', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Easycase'), ['controller' => 'Easycases', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="caseFileDrives view large-9 medium-8 columns content">
    <h3><?= h($caseFileDrive->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Project') ?></th>
            <td><?= $caseFileDrive->has('project') ? $this->Html->link($caseFileDrive->project->name, ['controller' => 'Projects', 'action' => 'view', $caseFileDrive->project->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Easycase') ?></th>
            <td><?= $caseFileDrive->has('easycase') ? $this->Html->link($caseFileDrive->easycase->title, ['controller' => 'Easycases', 'action' => 'view', $caseFileDrive->easycase->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($caseFileDrive->id) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('File Info') ?></h4>
        <?= $this->Text->autoParagraph(h($caseFileDrive->file_info)); ?>
    </div>
</div>
