<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Case File'), ['action' => 'edit', $caseFile->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Case File'), ['action' => 'delete', $caseFile->id], ['confirm' => __('Are you sure you want to delete # {0}?', $caseFile->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Case Files'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Case File'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Projects'), ['controller' => 'Projects', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Project'), ['controller' => 'Projects', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Companies'), ['controller' => 'Companies', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Company'), ['controller' => 'Companies', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Easycases'), ['controller' => 'Easycases', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Easycase'), ['controller' => 'Easycases', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Archives'), ['controller' => 'Archives', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Archive'), ['controller' => 'Archives', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="caseFiles view large-9 medium-8 columns content">
    <h3><?= h($caseFile->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $caseFile->has('user') ? $this->Html->link($caseFile->user->name, ['controller' => 'Users', 'action' => 'view', $caseFile->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Project') ?></th>
            <td><?= $caseFile->has('project') ? $this->Html->link($caseFile->project->name, ['controller' => 'Projects', 'action' => 'view', $caseFile->project->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Company') ?></th>
            <td><?= $caseFile->has('company') ? $this->Html->link($caseFile->company->name, ['controller' => 'Companies', 'action' => 'view', $caseFile->company->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Easycase') ?></th>
            <td><?= $caseFile->has('easycase') ? $this->Html->link($caseFile->easycase->title, ['controller' => 'Easycases', 'action' => 'view', $caseFile->easycase->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('File') ?></th>
            <td><?= h($caseFile->file) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Thumb') ?></th>
            <td><?= h($caseFile->thumb) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($caseFile->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Comment Id') ?></th>
            <td><?= $this->Number->format($caseFile->comment_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('File Size') ?></th>
            <td><?= $this->Number->format($caseFile->file_size) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Count') ?></th>
            <td><?= $this->Number->format($caseFile->count) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Isactive') ?></th>
            <td><?= $this->Number->format($caseFile->isactive) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Downloadurl') ?></h4>
        <?= $this->Text->autoParagraph(h($caseFile->downloadurl)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Archives') ?></h4>
        <?php if (!empty($caseFile->archives)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Easycase Id') ?></th>
                <th scope="col"><?= __('Case File Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Type') ?></th>
                <th scope="col"><?= __('Company Id') ?></th>
                <th scope="col"><?= __('Dt Created') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($caseFile->archives as $archives): ?>
            <tr>
                <td><?= h($archives->id) ?></td>
                <td><?= h($archives->easycase_id) ?></td>
                <td><?= h($archives->case_file_id) ?></td>
                <td><?= h($archives->user_id) ?></td>
                <td><?= h($archives->type) ?></td>
                <td><?= h($archives->company_id) ?></td>
                <td><?= h($archives->dt_created) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Archives', 'action' => 'view', $archives->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Archives', 'action' => 'edit', $archives->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Archives', 'action' => 'delete', $archives->id], ['confirm' => __('Are you sure you want to delete # {0}?', $archives->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
