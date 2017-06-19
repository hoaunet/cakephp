<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Companyuser[]|\Cake\Collection\CollectionInterface $companyusers
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Companyuser'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Companies'), ['controller' => 'Companies', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Company'), ['controller' => 'Companies', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="companyusers index large-9 medium-8 columns content">
    <h3><?= __('Companyusers') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('company_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('company_uniq_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_type') ?></th>
                <th scope="col"><?= $this->Paginator->sort('is_active') ?></th>
                <th scope="col"><?= $this->Paginator->sort('est_billing_amt') ?></th>
                <th scope="col"><?= $this->Paginator->sort('act_date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('billing_start_date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('billing_end_date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($companyusers as $companyuser): ?>
            <tr>
                <td><?= $this->Number->format($companyuser->id) ?></td>
                <td><?= $companyuser->has('company') ? $this->Html->link($companyuser->company->name, ['controller' => 'Companies', 'action' => 'view', $companyuser->company->id]) : '' ?></td>
                <td><?= h($companyuser->company_uniq_id) ?></td>
                <td><?= $companyuser->has('user') ? $this->Html->link($companyuser->user->name, ['controller' => 'Users', 'action' => 'view', $companyuser->user->id]) : '' ?></td>
                <td><?= $this->Number->format($companyuser->user_type) ?></td>
                <td><?= $this->Number->format($companyuser->is_active) ?></td>
                <td><?= $this->Number->format($companyuser->est_billing_amt) ?></td>
                <td><?= h($companyuser->act_date) ?></td>
                <td><?= h($companyuser->billing_start_date) ?></td>
                <td><?= h($companyuser->billing_end_date) ?></td>
                <td><?= h($companyuser->created) ?></td>
                <td><?= h($companyuser->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $companyuser->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $companyuser->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $companyuser->id], ['confirm' => __('Are you sure you want to delete # {0}?', $companyuser->id)]) ?>
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
