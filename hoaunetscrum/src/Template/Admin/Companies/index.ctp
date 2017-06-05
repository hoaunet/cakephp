<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Company'), ['action' => 'add']) ?></li>
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
<div class="companies index large-9 medium-8 columns content">
    <h3><?= __('Companies') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('seo_url') ?></th>
                <th scope="col"><?= $this->Paginator->sort('subscription_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('logo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('website') ?></th>
                <th scope="col"><?= $this->Paginator->sort('contact_phone') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('is_beta') ?></th>
                <th scope="col"><?= $this->Paginator->sort('is_active') ?></th>
                <th scope="col"><?= $this->Paginator->sort('is_deactivated') ?></th>
                <th scope="col"><?= $this->Paginator->sort('twitted') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($companies as $company): ?>
            <tr>
                <td><?= $this->Number->format($company->id) ?></td>
                <td><?= h($company->name) ?></td>
                <td><?= h($company->seo_url) ?></td>
                <td><?= $company->has('subscription') ? $this->Html->link($company->subscription->id, ['controller' => 'Subscriptions', 'action' => 'view', $company->subscription->id]) : '' ?></td>
                <td><?= h($company->logo) ?></td>
                <td><?= h($company->website) ?></td>
                <td><?= h($company->contact_phone) ?></td>
                <td><?= h($company->created) ?></td>
                <td><?= h($company->modified) ?></td>
                <td><?= $this->Number->format($company->is_beta) ?></td>
                <td><?= $this->Number->format($company->is_active) ?></td>
                <td><?= $this->Number->format($company->is_deactivated) ?></td>
                <td><?= $this->Number->format($company->twitted) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $company->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $company->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $company->id], ['confirm' => __('Are you sure you want to delete # {0}?', $company->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
