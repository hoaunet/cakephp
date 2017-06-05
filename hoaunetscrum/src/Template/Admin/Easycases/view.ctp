<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Easycase'), ['action' => 'edit', $easycase->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Easycase'), ['action' => 'delete', $easycase->id], ['confirm' => __('Are you sure you want to delete # {0}?', $easycase->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Easycases'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Easycase'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Projects'), ['controller' => 'Projects', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Project'), ['controller' => 'Projects', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Types'), ['controller' => 'Types', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Type'), ['controller' => 'Types', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Archives'), ['controller' => 'Archives', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Archive'), ['controller' => 'Archives', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Case Actions'), ['controller' => 'CaseActions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Case Action'), ['controller' => 'CaseActions', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Case Activities'), ['controller' => 'CaseActivities', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Case Activity'), ['controller' => 'CaseActivities', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Case File Drives'), ['controller' => 'CaseFileDrives', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Case File Drive'), ['controller' => 'CaseFileDrives', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Case Files'), ['controller' => 'CaseFiles', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Case File'), ['controller' => 'CaseFiles', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Case Recents'), ['controller' => 'CaseRecents', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Case Recent'), ['controller' => 'CaseRecents', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Case User Emails'), ['controller' => 'CaseUserEmails', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Case User Email'), ['controller' => 'CaseUserEmails', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Case User Views'), ['controller' => 'CaseUserViews', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Case User View'), ['controller' => 'CaseUserViews', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Easycase Milestones'), ['controller' => 'EasycaseMilestones', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Easycase Milestone'), ['controller' => 'EasycaseMilestones', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="easycases view large-9 medium-8 columns content">
    <h3><?= h($easycase->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Uniq Id') ?></th>
            <td><?= h($easycase->uniq_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Project') ?></th>
            <td><?= $easycase->has('project') ? $this->Html->link($easycase->project->name, ['controller' => 'Projects', 'action' => 'view', $easycase->project->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $easycase->has('user') ? $this->Html->link($easycase->user->name, ['controller' => 'Users', 'action' => 'view', $easycase->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Type') ?></th>
            <td><?= $easycase->has('type') ? $this->Html->link($easycase->type->name, ['controller' => 'Types', 'action' => 'view', $easycase->type->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Priority') ?></th>
            <td><?= h($easycase->priority) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Title') ?></th>
            <td><?= h($easycase->title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($easycase->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Case No') ?></th>
            <td><?= $this->Number->format($easycase->case_no) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Case Count') ?></th>
            <td><?= $this->Number->format($easycase->case_count) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Updated By') ?></th>
            <td><?= $this->Number->format($easycase->updated_by) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Estimated Hours') ?></th>
            <td><?= $this->Number->format($easycase->estimated_hours) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Hours') ?></th>
            <td><?= $this->Number->format($easycase->hours) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Completed Task') ?></th>
            <td><?= $this->Number->format($easycase->completed_task) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Assign To') ?></th>
            <td><?= $this->Number->format($easycase->assign_to) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Istype') ?></th>
            <td><?= $this->Number->format($easycase->istype) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Format') ?></th>
            <td><?= $this->Number->format($easycase->format) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $this->Number->format($easycase->status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Legend') ?></th>
            <td><?= $this->Number->format($easycase->legend) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Isactive') ?></th>
            <td><?= $this->Number->format($easycase->isactive) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Reply Type') ?></th>
            <td><?= $this->Number->format($easycase->reply_type) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Due Date') ?></th>
            <td><?= h($easycase->due_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dt Created') ?></th>
            <td><?= h($easycase->dt_created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Actual Dt Created') ?></th>
            <td><?= h($easycase->actual_dt_created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Is Chrome Extension') ?></th>
            <td><?= $easycase->is_chrome_extension ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('From Email') ?></th>
            <td><?= $easycase->from_email ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Message') ?></h4>
        <?= $this->Text->autoParagraph(h($easycase->message)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Archives') ?></h4>
        <?php if (!empty($easycase->archives)): ?>
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
            <?php foreach ($easycase->archives as $archives): ?>
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
    <div class="related">
        <h4><?= __('Related Case Actions') ?></h4>
        <?php if (!empty($easycase->case_actions)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Easycase Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Action') ?></th>
                <th scope="col"><?= __('Dt Created') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($easycase->case_actions as $caseActions): ?>
            <tr>
                <td><?= h($caseActions->id) ?></td>
                <td><?= h($caseActions->easycase_id) ?></td>
                <td><?= h($caseActions->user_id) ?></td>
                <td><?= h($caseActions->action) ?></td>
                <td><?= h($caseActions->dt_created) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'CaseActions', 'action' => 'view', $caseActions->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'CaseActions', 'action' => 'edit', $caseActions->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'CaseActions', 'action' => 'delete', $caseActions->id], ['confirm' => __('Are you sure you want to delete # {0}?', $caseActions->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Case Activities') ?></h4>
        <?php if (!empty($easycase->case_activities)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Easycase Id') ?></th>
                <th scope="col"><?= __('Comment Id') ?></th>
                <th scope="col"><?= __('Case No') ?></th>
                <th scope="col"><?= __('Project Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Type') ?></th>
                <th scope="col"><?= __('Isactive') ?></th>
                <th scope="col"><?= __('Dt Created') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($easycase->case_activities as $caseActivities): ?>
            <tr>
                <td><?= h($caseActivities->id) ?></td>
                <td><?= h($caseActivities->easycase_id) ?></td>
                <td><?= h($caseActivities->comment_id) ?></td>
                <td><?= h($caseActivities->case_no) ?></td>
                <td><?= h($caseActivities->project_id) ?></td>
                <td><?= h($caseActivities->user_id) ?></td>
                <td><?= h($caseActivities->type) ?></td>
                <td><?= h($caseActivities->isactive) ?></td>
                <td><?= h($caseActivities->dt_created) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'CaseActivities', 'action' => 'view', $caseActivities->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'CaseActivities', 'action' => 'edit', $caseActivities->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'CaseActivities', 'action' => 'delete', $caseActivities->id], ['confirm' => __('Are you sure you want to delete # {0}?', $caseActivities->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Case File Drives') ?></h4>
        <?php if (!empty($easycase->case_file_drives)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Project Id') ?></th>
                <th scope="col"><?= __('Easycase Id') ?></th>
                <th scope="col"><?= __('File Info') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($easycase->case_file_drives as $caseFileDrives): ?>
            <tr>
                <td><?= h($caseFileDrives->id) ?></td>
                <td><?= h($caseFileDrives->project_id) ?></td>
                <td><?= h($caseFileDrives->easycase_id) ?></td>
                <td><?= h($caseFileDrives->file_info) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'CaseFileDrives', 'action' => 'view', $caseFileDrives->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'CaseFileDrives', 'action' => 'edit', $caseFileDrives->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'CaseFileDrives', 'action' => 'delete', $caseFileDrives->id], ['confirm' => __('Are you sure you want to delete # {0}?', $caseFileDrives->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Case Files') ?></h4>
        <?php if (!empty($easycase->case_files)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Project Id') ?></th>
                <th scope="col"><?= __('Company Id') ?></th>
                <th scope="col"><?= __('Easycase Id') ?></th>
                <th scope="col"><?= __('Comment Id') ?></th>
                <th scope="col"><?= __('File') ?></th>
                <th scope="col"><?= __('Thumb') ?></th>
                <th scope="col"><?= __('File Size') ?></th>
                <th scope="col"><?= __('Count') ?></th>
                <th scope="col"><?= __('Downloadurl') ?></th>
                <th scope="col"><?= __('Isactive') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($easycase->case_files as $caseFiles): ?>
            <tr>
                <td><?= h($caseFiles->id) ?></td>
                <td><?= h($caseFiles->user_id) ?></td>
                <td><?= h($caseFiles->project_id) ?></td>
                <td><?= h($caseFiles->company_id) ?></td>
                <td><?= h($caseFiles->easycase_id) ?></td>
                <td><?= h($caseFiles->comment_id) ?></td>
                <td><?= h($caseFiles->file) ?></td>
                <td><?= h($caseFiles->thumb) ?></td>
                <td><?= h($caseFiles->file_size) ?></td>
                <td><?= h($caseFiles->count) ?></td>
                <td><?= h($caseFiles->downloadurl) ?></td>
                <td><?= h($caseFiles->isactive) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'CaseFiles', 'action' => 'view', $caseFiles->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'CaseFiles', 'action' => 'edit', $caseFiles->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'CaseFiles', 'action' => 'delete', $caseFiles->id], ['confirm' => __('Are you sure you want to delete # {0}?', $caseFiles->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Case Recents') ?></h4>
        <?php if (!empty($easycase->case_recents)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Easycase Id') ?></th>
                <th scope="col"><?= __('Company Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Project Id') ?></th>
                <th scope="col"><?= __('Dt Created') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($easycase->case_recents as $caseRecents): ?>
            <tr>
                <td><?= h($caseRecents->id) ?></td>
                <td><?= h($caseRecents->easycase_id) ?></td>
                <td><?= h($caseRecents->company_id) ?></td>
                <td><?= h($caseRecents->user_id) ?></td>
                <td><?= h($caseRecents->project_id) ?></td>
                <td><?= h($caseRecents->dt_created) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'CaseRecents', 'action' => 'view', $caseRecents->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'CaseRecents', 'action' => 'edit', $caseRecents->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'CaseRecents', 'action' => 'delete', $caseRecents->id], ['confirm' => __('Are you sure you want to delete # {0}?', $caseRecents->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Case User Emails') ?></h4>
        <?php if (!empty($easycase->case_user_emails)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Easycase Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Ismail') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($easycase->case_user_emails as $caseUserEmails): ?>
            <tr>
                <td><?= h($caseUserEmails->id) ?></td>
                <td><?= h($caseUserEmails->easycase_id) ?></td>
                <td><?= h($caseUserEmails->user_id) ?></td>
                <td><?= h($caseUserEmails->ismail) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'CaseUserEmails', 'action' => 'view', $caseUserEmails->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'CaseUserEmails', 'action' => 'edit', $caseUserEmails->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'CaseUserEmails', 'action' => 'delete', $caseUserEmails->id], ['confirm' => __('Are you sure you want to delete # {0}?', $caseUserEmails->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Case User Views') ?></h4>
        <?php if (!empty($easycase->case_user_views)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Easycase Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Project Id') ?></th>
                <th scope="col"><?= __('Istype') ?></th>
                <th scope="col"><?= __('Isviewed') ?></th>
                <th scope="col"><?= __('Dt Created') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($easycase->case_user_views as $caseUserViews): ?>
            <tr>
                <td><?= h($caseUserViews->id) ?></td>
                <td><?= h($caseUserViews->easycase_id) ?></td>
                <td><?= h($caseUserViews->user_id) ?></td>
                <td><?= h($caseUserViews->project_id) ?></td>
                <td><?= h($caseUserViews->istype) ?></td>
                <td><?= h($caseUserViews->isviewed) ?></td>
                <td><?= h($caseUserViews->dt_created) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'CaseUserViews', 'action' => 'view', $caseUserViews->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'CaseUserViews', 'action' => 'edit', $caseUserViews->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'CaseUserViews', 'action' => 'delete', $caseUserViews->id], ['confirm' => __('Are you sure you want to delete # {0}?', $caseUserViews->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Easycase Milestones') ?></h4>
        <?php if (!empty($easycase->easycase_milestones)): ?>
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
            <?php foreach ($easycase->easycase_milestones as $easycaseMilestones): ?>
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
