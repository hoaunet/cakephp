<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Company'), ['action' => 'edit', $company->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Company'), ['action' => 'delete', $company->id], ['confirm' => __('Are you sure you want to delete # {0}?', $company->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Companies'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Company'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Subscriptions'), ['controller' => 'Subscriptions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Subscription'), ['controller' => 'Subscriptions', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Archives'), ['controller' => 'Archives', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Archive'), ['controller' => 'Archives', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Case Files'), ['controller' => 'CaseFiles', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Case File'), ['controller' => 'CaseFiles', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Case Recents'), ['controller' => 'CaseRecents', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Case Recent'), ['controller' => 'CaseRecents', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Case Templates'), ['controller' => 'CaseTemplates', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Case Template'), ['controller' => 'CaseTemplates', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Company Users'), ['controller' => 'CompanyUsers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Company User'), ['controller' => 'CompanyUsers', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Custom Filters'), ['controller' => 'CustomFilters', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Custom Filter'), ['controller' => 'CustomFilters', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Daily Updates'), ['controller' => 'DailyUpdates', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Daily Update'), ['controller' => 'DailyUpdates', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Dailyupdate Notifications'), ['controller' => 'DailyupdateNotifications', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Dailyupdate Notification'), ['controller' => 'DailyupdateNotifications', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Default Project Template Cases'), ['controller' => 'DefaultProjectTemplateCases', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Default Project Template Case'), ['controller' => 'DefaultProjectTemplateCases', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Default Project Templates'), ['controller' => 'DefaultProjectTemplates', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Default Project Template'), ['controller' => 'DefaultProjectTemplates', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Log Activities'), ['controller' => 'LogActivities', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Log Activity'), ['controller' => 'LogActivities', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Milestones'), ['controller' => 'Milestones', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Milestone'), ['controller' => 'Milestones', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Project Template Cases'), ['controller' => 'ProjectTemplateCases', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Project Template Case'), ['controller' => 'ProjectTemplateCases', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Project Templates'), ['controller' => 'ProjectTemplates', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Project Template'), ['controller' => 'ProjectTemplates', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Project Users'), ['controller' => 'ProjectUsers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Project User'), ['controller' => 'ProjectUsers', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Projects'), ['controller' => 'Projects', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Project'), ['controller' => 'Projects', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Template Module Cases'), ['controller' => 'TemplateModuleCases', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Template Module Case'), ['controller' => 'TemplateModuleCases', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Transactions'), ['controller' => 'Transactions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Transaction'), ['controller' => 'Transactions', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Type Companies'), ['controller' => 'TypeCompanies', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Type Company'), ['controller' => 'TypeCompanies', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Types'), ['controller' => 'Types', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Type'), ['controller' => 'Types', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List User Invitations'), ['controller' => 'UserInvitations', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User Invitation'), ['controller' => 'UserInvitations', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List User Subscriptions'), ['controller' => 'UserSubscriptions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User Subscription'), ['controller' => 'UserSubscriptions', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="companies view large-9 medium-8 columns content">
    <h3><?= h($company->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($company->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Seo Url') ?></th>
            <td><?= h($company->seo_url) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Subscription') ?></th>
            <td><?= $company->has('subscription') ? $this->Html->link($company->subscription->id, ['controller' => 'Subscriptions', 'action' => 'view', $company->subscription->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Logo') ?></th>
            <td><?= h($company->logo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Website') ?></th>
            <td><?= h($company->website) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Contact Phone') ?></th>
            <td><?= h($company->contact_phone) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($company->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Is Beta') ?></th>
            <td><?= $this->Number->format($company->is_beta) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Is Active') ?></th>
            <td><?= $this->Number->format($company->is_active) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Is Deactivated') ?></th>
            <td><?= $this->Number->format($company->is_deactivated) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Twitted') ?></th>
            <td><?= $this->Number->format($company->twitted) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($company->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($company->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Uniq Id') ?></h4>
        <?= $this->Text->autoParagraph(h($company->uniq_id)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Archives') ?></h4>
        <?php if (!empty($company->archives)): ?>
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
            <?php foreach ($company->archives as $archives): ?>
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
        <h4><?= __('Related Case Files') ?></h4>
        <?php if (!empty($company->case_files)): ?>
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
            <?php foreach ($company->case_files as $caseFiles): ?>
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
        <?php if (!empty($company->case_recents)): ?>
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
            <?php foreach ($company->case_recents as $caseRecents): ?>
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
        <h4><?= __('Related Case Templates') ?></h4>
        <?php if (!empty($company->case_templates)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Company Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Description') ?></th>
                <th scope="col"><?= __('Is Active') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($company->case_templates as $caseTemplates): ?>
            <tr>
                <td><?= h($caseTemplates->id) ?></td>
                <td><?= h($caseTemplates->user_id) ?></td>
                <td><?= h($caseTemplates->company_id) ?></td>
                <td><?= h($caseTemplates->name) ?></td>
                <td><?= h($caseTemplates->description) ?></td>
                <td><?= h($caseTemplates->is_active) ?></td>
                <td><?= h($caseTemplates->created) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'CaseTemplates', 'action' => 'view', $caseTemplates->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'CaseTemplates', 'action' => 'edit', $caseTemplates->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'CaseTemplates', 'action' => 'delete', $caseTemplates->id], ['confirm' => __('Are you sure you want to delete # {0}?', $caseTemplates->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Company Users') ?></h4>
        <?php if (!empty($company->company_users)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Company Id') ?></th>
                <th scope="col"><?= __('Company Uniq Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('User Type') ?></th>
                <th scope="col"><?= __('Is Active') ?></th>
                <th scope="col"><?= __('Est Billing Amt') ?></th>
                <th scope="col"><?= __('Act Date') ?></th>
                <th scope="col"><?= __('Billing Start Date') ?></th>
                <th scope="col"><?= __('Billing End Date') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($company->company_users as $companyUsers): ?>
            <tr>
                <td><?= h($companyUsers->id) ?></td>
                <td><?= h($companyUsers->company_id) ?></td>
                <td><?= h($companyUsers->company_uniq_id) ?></td>
                <td><?= h($companyUsers->user_id) ?></td>
                <td><?= h($companyUsers->user_type) ?></td>
                <td><?= h($companyUsers->is_active) ?></td>
                <td><?= h($companyUsers->est_billing_amt) ?></td>
                <td><?= h($companyUsers->act_date) ?></td>
                <td><?= h($companyUsers->billing_start_date) ?></td>
                <td><?= h($companyUsers->billing_end_date) ?></td>
                <td><?= h($companyUsers->created) ?></td>
                <td><?= h($companyUsers->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'CompanyUsers', 'action' => 'view', $companyUsers->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'CompanyUsers', 'action' => 'edit', $companyUsers->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'CompanyUsers', 'action' => 'delete', $companyUsers->id], ['confirm' => __('Are you sure you want to delete # {0}?', $companyUsers->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Custom Filters') ?></h4>
        <?php if (!empty($company->custom_filters)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Project Uniq Id') ?></th>
                <th scope="col"><?= __('Company Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Filter Name') ?></th>
                <th scope="col"><?= __('Filter Date') ?></th>
                <th scope="col"><?= __('Filter Duedate') ?></th>
                <th scope="col"><?= __('Filter Type Id') ?></th>
                <th scope="col"><?= __('Filter Status') ?></th>
                <th scope="col"><?= __('Filter Member Id') ?></th>
                <th scope="col"><?= __('Filter Priority') ?></th>
                <th scope="col"><?= __('Filter Assignto') ?></th>
                <th scope="col"><?= __('Filter Search') ?></th>
                <th scope="col"><?= __('Dt Created') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($company->custom_filters as $customFilters): ?>
            <tr>
                <td><?= h($customFilters->id) ?></td>
                <td><?= h($customFilters->project_uniq_id) ?></td>
                <td><?= h($customFilters->company_id) ?></td>
                <td><?= h($customFilters->user_id) ?></td>
                <td><?= h($customFilters->filter_name) ?></td>
                <td><?= h($customFilters->filter_date) ?></td>
                <td><?= h($customFilters->filter_duedate) ?></td>
                <td><?= h($customFilters->filter_type_id) ?></td>
                <td><?= h($customFilters->filter_status) ?></td>
                <td><?= h($customFilters->filter_member_id) ?></td>
                <td><?= h($customFilters->filter_priority) ?></td>
                <td><?= h($customFilters->filter_assignto) ?></td>
                <td><?= h($customFilters->filter_search) ?></td>
                <td><?= h($customFilters->dt_created) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'CustomFilters', 'action' => 'view', $customFilters->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'CustomFilters', 'action' => 'edit', $customFilters->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'CustomFilters', 'action' => 'delete', $customFilters->id], ['confirm' => __('Are you sure you want to delete # {0}?', $customFilters->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Daily Updates') ?></h4>
        <?php if (!empty($company->daily_updates)): ?>
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
            <?php foreach ($company->daily_updates as $dailyUpdates): ?>
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
        <h4><?= __('Related Dailyupdate Notifications') ?></h4>
        <?php if (!empty($company->dailyupdate_notifications)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Company Id') ?></th>
                <th scope="col"><?= __('Dly Update') ?></th>
                <th scope="col"><?= __('Notification Time') ?></th>
                <th scope="col"><?= __('Proj Name') ?></th>
                <th scope="col"><?= __('Mail Sent') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Status') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($company->dailyupdate_notifications as $dailyupdateNotifications): ?>
            <tr>
                <td><?= h($dailyupdateNotifications->id) ?></td>
                <td><?= h($dailyupdateNotifications->user_id) ?></td>
                <td><?= h($dailyupdateNotifications->company_id) ?></td>
                <td><?= h($dailyupdateNotifications->dly_update) ?></td>
                <td><?= h($dailyupdateNotifications->notification_time) ?></td>
                <td><?= h($dailyupdateNotifications->proj_name) ?></td>
                <td><?= h($dailyupdateNotifications->mail_sent) ?></td>
                <td><?= h($dailyupdateNotifications->modified) ?></td>
                <td><?= h($dailyupdateNotifications->status) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'DailyupdateNotifications', 'action' => 'view', $dailyupdateNotifications->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'DailyupdateNotifications', 'action' => 'edit', $dailyupdateNotifications->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'DailyupdateNotifications', 'action' => 'delete', $dailyupdateNotifications->id], ['confirm' => __('Are you sure you want to delete # {0}?', $dailyupdateNotifications->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Default Project Template Cases') ?></h4>
        <?php if (!empty($company->default_project_template_cases)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Company Id') ?></th>
                <th scope="col"><?= __('Template Id') ?></th>
                <th scope="col"><?= __('Title') ?></th>
                <th scope="col"><?= __('Description') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($company->default_project_template_cases as $defaultProjectTemplateCases): ?>
            <tr>
                <td><?= h($defaultProjectTemplateCases->id) ?></td>
                <td><?= h($defaultProjectTemplateCases->user_id) ?></td>
                <td><?= h($defaultProjectTemplateCases->company_id) ?></td>
                <td><?= h($defaultProjectTemplateCases->template_id) ?></td>
                <td><?= h($defaultProjectTemplateCases->title) ?></td>
                <td><?= h($defaultProjectTemplateCases->description) ?></td>
                <td><?= h($defaultProjectTemplateCases->created) ?></td>
                <td><?= h($defaultProjectTemplateCases->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'DefaultProjectTemplateCases', 'action' => 'view', $defaultProjectTemplateCases->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'DefaultProjectTemplateCases', 'action' => 'edit', $defaultProjectTemplateCases->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'DefaultProjectTemplateCases', 'action' => 'delete', $defaultProjectTemplateCases->id], ['confirm' => __('Are you sure you want to delete # {0}?', $defaultProjectTemplateCases->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Default Project Templates') ?></h4>
        <?php if (!empty($company->default_project_templates)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Company Id') ?></th>
                <th scope="col"><?= __('Module Name') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($company->default_project_templates as $defaultProjectTemplates): ?>
            <tr>
                <td><?= h($defaultProjectTemplates->id) ?></td>
                <td><?= h($defaultProjectTemplates->user_id) ?></td>
                <td><?= h($defaultProjectTemplates->company_id) ?></td>
                <td><?= h($defaultProjectTemplates->module_name) ?></td>
                <td><?= h($defaultProjectTemplates->created) ?></td>
                <td><?= h($defaultProjectTemplates->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'DefaultProjectTemplates', 'action' => 'view', $defaultProjectTemplates->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'DefaultProjectTemplates', 'action' => 'edit', $defaultProjectTemplates->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'DefaultProjectTemplates', 'action' => 'delete', $defaultProjectTemplates->id], ['confirm' => __('Are you sure you want to delete # {0}?', $defaultProjectTemplates->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Log Activities') ?></h4>
        <?php if (!empty($company->log_activities)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Company Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Log Type Id') ?></th>
                <th scope="col"><?= __('Json Value') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Ip') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($company->log_activities as $logActivities): ?>
            <tr>
                <td><?= h($logActivities->id) ?></td>
                <td><?= h($logActivities->company_id) ?></td>
                <td><?= h($logActivities->user_id) ?></td>
                <td><?= h($logActivities->log_type_id) ?></td>
                <td><?= h($logActivities->json_value) ?></td>
                <td><?= h($logActivities->created) ?></td>
                <td><?= h($logActivities->ip) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'LogActivities', 'action' => 'view', $logActivities->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'LogActivities', 'action' => 'edit', $logActivities->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'LogActivities', 'action' => 'delete', $logActivities->id], ['confirm' => __('Are you sure you want to delete # {0}?', $logActivities->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Milestones') ?></h4>
        <?php if (!empty($company->milestones)): ?>
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
            <?php foreach ($company->milestones as $milestones): ?>
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
        <h4><?= __('Related Project Template Cases') ?></h4>
        <?php if (!empty($company->project_template_cases)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Company Id') ?></th>
                <th scope="col"><?= __('Template Id') ?></th>
                <th scope="col"><?= __('Title') ?></th>
                <th scope="col"><?= __('Description') ?></th>
                <th scope="col"><?= __('Sort') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($company->project_template_cases as $projectTemplateCases): ?>
            <tr>
                <td><?= h($projectTemplateCases->id) ?></td>
                <td><?= h($projectTemplateCases->user_id) ?></td>
                <td><?= h($projectTemplateCases->company_id) ?></td>
                <td><?= h($projectTemplateCases->template_id) ?></td>
                <td><?= h($projectTemplateCases->title) ?></td>
                <td><?= h($projectTemplateCases->description) ?></td>
                <td><?= h($projectTemplateCases->sort) ?></td>
                <td><?= h($projectTemplateCases->created) ?></td>
                <td><?= h($projectTemplateCases->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'ProjectTemplateCases', 'action' => 'view', $projectTemplateCases->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'ProjectTemplateCases', 'action' => 'edit', $projectTemplateCases->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'ProjectTemplateCases', 'action' => 'delete', $projectTemplateCases->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projectTemplateCases->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Project Templates') ?></h4>
        <?php if (!empty($company->project_templates)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Company Id') ?></th>
                <th scope="col"><?= __('Module Name') ?></th>
                <th scope="col"><?= __('Is Default') ?></th>
                <th scope="col"><?= __('Is Active') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($company->project_templates as $projectTemplates): ?>
            <tr>
                <td><?= h($projectTemplates->id) ?></td>
                <td><?= h($projectTemplates->user_id) ?></td>
                <td><?= h($projectTemplates->company_id) ?></td>
                <td><?= h($projectTemplates->module_name) ?></td>
                <td><?= h($projectTemplates->is_default) ?></td>
                <td><?= h($projectTemplates->is_active) ?></td>
                <td><?= h($projectTemplates->created) ?></td>
                <td><?= h($projectTemplates->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'ProjectTemplates', 'action' => 'view', $projectTemplates->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'ProjectTemplates', 'action' => 'edit', $projectTemplates->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'ProjectTemplates', 'action' => 'delete', $projectTemplates->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projectTemplates->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Project Users') ?></h4>
        <?php if (!empty($company->project_users)): ?>
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
            <?php foreach ($company->project_users as $projectUsers): ?>
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
        <h4><?= __('Related Projects') ?></h4>
        <?php if (!empty($company->projects)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Uniq Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Company Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Short Name') ?></th>
                <th scope="col"><?= __('Description') ?></th>
                <th scope="col"><?= __('Logo') ?></th>
                <th scope="col"><?= __('Project Type') ?></th>
                <th scope="col"><?= __('Default Assign') ?></th>
                <th scope="col"><?= __('Isactive') ?></th>
                <th scope="col"><?= __('Dt Created') ?></th>
                <th scope="col"><?= __('Dt Updated') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($company->projects as $projects): ?>
            <tr>
                <td><?= h($projects->id) ?></td>
                <td><?= h($projects->uniq_id) ?></td>
                <td><?= h($projects->user_id) ?></td>
                <td><?= h($projects->company_id) ?></td>
                <td><?= h($projects->name) ?></td>
                <td><?= h($projects->short_name) ?></td>
                <td><?= h($projects->description) ?></td>
                <td><?= h($projects->logo) ?></td>
                <td><?= h($projects->project_type) ?></td>
                <td><?= h($projects->default_assign) ?></td>
                <td><?= h($projects->isactive) ?></td>
                <td><?= h($projects->dt_created) ?></td>
                <td><?= h($projects->dt_updated) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Projects', 'action' => 'view', $projects->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Projects', 'action' => 'edit', $projects->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Projects', 'action' => 'delete', $projects->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projects->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Template Module Cases') ?></h4>
        <?php if (!empty($company->template_module_cases)): ?>
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
            <?php foreach ($company->template_module_cases as $templateModuleCases): ?>
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
        <h4><?= __('Related Transactions') ?></h4>
        <?php if (!empty($company->transactions)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Btsubscription Id') ?></th>
                <th scope="col"><?= __('Transaction Id') ?></th>
                <th scope="col"><?= __('Plan Id') ?></th>
                <th scope="col"><?= __('Status') ?></th>
                <th scope="col"><?= __('Subscription Price') ?></th>
                <th scope="col"><?= __('Amt') ?></th>
                <th scope="col"><?= __('Discount') ?></th>
                <th scope="col"><?= __('Addon') ?></th>
                <th scope="col"><?= __('Transaction Type') ?></th>
                <th scope="col"><?= __('Invoice Mail Flag') ?></th>
                <th scope="col"><?= __('Invoice Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Ip') ?></th>
                <th scope="col"><?= __('Company Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($company->transactions as $transactions): ?>
            <tr>
                <td><?= h($transactions->id) ?></td>
                <td><?= h($transactions->btsubscription_id) ?></td>
                <td><?= h($transactions->transaction_id) ?></td>
                <td><?= h($transactions->plan_id) ?></td>
                <td><?= h($transactions->status) ?></td>
                <td><?= h($transactions->subscription_price) ?></td>
                <td><?= h($transactions->amt) ?></td>
                <td><?= h($transactions->discount) ?></td>
                <td><?= h($transactions->addon) ?></td>
                <td><?= h($transactions->transaction_type) ?></td>
                <td><?= h($transactions->invoice_mail_flag) ?></td>
                <td><?= h($transactions->invoice_id) ?></td>
                <td><?= h($transactions->created) ?></td>
                <td><?= h($transactions->ip) ?></td>
                <td><?= h($transactions->company_id) ?></td>
                <td><?= h($transactions->user_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Transactions', 'action' => 'view', $transactions->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Transactions', 'action' => 'edit', $transactions->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Transactions', 'action' => 'delete', $transactions->id], ['confirm' => __('Are you sure you want to delete # {0}?', $transactions->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Type Companies') ?></h4>
        <?php if (!empty($company->type_companies)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Company Id') ?></th>
                <th scope="col"><?= __('Type Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($company->type_companies as $typeCompanies): ?>
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
    <div class="related">
        <h4><?= __('Related Types') ?></h4>
        <?php if (!empty($company->types)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Company Id') ?></th>
                <th scope="col"><?= __('Short Name') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Seq Order') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($company->types as $types): ?>
            <tr>
                <td><?= h($types->id) ?></td>
                <td><?= h($types->company_id) ?></td>
                <td><?= h($types->short_name) ?></td>
                <td><?= h($types->name) ?></td>
                <td><?= h($types->seq_order) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Types', 'action' => 'view', $types->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Types', 'action' => 'edit', $types->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Types', 'action' => 'delete', $types->id], ['confirm' => __('Are you sure you want to delete # {0}?', $types->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related User Invitations') ?></h4>
        <?php if (!empty($company->user_invitations)): ?>
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
            <?php foreach ($company->user_invitations as $userInvitations): ?>
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
    <div class="related">
        <h4><?= __('Related User Subscriptions') ?></h4>
        <?php if (!empty($company->user_subscriptions)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Company Id') ?></th>
                <th scope="col"><?= __('Subscription Id') ?></th>
                <th scope="col"><?= __('Storage') ?></th>
                <th scope="col"><?= __('Project Limit') ?></th>
                <th scope="col"><?= __('User Limit') ?></th>
                <th scope="col"><?= __('Milestone Limit') ?></th>
                <th scope="col"><?= __('Free Trail Days') ?></th>
                <th scope="col"><?= __('Price') ?></th>
                <th scope="col"><?= __('Month') ?></th>
                <th scope="col"><?= __('Amt Due') ?></th>
                <th scope="col"><?= __('Coupon Code') ?></th>
                <th scope="col"><?= __('Btsubscription Id') ?></th>
                <th scope="col"><?= __('Btprofile Id') ?></th>
                <th scope="col"><?= __('Creditcard Token') ?></th>
                <th scope="col"><?= __('Payment Status') ?></th>
                <th scope="col"><?= __('Discount') ?></th>
                <th scope="col"><?= __('Is Cancel') ?></th>
                <th scope="col"><?= __('Is Sub Upgraded Bt') ?></th>
                <th scope="col"><?= __('Cancel Mail Flag') ?></th>
                <th scope="col"><?= __('No Of Atmpt Upgrd') ?></th>
                <th scope="col"><?= __('Is Free') ?></th>
                <th scope="col"><?= __('Is Updown') ?></th>
                <th scope="col"><?= __('Sub Start Date') ?></th>
                <th scope="col"><?= __('Next Billing Date') ?></th>
                <th scope="col"><?= __('Cancel Date') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($company->user_subscriptions as $userSubscriptions): ?>
            <tr>
                <td><?= h($userSubscriptions->id) ?></td>
                <td><?= h($userSubscriptions->user_id) ?></td>
                <td><?= h($userSubscriptions->company_id) ?></td>
                <td><?= h($userSubscriptions->subscription_id) ?></td>
                <td><?= h($userSubscriptions->storage) ?></td>
                <td><?= h($userSubscriptions->project_limit) ?></td>
                <td><?= h($userSubscriptions->user_limit) ?></td>
                <td><?= h($userSubscriptions->milestone_limit) ?></td>
                <td><?= h($userSubscriptions->free_trail_days) ?></td>
                <td><?= h($userSubscriptions->price) ?></td>
                <td><?= h($userSubscriptions->month) ?></td>
                <td><?= h($userSubscriptions->amt_due) ?></td>
                <td><?= h($userSubscriptions->coupon_code) ?></td>
                <td><?= h($userSubscriptions->btsubscription_id) ?></td>
                <td><?= h($userSubscriptions->btprofile_id) ?></td>
                <td><?= h($userSubscriptions->creditcard_token) ?></td>
                <td><?= h($userSubscriptions->payment_status) ?></td>
                <td><?= h($userSubscriptions->discount) ?></td>
                <td><?= h($userSubscriptions->is_cancel) ?></td>
                <td><?= h($userSubscriptions->is_sub_upgraded_bt) ?></td>
                <td><?= h($userSubscriptions->cancel_mail_flag) ?></td>
                <td><?= h($userSubscriptions->no_of_atmpt_upgrd) ?></td>
                <td><?= h($userSubscriptions->is_free) ?></td>
                <td><?= h($userSubscriptions->is_updown) ?></td>
                <td><?= h($userSubscriptions->sub_start_date) ?></td>
                <td><?= h($userSubscriptions->next_billing_date) ?></td>
                <td><?= h($userSubscriptions->cancel_date) ?></td>
                <td><?= h($userSubscriptions->created) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'UserSubscriptions', 'action' => 'view', $userSubscriptions->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'UserSubscriptions', 'action' => 'edit', $userSubscriptions->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'UserSubscriptions', 'action' => 'delete', $userSubscriptions->id], ['confirm' => __('Are you sure you want to delete # {0}?', $userSubscriptions->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
