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
                ['action' => 'delete', $project->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $project->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Projects'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Companies'), ['controller' => 'Companies', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Company'), ['controller' => 'Companies', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Case Activities'), ['controller' => 'CaseActivities', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Case Activity'), ['controller' => 'CaseActivities', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Case File Drives'), ['controller' => 'CaseFileDrives', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Case File Drive'), ['controller' => 'CaseFileDrives', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Case Files'), ['controller' => 'CaseFiles', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Case File'), ['controller' => 'CaseFiles', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Case Recents'), ['controller' => 'CaseRecents', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Case Recent'), ['controller' => 'CaseRecents', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Case Settings'), ['controller' => 'CaseSettings', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Case Setting'), ['controller' => 'CaseSettings', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Case User Views'), ['controller' => 'CaseUserViews', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Case User View'), ['controller' => 'CaseUserViews', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Daily Updates'), ['controller' => 'DailyUpdates', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Daily Update'), ['controller' => 'DailyUpdates', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Easycase Milestones'), ['controller' => 'EasycaseMilestones', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Easycase Milestone'), ['controller' => 'EasycaseMilestones', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Easycases'), ['controller' => 'Easycases', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Easycase'), ['controller' => 'Easycases', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Milestones'), ['controller' => 'Milestones', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Milestone'), ['controller' => 'Milestones', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Project Technologies'), ['controller' => 'ProjectTechnologies', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Project Technology'), ['controller' => 'ProjectTechnologies', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Project Users'), ['controller' => 'ProjectUsers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Project User'), ['controller' => 'ProjectUsers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Template Module Cases'), ['controller' => 'TemplateModuleCases', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Template Module Case'), ['controller' => 'TemplateModuleCases', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List User Invitations'), ['controller' => 'UserInvitations', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User Invitation'), ['controller' => 'UserInvitations', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="projects form large-9 medium-8 columns content">
    <?= $this->Form->create($project) ?>
    <fieldset>
        <legend><?= __('Edit Project') ?></legend>
        <?php
            echo $this->Form->control('uniq_id');
            echo $this->Form->control('user_id', ['options' => $users]);
            echo $this->Form->control('company_id', ['options' => $companies]);
            echo $this->Form->control('name');
            echo $this->Form->control('short_name');
            echo $this->Form->control('description');
            echo $this->Form->control('logo');
            echo $this->Form->control('project_type');
            echo $this->Form->control('default_assign');
            echo $this->Form->control('isactive');
            echo $this->Form->control('dt_created');
            echo $this->Form->control('dt_updated', ['empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
