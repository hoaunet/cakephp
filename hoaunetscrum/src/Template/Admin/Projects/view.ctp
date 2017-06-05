<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Project'), ['action' => 'edit', $project->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Project'), ['action' => 'delete', $project->id], ['confirm' => __('Are you sure you want to delete # {0}?', $project->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Projects'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Project'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Companies'), ['controller' => 'Companies', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Company'), ['controller' => 'Companies', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Case Activities'), ['controller' => 'CaseActivities', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Case Activity'), ['controller' => 'CaseActivities', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Case File Drives'), ['controller' => 'CaseFileDrives', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Case File Drive'), ['controller' => 'CaseFileDrives', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Case Files'), ['controller' => 'CaseFiles', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Case File'), ['controller' => 'CaseFiles', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Case Recents'), ['controller' => 'CaseRecents', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Case Recent'), ['controller' => 'CaseRecents', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Case Settings'), ['controller' => 'CaseSettings', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Case Setting'), ['controller' => 'CaseSettings', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Case User Views'), ['controller' => 'CaseUserViews', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Case User View'), ['controller' => 'CaseUserViews', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Daily Updates'), ['controller' => 'DailyUpdates', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Daily Update'), ['controller' => 'DailyUpdates', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Easycase Milestones'), ['controller' => 'EasycaseMilestones', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Easycase Milestone'), ['controller' => 'EasycaseMilestones', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Easycases'), ['controller' => 'Easycases', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Easycase'), ['controller' => 'Easycases', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Milestones'), ['controller' => 'Milestones', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Milestone'), ['controller' => 'Milestones', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Project Technologies'), ['controller' => 'ProjectTechnologies', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Project Technology'), ['controller' => 'ProjectTechnologies', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Project Users'), ['controller' => 'ProjectUsers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Project User'), ['controller' => 'ProjectUsers', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Template Module Cases'), ['controller' => 'TemplateModuleCases', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Template Module Case'), ['controller' => 'TemplateModuleCases', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List User Invitations'), ['controller' => 'UserInvitations', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User Invitation'), ['controller' => 'UserInvitations', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="projects view large-9 medium-8 columns content">
    <h3><?= h($project->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Uniq Id') ?></th>
            <td><?= h($project->uniq_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $project->has('user') ? $this->Html->link($project->user->name, ['controller' => 'Users', 'action' => 'view', $project->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Company') ?></th>
            <td><?= $project->has('company') ? $this->Html->link($project->company->name, ['controller' => 'Companies', 'action' => 'view', $project->company->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($project->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Short Name') ?></th>
            <td><?= h($project->short_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Logo') ?></th>
            <td><?= h($project->logo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($project->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Project Type') ?></th>
            <td><?= $this->Number->format($project->project_type) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Default Assign') ?></th>
            <td><?= $this->Number->format($project->default_assign) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Isactive') ?></th>
            <td><?= $this->Number->format($project->isactive) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dt Created') ?></th>
            <td><?= h($project->dt_created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dt Updated') ?></th>
            <td><?= h($project->dt_updated) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($project->description)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Case Activities') ?></h4>
        <?php if (!empty($project->case_activities)): ?>
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
            <?php foreach ($project->case_activities as $caseActivities): ?>
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
        <?php if (!empty($project->case_file_drives)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Project Id') ?></th>
                <th scope="col"><?= __('Easycase Id') ?></th>
                <th scope="col"><?= __('File Info') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($project->case_file_drives as $caseFileDrives): ?>
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
        <?php if (!empty($project->case_files)): ?>
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
            <?php foreach ($project->case_files as $caseFiles): ?>
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
        <?php if (!empty($project->case_recents)): ?>
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
            <?php foreach ($project->case_recents as $caseRecents): ?>
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
        <h4><?= __('Related Case Settings') ?></h4>
        <?php if (!empty($project->case_settings)): ?>
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
            <?php foreach ($project->case_settings as $caseSettings): ?>
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
        <h4><?= __('Related Case User Views') ?></h4>
        <?php if (!empty($project->case_user_views)): ?>
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
            <?php foreach ($project->case_user_views as $caseUserViews): ?>
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
        <h4><?= __('Related Daily Updates') ?></h4>
        <?php if (!empty($project->daily_updates)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Company Id') ?></th>
                <th scope="col"><?= __('Project Id') ?></th>
                <th scope="col"><?= __('Post By') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Timezone Id') ?></th>
                <th scope="col"><?= __('Notification Time') ?></th>
                <th scope="col"><?= __('Days') ?></th>
                <th scope="col"><?= __('Cron Email Date') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($project->daily_updates as $dailyUpdates): ?>
            <tr>
                <td><?= h($dailyUpdates->id) ?></td>
                <td><?= h($dailyUpdates->company_id) ?></td>
                <td><?= h($dailyUpdates->project_id) ?></td>
                <td><?= h($dailyUpdates->post_by) ?></td>
                <td><?= h($dailyUpdates->user_id) ?></td>
                <td><?= h($dailyUpdates->timezone_id) ?></td>
                <td><?= h($dailyUpdates->notification_time) ?></td>
                <td><?= h($dailyUpdates->days) ?></td>
                <td><?= h($dailyUpdates->cron_email_date) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'DailyUpdates', 'action' => 'view', $dailyUpdates->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'DailyUpdates', 'action' => 'edit', $dailyUpdates->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'DailyUpdates', 'action' => 'delete', $dailyUpdates->id], ['confirm' => __('Are you sure you want to delete # {0}?', $dailyUpdates->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Easycase Milestones') ?></h4>
        <?php if (!empty($project->easycase_milestones)): ?>
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
            <?php foreach ($project->easycase_milestones as $easycaseMilestones): ?>
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
    <div class="related">
        <h4><?= __('Related Easycases') ?></h4>
        <?php if (!empty($project->easycases)): ?>
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
            <?php foreach ($project->easycases as $easycases): ?>
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
        <h4><?= __('Related Milestones') ?></h4>
        <?php if (!empty($project->milestones)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Uniq Id') ?></th>
                <th scope="col"><?= __('Project Id') ?></th>
                <th scope="col"><?= __('Company Id') ?></th>
                <th scope="col"><?= __('Title') ?></th>
                <th scope="col"><?= __('Description') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Start Date') ?></th>
                <th scope="col"><?= __('End Date') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Isactive') ?></th>
                <th scope="col"><?= __('Id Seq') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($project->milestones as $milestones): ?>
            <tr>
                <td><?= h($milestones->id) ?></td>
                <td><?= h($milestones->uniq_id) ?></td>
                <td><?= h($milestones->project_id) ?></td>
                <td><?= h($milestones->company_id) ?></td>
                <td><?= h($milestones->title) ?></td>
                <td><?= h($milestones->description) ?></td>
                <td><?= h($milestones->user_id) ?></td>
                <td><?= h($milestones->start_date) ?></td>
                <td><?= h($milestones->end_date) ?></td>
                <td><?= h($milestones->created) ?></td>
                <td><?= h($milestones->modified) ?></td>
                <td><?= h($milestones->isactive) ?></td>
                <td><?= h($milestones->id_seq) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Milestones', 'action' => 'view', $milestones->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Milestones', 'action' => 'edit', $milestones->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Milestones', 'action' => 'delete', $milestones->id], ['confirm' => __('Are you sure you want to delete # {0}?', $milestones->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Project Technologies') ?></h4>
        <?php if (!empty($project->project_technologies)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Project Id') ?></th>
                <th scope="col"><?= __('Technology Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($project->project_technologies as $projectTechnologies): ?>
            <tr>
                <td><?= h($projectTechnologies->id) ?></td>
                <td><?= h($projectTechnologies->project_id) ?></td>
                <td><?= h($projectTechnologies->technology_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'ProjectTechnologies', 'action' => 'view', $projectTechnologies->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'ProjectTechnologies', 'action' => 'edit', $projectTechnologies->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'ProjectTechnologies', 'action' => 'delete', $projectTechnologies->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projectTechnologies->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Project Users') ?></h4>
        <?php if (!empty($project->project_users)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Project Id') ?></th>
                <th scope="col"><?= __('Company Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Istype') ?></th>
                <th scope="col"><?= __('Default Email') ?></th>
                <th scope="col"><?= __('Dt Visited') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($project->project_users as $projectUsers): ?>
            <tr>
                <td><?= h($projectUsers->id) ?></td>
                <td><?= h($projectUsers->project_id) ?></td>
                <td><?= h($projectUsers->company_id) ?></td>
                <td><?= h($projectUsers->user_id) ?></td>
                <td><?= h($projectUsers->istype) ?></td>
                <td><?= h($projectUsers->default_email) ?></td>
                <td><?= h($projectUsers->dt_visited) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'ProjectUsers', 'action' => 'view', $projectUsers->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'ProjectUsers', 'action' => 'edit', $projectUsers->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'ProjectUsers', 'action' => 'delete', $projectUsers->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projectUsers->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Template Module Cases') ?></h4>
        <?php if (!empty($project->template_module_cases)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Company Id') ?></th>
                <th scope="col"><?= __('Template Module Id') ?></th>
                <th scope="col"><?= __('Project Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($project->template_module_cases as $templateModuleCases): ?>
            <tr>
                <td><?= h($templateModuleCases->id) ?></td>
                <td><?= h($templateModuleCases->user_id) ?></td>
                <td><?= h($templateModuleCases->company_id) ?></td>
                <td><?= h($templateModuleCases->template_module_id) ?></td>
                <td><?= h($templateModuleCases->project_id) ?></td>
                <td><?= h($templateModuleCases->created) ?></td>
                <td><?= h($templateModuleCases->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'TemplateModuleCases', 'action' => 'view', $templateModuleCases->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'TemplateModuleCases', 'action' => 'edit', $templateModuleCases->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'TemplateModuleCases', 'action' => 'delete', $templateModuleCases->id], ['confirm' => __('Are you sure you want to delete # {0}?', $templateModuleCases->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related User Invitations') ?></h4>
        <?php if (!empty($project->user_invitations)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Invitor Id') ?></th>
                <th scope="col"><?= __('Company Id') ?></th>
                <th scope="col"><?= __('User Type') ?></th>
                <th scope="col"><?= __('Project Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Is Active') ?></th>
                <th scope="col"><?= __('Qstr') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($project->user_invitations as $userInvitations): ?>
            <tr>
                <td><?= h($userInvitations->id) ?></td>
                <td><?= h($userInvitations->invitor_id) ?></td>
                <td><?= h($userInvitations->company_id) ?></td>
                <td><?= h($userInvitations->user_type) ?></td>
                <td><?= h($userInvitations->project_id) ?></td>
                <td><?= h($userInvitations->user_id) ?></td>
                <td><?= h($userInvitations->is_active) ?></td>
                <td><?= h($userInvitations->qstr) ?></td>
                <td><?= h($userInvitations->created) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'UserInvitations', 'action' => 'view', $userInvitations->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'UserInvitations', 'action' => 'edit', $userInvitations->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'UserInvitations', 'action' => 'delete', $userInvitations->id], ['confirm' => __('Are you sure you want to delete # {0}?', $userInvitations->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
