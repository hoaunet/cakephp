<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\User[]|\Cake\Collection\CollectionInterface $users
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Provinces'), ['controller' => 'Provinces', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Province'), ['controller' => 'Provinces', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Companyusers'), ['controller' => 'Companyusers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Companyuser'), ['controller' => 'Companyusers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Newsletters'), ['controller' => 'Newsletters', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Newsletter'), ['controller' => 'Newsletters', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Userinfos'), ['controller' => 'Userinfos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Userinfo'), ['controller' => 'Userinfos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Userlogins'), ['controller' => 'Userlogins', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Userlogin'), ['controller' => 'Userlogins', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="users index large-9 medium-8 columns content">
    <h3><?= __('Users') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('uniq_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('btprofile_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('usersubscription_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('password') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fullname') ?></th>
                <th scope="col"><?= $this->Paginator->sort('istype') ?></th>
                <th scope="col"><?= $this->Paginator->sort('photo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('isactive') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dt_last_login') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dt_last_logout') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ip') ?></th>
                <th scope="col"><?= $this->Paginator->sort('active_dashboard_tab') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
            <tr>
                <td><?= $this->Number->format($user->id) ?></td>
                <td><?= h($user->uniq_id) ?></td>
                <td><?= h($user->btprofile_id) ?></td>
                <td><?= $this->Number->format($user->usersubscription_id) ?></td>
                <td><?= h($user->email) ?></td>
                <td><?= h($user->password) ?></td>
                <td><?= h($user->fullname) ?></td>
                <td><?= $this->Number->format($user->istype) ?></td>
                <td><?= h($user->photo) ?></td>
                <td><?= $this->Number->format($user->isactive) ?></td>
                <td><?= h($user->dt_last_login) ?></td>
                <td><?= h($user->dt_last_logout) ?></td>
                <td><?= h($user->ip) ?></td>
                <td><?= $this->Number->format($user->active_dashboard_tab) ?></td>
                <td><?= h($user->created) ?></td>
                <td><?= h($user->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $user->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $user->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?>
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
