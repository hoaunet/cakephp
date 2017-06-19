<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\User $user
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Provinces'), ['controller' => 'Provinces', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Province'), ['controller' => 'Provinces', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Companyusers'), ['controller' => 'Companyusers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Companyuser'), ['controller' => 'Companyusers', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Newsletters'), ['controller' => 'Newsletters', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Newsletter'), ['controller' => 'Newsletters', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Userinfos'), ['controller' => 'Userinfos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Userinfo'), ['controller' => 'Userinfos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Userlogins'), ['controller' => 'Userlogins', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Userlogin'), ['controller' => 'Userlogins', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="users view large-9 medium-8 columns content">
    <h3><?= h($user->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Uniq Id') ?></th>
            <td><?= h($user->uniq_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Btprofile Id') ?></th>
            <td><?= h($user->btprofile_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($user->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Password') ?></th>
            <td><?= h($user->password) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fullname') ?></th>
            <td><?= h($user->fullname) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Photo') ?></th>
            <td><?= h($user->photo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ip') ?></th>
            <td><?= h($user->ip) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($user->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Usersubscription Id') ?></th>
            <td><?= $this->Number->format($user->usersubscription_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Istype') ?></th>
            <td><?= $this->Number->format($user->istype) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Isactive') ?></th>
            <td><?= $this->Number->format($user->isactive) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Active Dashboard Tab') ?></th>
            <td><?= $this->Number->format($user->active_dashboard_tab) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dt Last Login') ?></th>
            <td><?= h($user->dt_last_login) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dt Last Logout') ?></th>
            <td><?= h($user->dt_last_logout) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($user->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($user->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Companyusers') ?></h4>
        <?php if (!empty($user->companyusers)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Company Id') ?></th>
                <th scope="col"><?= __('Company Uniq Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('User Type') ?></th>
                <th scope="col"><?= __('Is Active') ?></th>
                <th scope="col"><?= __('Est Billing Amt') ?></th>
                <th scope="col"><?= __('Act Date') ?></th>
                <th scope="col"><?= __('Billing Start Date') ?></th>
                <th scope="col"><?= __('Billing End Date') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->companyusers as $companyusers): ?>
            <tr>
                <td><?= h($companyusers->id) ?></td>
                <td><?= h($companyusers->company_id) ?></td>
                <td><?= h($companyusers->company_uniq_id) ?></td>
                <td><?= h($companyusers->user_id) ?></td>
                <td><?= h($companyusers->user_type) ?></td>
                <td><?= h($companyusers->is_active) ?></td>
                <td><?= h($companyusers->est_billing_amt) ?></td>
                <td><?= h($companyusers->act_date) ?></td>
                <td><?= h($companyusers->billing_start_date) ?></td>
                <td><?= h($companyusers->billing_end_date) ?></td>
                <td><?= h($companyusers->created) ?></td>
                <td><?= h($companyusers->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Companyusers', 'action' => 'view', $companyusers->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Companyusers', 'action' => 'edit', $companyusers->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Companyusers', 'action' => 'delete', $companyusers->id], ['confirm' => __('Are you sure you want to delete # {0}?', $companyusers->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Newsletters') ?></h4>
        <?php if (!empty($user->newsletters)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Career Id') ?></th>
                <th scope="col"><?= __('Level Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Email') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->newsletters as $newsletters): ?>
            <tr>
                <td><?= h($newsletters->id) ?></td>
                <td><?= h($newsletters->career_id) ?></td>
                <td><?= h($newsletters->level_id) ?></td>
                <td><?= h($newsletters->user_id) ?></td>
                <td><?= h($newsletters->email) ?></td>
                <td><?= h($newsletters->created) ?></td>
                <td><?= h($newsletters->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Newsletters', 'action' => 'view', $newsletters->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Newsletters', 'action' => 'edit', $newsletters->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Newsletters', 'action' => 'delete', $newsletters->id], ['confirm' => __('Are you sure you want to delete # {0}?', $newsletters->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Userinfos') ?></h4>
        <?php if (!empty($user->userinfos)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Access Token') ?></th>
                <th scope="col"><?= __('Is Google Signup') ?></th>
                <th scope="col"><?= __('Gender') ?></th>
                <th scope="col"><?= __('Birdthday') ?></th>
                <th scope="col"><?= __('Is Mariage') ?></th>
                <th scope="col"><?= __('Address') ?></th>
                <th scope="col"><?= __('Contact Phone') ?></th>
                <th scope="col"><?= __('Province Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->userinfos as $userinfos): ?>
            <tr>
                <td><?= h($userinfos->id) ?></td>
                <td><?= h($userinfos->user_id) ?></td>
                <td><?= h($userinfos->access_token) ?></td>
                <td><?= h($userinfos->is_google_signup) ?></td>
                <td><?= h($userinfos->gender) ?></td>
                <td><?= h($userinfos->birdthday) ?></td>
                <td><?= h($userinfos->is_mariage) ?></td>
                <td><?= h($userinfos->address) ?></td>
                <td><?= h($userinfos->contact_phone) ?></td>
                <td><?= h($userinfos->province_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Userinfos', 'action' => 'view', $userinfos->]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Userinfos', 'action' => 'edit', $userinfos->]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Userinfos', 'action' => 'delete', $userinfos->], ['confirm' => __('Are you sure you want to delete # {0}?', $userinfos->)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Userlogins') ?></h4>
        <?php if (!empty($user->userlogins)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->userlogins as $userlogins): ?>
            <tr>
                <td><?= h($userlogins->id) ?></td>
                <td><?= h($userlogins->user_id) ?></td>
                <td><?= h($userlogins->created) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Userlogins', 'action' => 'view', $userlogins->]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Userlogins', 'action' => 'edit', $userlogins->]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Userlogins', 'action' => 'delete', $userlogins->], ['confirm' => __('Are you sure you want to delete # {0}?', $userlogins->)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
