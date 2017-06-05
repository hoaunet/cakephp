<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Type'), ['action' => 'edit', $type->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Type'), ['action' => 'delete', $type->id], ['confirm' => __('Are you sure you want to delete # {0}?', $type->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Types'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Type'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Companies'), ['controller' => 'Companies', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Company'), ['controller' => 'Companies', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Case Settings'), ['controller' => 'CaseSettings', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Case Setting'), ['controller' => 'CaseSettings', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Easycases'), ['controller' => 'Easycases', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Easycase'), ['controller' => 'Easycases', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Type Companies'), ['controller' => 'TypeCompanies', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Type Company'), ['controller' => 'TypeCompanies', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="types view large-9 medium-8 columns content">
    <h3><?= h($type->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Company') ?></th>
            <td><?= $type->has('company') ? $this->Html->link($type->company->name, ['controller' => 'Companies', 'action' => 'view', $type->company->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Short Name') ?></th>
            <td><?= h($type->short_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($type->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($type->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Seq Order') ?></th>
            <td><?= $this->Number->format($type->seq_order) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Case Settings') ?></h4>
        <?php if (!empty($type->case_settings)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Project Id') ?></th>
                <th scope="col"><?= __('Project Uniqid') ?></th>
                <th scope="col"><?= __('Type Id') ?></th>
                <th scope="col"><?= __('Assign To') ?></th>
                <th scope="col"><?= __('Priority') ?></th>
                <th scope="col"><?= __('Due Date') ?></th>
                <th scope="col"><?= __('Email') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($type->case_settings as $caseSettings): ?>
            <tr>
                <td><?= h($caseSettings->id) ?></td>
                <td><?= h($caseSettings->project_id) ?></td>
                <td><?= h($caseSettings->project_uniqid) ?></td>
                <td><?= h($caseSettings->type_id) ?></td>
                <td><?= h($caseSettings->assign_to) ?></td>
                <td><?= h($caseSettings->priority) ?></td>
                <td><?= h($caseSettings->due_date) ?></td>
                <td><?= h($caseSettings->email) ?></td>
                <td><?= h($caseSettings->user_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'CaseSettings', 'action' => 'view', $caseSettings->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'CaseSettings', 'action' => 'edit', $caseSettings->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'CaseSettings', 'action' => 'delete', $caseSettings->id], ['confirm' => __('Are you sure you want to delete # {0}?', $caseSettings->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Easycases') ?></h4>
        <?php if (!empty($type->easycases)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Uniq Id') ?></th>
                <th scope="col"><?= __('Case No') ?></th>
                <th scope="col"><?= __('Case Count') ?></th>
                <th scope="col"><?= __('Project Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Updated By') ?></th>
                <th scope="col"><?= __('Type Id') ?></th>
                <th scope="col"><?= __('Priority') ?></th>
                <th scope="col"><?= __('Title') ?></th>
                <th scope="col"><?= __('Message') ?></th>
                <th scope="col"><?= __('Estimated Hours') ?></th>
                <th scope="col"><?= __('Hours') ?></th>
                <th scope="col"><?= __('Completed Task') ?></th>
                <th scope="col"><?= __('Assign To') ?></th>
                <th scope="col"><?= __('Due Date') ?></th>
                <th scope="col"><?= __('Istype') ?></th>
                <th scope="col"><?= __('Format') ?></th>
                <th scope="col"><?= __('Status') ?></th>
                <th scope="col"><?= __('Legend') ?></th>
                <th scope="col"><?= __('Isactive') ?></th>
                <th scope="col"><?= __('Dt Created') ?></th>
                <th scope="col"><?= __('Actual Dt Created') ?></th>
                <th scope="col"><?= __('Reply Type') ?></th>
                <th scope="col"><?= __('Is Chrome Extension') ?></th>
                <th scope="col"><?= __('From Email') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($type->easycases as $easycases): ?>
            <tr>
                <td><?= h($easycases->id) ?></td>
                <td><?= h($easycases->uniq_id) ?></td>
                <td><?= h($easycases->case_no) ?></td>
                <td><?= h($easycases->case_count) ?></td>
                <td><?= h($easycases->project_id) ?></td>
                <td><?= h($easycases->user_id) ?></td>
                <td><?= h($easycases->updated_by) ?></td>
                <td><?= h($easycases->type_id) ?></td>
                <td><?= h($easycases->priority) ?></td>
                <td><?= h($easycases->title) ?></td>
                <td><?= h($easycases->message) ?></td>
                <td><?= h($easycases->estimated_hours) ?></td>
                <td><?= h($easycases->hours) ?></td>
                <td><?= h($easycases->completed_task) ?></td>
                <td><?= h($easycases->assign_to) ?></td>
                <td><?= h($easycases->due_date) ?></td>
                <td><?= h($easycases->istype) ?></td>
                <td><?= h($easycases->format) ?></td>
                <td><?= h($easycases->status) ?></td>
                <td><?= h($easycases->legend) ?></td>
                <td><?= h($easycases->isactive) ?></td>
                <td><?= h($easycases->dt_created) ?></td>
                <td><?= h($easycases->actual_dt_created) ?></td>
                <td><?= h($easycases->reply_type) ?></td>
                <td><?= h($easycases->is_chrome_extension) ?></td>
                <td><?= h($easycases->from_email) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Easycases', 'action' => 'view', $easycases->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Easycases', 'action' => 'edit', $easycases->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Easycases', 'action' => 'delete', $easycases->id], ['confirm' => __('Are you sure you want to delete # {0}?', $easycases->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Type Companies') ?></h4>
        <?php if (!empty($type->type_companies)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Company Id') ?></th>
                <th scope="col"><?= __('Type Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($type->type_companies as $typeCompanies): ?>
            <tr>
                <td><?= h($typeCompanies->id) ?></td>
                <td><?= h($typeCompanies->company_id) ?></td>
                <td><?= h($typeCompanies->type_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'TypeCompanies', 'action' => 'view', $typeCompanies->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'TypeCompanies', 'action' => 'edit', $typeCompanies->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'TypeCompanies', 'action' => 'delete', $typeCompanies->id], ['confirm' => __('Are you sure you want to delete # {0}?', $typeCompanies->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
