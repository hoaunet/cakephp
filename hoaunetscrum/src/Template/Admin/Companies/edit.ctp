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
                ['action' => 'delete', $company->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $company->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Companies'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Subscriptions'), ['controller' => 'Subscriptions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Subscription'), ['controller' => 'Subscriptions', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Archives'), ['controller' => 'Archives', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Archive'), ['controller' => 'Archives', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Case Files'), ['controller' => 'CaseFiles', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Case File'), ['controller' => 'CaseFiles', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Case Recents'), ['controller' => 'CaseRecents', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Case Recent'), ['controller' => 'CaseRecents', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Case Templates'), ['controller' => 'CaseTemplates', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Case Template'), ['controller' => 'CaseTemplates', 'action' => 'add']) ?></li>
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
        <li><?= $this->Html->link(__('List Log Activities'), ['controller' => 'LogActivities', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Log Activity'), ['controller' => 'LogActivities', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Milestones'), ['controller' => 'Milestones', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Milestone'), ['controller' => 'Milestones', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Project Template Cases'), ['controller' => 'ProjectTemplateCases', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Project Template Case'), ['controller' => 'ProjectTemplateCases', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Project Templates'), ['controller' => 'ProjectTemplates', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Project Template'), ['controller' => 'ProjectTemplates', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Project Users'), ['controller' => 'ProjectUsers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Project User'), ['controller' => 'ProjectUsers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projects'), ['controller' => 'Projects', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Project'), ['controller' => 'Projects', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Template Module Cases'), ['controller' => 'TemplateModuleCases', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Template Module Case'), ['controller' => 'TemplateModuleCases', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Transactions'), ['controller' => 'Transactions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Transaction'), ['controller' => 'Transactions', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Type Companies'), ['controller' => 'TypeCompanies', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Type Company'), ['controller' => 'TypeCompanies', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Types'), ['controller' => 'Types', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Type'), ['controller' => 'Types', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List User Invitations'), ['controller' => 'UserInvitations', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User Invitation'), ['controller' => 'UserInvitations', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List User Subscriptions'), ['controller' => 'UserSubscriptions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User Subscription'), ['controller' => 'UserSubscriptions', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="companies form large-9 medium-8 columns content">
    <?= $this->Form->create($company) ?>
    <fieldset>
        <legend><?= __('Edit Company') ?></legend>
        <?php
            echo $this->Form->control('uniq_id');
            echo $this->Form->control('name');
            echo $this->Form->control('seo_url');
            echo $this->Form->control('subscription_id', ['options' => $subscriptions]);
            echo $this->Form->control('logo');
            echo $this->Form->control('website');
            echo $this->Form->control('contact_phone');
            echo $this->Form->control('is_beta');
            echo $this->Form->control('is_active');
            echo $this->Form->control('is_deactivated');
            echo $this->Form->control('twitted');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
