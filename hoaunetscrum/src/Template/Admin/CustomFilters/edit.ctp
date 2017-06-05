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
                ['action' => 'delete', $customFilter->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $customFilter->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Custom Filters'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Companies'), ['controller' => 'Companies', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Company'), ['controller' => 'Companies', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="customFilters form large-9 medium-8 columns content">
    <?= $this->Form->create($customFilter) ?>
    <fieldset>
        <legend><?= __('Edit Custom Filter') ?></legend>
        <?php
            echo $this->Form->control('project_uniq_id');
            echo $this->Form->control('company_id', ['options' => $companies]);
            echo $this->Form->control('user_id', ['options' => $users]);
            echo $this->Form->control('filter_name');
            echo $this->Form->control('filter_date');
            echo $this->Form->control('filter_duedate', ['empty' => true]);
            echo $this->Form->control('filter_type_id');
            echo $this->Form->control('filter_status');
            echo $this->Form->control('filter_member_id');
            echo $this->Form->control('filter_priority');
            echo $this->Form->control('filter_assignto');
            echo $this->Form->control('filter_search');
            echo $this->Form->control('dt_created');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
