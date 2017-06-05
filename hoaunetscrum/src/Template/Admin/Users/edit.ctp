<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $user->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Timezones'), ['controller' => 'Timezones', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Timezone'), ['controller' => 'Timezones', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List User Subscriptions'), ['controller' => 'UserSubscriptions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User Subscription'), ['controller' => 'UserSubscriptions', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Archives'), ['controller' => 'Archives', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Archive'), ['controller' => 'Archives', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Case Actions'), ['controller' => 'CaseActions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Case Action'), ['controller' => 'CaseActions', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Case Activities'), ['controller' => 'CaseActivities', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Case Activity'), ['controller' => 'CaseActivities', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Case Files'), ['controller' => 'CaseFiles', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Case File'), ['controller' => 'CaseFiles', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Case Filters'), ['controller' => 'CaseFilters', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Case Filter'), ['controller' => 'CaseFilters', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Case Recents'), ['controller' => 'CaseRecents', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Case Recent'), ['controller' => 'CaseRecents', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Case Settings'), ['controller' => 'CaseSettings', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Case Setting'), ['controller' => 'CaseSettings', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Case Templates'), ['controller' => 'CaseTemplates', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Case Template'), ['controller' => 'CaseTemplates', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Case User Emails'), ['controller' => 'CaseUserEmails', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Case User Email'), ['controller' => 'CaseUserEmails', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Case User Views'), ['controller' => 'CaseUserViews', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Case User View'), ['controller' => 'CaseUserViews', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Company Users'), ['controller' => 'CompanyUsers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Company User'), ['controller' => 'CompanyUsers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Custom Filters'), ['controller' => 'CustomFilters', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Custom Filter'), ['controller' => 'CustomFilters', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Daily Updates'), ['controller' => 'DailyUpdates', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Daily Update'), ['controller' => 'DailyUpdates', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Dailyupdate Notifications'), ['controller' => 'DailyupdateNotifications', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Dailyupdate Notification'), ['controller' => 'DailyupdateNotifications', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Default Project Template Cases'), ['controller' => 'DefaultProjectTemplateCases', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Default Project Template Case'), ['controller' => 'DefaultProjectTemplateCases', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Default Project Templates'), ['controller' => 'DefaultProjectTemplates', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Default Project Template'), ['controller' => 'DefaultProjectTemplates', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Easycase Milestones'), ['controller' => 'EasycaseMilestones', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Easycase Milestone'), ['controller' => 'EasycaseMilestones', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Easycases'), ['controller' => 'Easycases', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Easycase'), ['controller' => 'Easycases', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Email Reminders'), ['controller' => 'EmailReminders', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Email Reminder'), ['controller' => 'EmailReminders', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Log Activities'), ['controller' => 'LogActivities', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Log Activity'), ['controller' => 'LogActivities', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Milestones'), ['controller' => 'Milestones', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Milestone'), ['controller' => 'Milestones', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Os Session Logs'), ['controller' => 'OsSessionLogs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Os Session Log'), ['controller' => 'OsSessionLogs', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Project Template Cases'), ['controller' => 'ProjectTemplateCases', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Project Template Case'), ['controller' => 'ProjectTemplateCases', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Project Templates'), ['controller' => 'ProjectTemplates', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Project Template'), ['controller' => 'ProjectTemplates', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Project Users'), ['controller' => 'ProjectUsers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Project User'), ['controller' => 'ProjectUsers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projects'), ['controller' => 'Projects', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Project'), ['controller' => 'Projects', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Save Reports'), ['controller' => 'SaveReports', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Save Report'), ['controller' => 'SaveReports', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Template Module Cases'), ['controller' => 'TemplateModuleCases', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Template Module Case'), ['controller' => 'TemplateModuleCases', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Transactions'), ['controller' => 'Transactions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Transaction'), ['controller' => 'Transactions', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List User Infos'), ['controller' => 'UserInfos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User Info'), ['controller' => 'UserInfos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List User Invitations'), ['controller' => 'UserInvitations', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User Invitation'), ['controller' => 'UserInvitations', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List User Logins'), ['controller' => 'UserLogins', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User Login'), ['controller' => 'UserLogins', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List User Notifications'), ['controller' => 'UserNotifications', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User Notification'), ['controller' => 'UserNotifications', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Edit User') ?></legend>
        <?php
            echo $this->Form->control('uniq_id');
            echo $this->Form->control('btprofile_id');
            echo $this->Form->control('usersubscription_id');
            echo $this->Form->control('credit_cardtoken');
            echo $this->Form->control('card_number');
            echo $this->Form->control('expiry_date');
            echo $this->Form->control('email');
            echo $this->Form->control('password');
            echo $this->Form->control('name');
            echo $this->Form->control('is_beta');
            echo $this->Form->control('last_name');
            echo $this->Form->control('short_name');
            echo $this->Form->control('istype');
            echo $this->Form->control('photo');
            echo $this->Form->control('photo_reset');
            echo $this->Form->control('isactive');
            echo $this->Form->control('timezone_id', ['options' => $timezones, 'empty' => true]);
            echo $this->Form->control('isemail');
            echo $this->Form->control('is_agree');
            echo $this->Form->control('usersub_type');
            echo $this->Form->control('est_billing_amount');
            echo $this->Form->control('dt_created');
            echo $this->Form->control('dt_updated', ['empty' => true]);
            echo $this->Form->control('dt_last_login', ['empty' => true]);
            echo $this->Form->control('dt_last_logout', ['empty' => true]);
            echo $this->Form->control('query_string');
            echo $this->Form->control('update_email');
            echo $this->Form->control('update_random');
            echo $this->Form->control('gaccess_token');
            echo $this->Form->control('ip');
            echo $this->Form->control('sig');
            echo $this->Form->control('desk_notify');
            echo $this->Form->control('active_dashboard_tab');
            echo $this->Form->control('is_moderator');
            echo $this->Form->control('show_default_inner');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
