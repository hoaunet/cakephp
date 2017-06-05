<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Type Company'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Companies'), ['controller' => 'Companies', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Company'), ['controller' => 'Companies', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Types'), ['controller' => 'Types', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Type'), ['controller' => 'Types', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="typeCompanies index large-9 medium-8 columns content">
    <h3><?= __('Type Companies') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('company_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('type_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($typeCompanies as $typeCompany): ?>
            <tr>
                <td><?= $this->Number->format($typeCompany->id) ?></td>
                <td><?= $typeCompany->has('company') ? $this->Html->link($typeCompany->company->name, ['controller' => 'Companies', 'action' => 'view', $typeCompany->company->id]) : '' ?></td>
                <td><?= $typeCompany->has('type') ? $this->Html->link($typeCompany->type->name, ['controller' => 'Types', 'action' => 'view', $typeCompany->type->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $typeCompany->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $typeCompany->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $typeCompany->id], ['confirm' => __('Are you sure you want to delete # {0}?', $typeCompany->id)]) ?>
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
