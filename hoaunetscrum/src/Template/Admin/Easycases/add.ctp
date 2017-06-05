<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Easycases'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Projects'), ['controller' => 'Projects', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Project'), ['controller' => 'Projects', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Types'), ['controller' => 'Types', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Type'), ['controller' => 'Types', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Archives'), ['controller' => 'Archives', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Archive'), ['controller' => 'Archives', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Case Actions'), ['controller' => 'CaseActions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Case Action'), ['controller' => 'CaseActions', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Case Activities'), ['controller' => 'CaseActivities', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Case Activity'), ['controller' => 'CaseActivities', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Case File Drives'), ['controller' => 'CaseFileDrives', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Case File Drive'), ['controller' => 'CaseFileDrives', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Case Files'), ['controller' => 'CaseFiles', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Case File'), ['controller' => 'CaseFiles', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Case Recents'), ['controller' => 'CaseRecents', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Case Recent'), ['controller' => 'CaseRecents', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Case User Emails'), ['controller' => 'CaseUserEmails', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Case User Email'), ['controller' => 'CaseUserEmails', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Case User Views'), ['controller' => 'CaseUserViews', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Case User View'), ['controller' => 'CaseUserViews', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Easycase Milestones'), ['controller' => 'EasycaseMilestones', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Easycase Milestone'), ['controller' => 'EasycaseMilestones', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="easycases form large-9 medium-8 columns content">
    <?= $this->Form->create($easycase) ?>
    <fieldset>
        <legend><?= __('Add Easycase') ?></legend>
        <?php
            echo $this->Form->control('uniq_id');
            echo $this->Form->control('case_no');
            echo $this->Form->control('case_count');
            echo $this->Form->control('project_id', ['options' => $projects]);
            echo $this->Form->control('user_id', ['options' => $users]);
            echo $this->Form->control('updated_by');
            echo $this->Form->control('type_id', ['options' => $types]);
            echo $this->Form->control('priority');
            echo $this->Form->control('title');
            echo $this->Form->control('message');
            echo $this->Form->control('estimated_hours');
            echo $this->Form->control('hours');
            echo $this->Form->control('completed_task');
            echo $this->Form->control('assign_to');
            echo $this->Form->control('due_date', ['empty' => true]);
            echo $this->Form->control('istype');
            echo $this->Form->control('format');
            echo $this->Form->control('status');
            echo $this->Form->control('legend');
            echo $this->Form->control('isactive');
            echo $this->Form->control('dt_created');
            echo $this->Form->control('actual_dt_created');
            echo $this->Form->control('reply_type');
            echo $this->Form->control('is_chrome_extension');
            echo $this->Form->control('from_email');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
