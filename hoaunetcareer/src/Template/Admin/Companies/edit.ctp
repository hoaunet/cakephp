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
        <li><?= $this->Html->link(__('List Companyusers'), ['controller' => 'Companyusers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Companyuser'), ['controller' => 'Companyusers', 'action' => 'add']) ?></li>
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
            echo $this->Form->control('subscription_id');
            echo $this->Form->control('logo');
            echo $this->Form->control('website');
            echo $this->Form->control('address');
            echo $this->Form->control('contact_phone');
            echo $this->Form->control('masothue');
            echo $this->Form->control('descriptions');
            echo $this->Form->control('is_beta');
            echo $this->Form->control('is_active');
            echo $this->Form->control('is_deactivated');
            echo $this->Form->control('twitted');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
