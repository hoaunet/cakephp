<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Milestone'), ['action' => 'edit', $milestone->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Milestone'), ['action' => 'delete', $milestone->id], ['confirm' => __('Are you sure you want to delete # {0}?', $milestone->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Milestones'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Milestone'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Projects'), ['controller' => 'Projects', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Project'), ['controller' => 'Projects', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Companies'), ['controller' => 'Companies', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Company'), ['controller' => 'Companies', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Easycase Milestones'), ['controller' => 'EasycaseMilestones', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Easycase Milestone'), ['controller' => 'EasycaseMilestones', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="milestones view large-9 medium-8 columns content">
    <h3><?= h($milestone->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Uniq Id') ?></th>
            <td><?= h($milestone->uniq_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Project') ?></th>
            <td><?= $milestone->has('project') ? $this->Html->link($milestone->project->name, ['controller' => 'Projects', 'action' => 'view', $milestone->project->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Company') ?></th>
            <td><?= $milestone->has('company') ? $this->Html->link($milestone->company->name, ['controller' => 'Companies', 'action' => 'view', $milestone->company->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Title') ?></th>
            <td><?= h($milestone->title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $milestone->has('user') ? $this->Html->link($milestone->user->name, ['controller' => 'Users', 'action' => 'view', $milestone->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($milestone->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Isactive') ?></th>
            <td><?= $this->Number->format($milestone->isactive) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Seq') ?></th>
            <td><?= $this->Number->format($milestone->id_seq) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Start Date') ?></th>
            <td><?= h($milestone->start_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('End Date') ?></th>
            <td><?= h($milestone->end_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($milestone->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($milestone->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($milestone->description)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Easycase Milestones') ?></h4>
        <?php if (!empty($milestone->easycase_milestones)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Easycase Id') ?></th>
                <th scope="col"><?= __('Milestone Id') ?></th>
                <th scope="col"><?= __('Project Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Id Seq') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($milestone->easycase_milestones as $easycaseMilestones): ?>
            <tr>
                <td><?= h($easycaseMilestones->id) ?></td>
                <td><?= h($easycaseMilestones->easycase_id) ?></td>
                <td><?= h($easycaseMilestones->milestone_id) ?></td>
                <td><?= h($easycaseMilestones->project_id) ?></td>
                <td><?= h($easycaseMilestones->user_id) ?></td>
                <td><?= h($easycaseMilestones->created) ?></td>
                <td><?= h($easycaseMilestones->id_seq) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'EasycaseMilestones', 'action' => 'view', $easycaseMilestones->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'EasycaseMilestones', 'action' => 'edit', $easycaseMilestones->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'EasycaseMilestones', 'action' => 'delete', $easycaseMilestones->id], ['confirm' => __('Are you sure you want to delete # {0}?', $easycaseMilestones->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
