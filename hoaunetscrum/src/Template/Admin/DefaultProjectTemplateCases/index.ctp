<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Default Project Template Case'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Companies'), ['controller' => 'Companies', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Company'), ['controller' => 'Companies', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="defaultProjectTemplateCases index large-9 medium-8 columns content">
    <h3><?= __('Default Project Template Cases') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('company_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('template_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($defaultProjectTemplateCases as $defaultProjectTemplateCase): ?>
            <tr>
                <td><?= $this->Number->format($defaultProjectTemplateCase->id) ?></td>
                <td><?= $defaultProjectTemplateCase->has('user') ? $this->Html->link($defaultProjectTemplateCase->user->name, ['controller' => 'Users', 'action' => 'view', $defaultProjectTemplateCase->user->id]) : '' ?></td>
                <td><?= $defaultProjectTemplateCase->has('company') ? $this->Html->link($defaultProjectTemplateCase->company->name, ['controller' => 'Companies', 'action' => 'view', $defaultProjectTemplateCase->company->id]) : '' ?></td>
                <td><?= $this->Number->format($defaultProjectTemplateCase->template_id) ?></td>
                <td><?= h($defaultProjectTemplateCase->created) ?></td>
                <td><?= h($defaultProjectTemplateCase->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $defaultProjectTemplateCase->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $defaultProjectTemplateCase->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $defaultProjectTemplateCase->id], ['confirm' => __('Are you sure you want to delete # {0}?', $defaultProjectTemplateCase->id)]) ?>
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
