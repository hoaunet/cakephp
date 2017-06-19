<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Province $province
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Province'), ['action' => 'edit', $province->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Province'), ['action' => 'delete', $province->id], ['confirm' => __('Are you sure you want to delete # {0}?', $province->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Provinces'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Province'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Parent Provinces'), ['controller' => 'Provinces', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Parent Province'), ['controller' => 'Provinces', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Countries'), ['controller' => 'Countries', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Country'), ['controller' => 'Countries', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Schools'), ['controller' => 'Schools', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New School'), ['controller' => 'Schools', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="provinces view large-9 medium-8 columns content">
    <h3><?= h($province->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Province Name') ?></th>
            <td><?= h($province->province_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Parent Province') ?></th>
            <td><?= $province->has('parent_province') ? $this->Html->link($province->parent_province->id, ['controller' => 'Provinces', 'action' => 'view', $province->parent_province->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Country') ?></th>
            <td><?= $province->has('country') ? $this->Html->link($province->country->id, ['controller' => 'Countries', 'action' => 'view', $province->country->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($province->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Province Type') ?></th>
            <td><?= $this->Number->format($province->province_type) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Province Code') ?></th>
            <td><?= $this->Number->format($province->province_code) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $this->Number->format($province->status) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Provinces') ?></h4>
        <?php if (!empty($province->child_provinces)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Province Name') ?></th>
                <th scope="col"><?= __('Province Type') ?></th>
                <th scope="col"><?= __('Province Code') ?></th>
                <th scope="col"><?= __('Parent Id') ?></th>
                <th scope="col"><?= __('Country Id') ?></th>
                <th scope="col"><?= __('Status') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($province->child_provinces as $childProvinces): ?>
            <tr>
                <td><?= h($childProvinces->id) ?></td>
                <td><?= h($childProvinces->province_name) ?></td>
                <td><?= h($childProvinces->province_type) ?></td>
                <td><?= h($childProvinces->province_code) ?></td>
                <td><?= h($childProvinces->parent_id) ?></td>
                <td><?= h($childProvinces->country_id) ?></td>
                <td><?= h($childProvinces->status) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Provinces', 'action' => 'view', $childProvinces->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Provinces', 'action' => 'edit', $childProvinces->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Provinces', 'action' => 'delete', $childProvinces->id], ['confirm' => __('Are you sure you want to delete # {0}?', $childProvinces->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Schools') ?></h4>
        <?php if (!empty($province->schools)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('School Name') ?></th>
                <th scope="col"><?= __('School Address') ?></th>
                <th scope="col"><?= __('School Type') ?></th>
                <th scope="col"><?= __('School Website') ?></th>
                <th scope="col"><?= __('Province Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($province->schools as $schools): ?>
            <tr>
                <td><?= h($schools->id) ?></td>
                <td><?= h($schools->school_name) ?></td>
                <td><?= h($schools->school_address) ?></td>
                <td><?= h($schools->school_type) ?></td>
                <td><?= h($schools->school_website) ?></td>
                <td><?= h($schools->province_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Schools', 'action' => 'view', $schools->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Schools', 'action' => 'edit', $schools->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Schools', 'action' => 'delete', $schools->id], ['confirm' => __('Are you sure you want to delete # {0}?', $schools->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Users') ?></h4>
        <?php if (!empty($province->users)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Uniq Id') ?></th>
                <th scope="col"><?= __('Btprofile Id') ?></th>
                <th scope="col"><?= __('Usersubscription Id') ?></th>
                <th scope="col"><?= __('Credit Cardtoken') ?></th>
                <th scope="col"><?= __('Card Number') ?></th>
                <th scope="col"><?= __('Expiry Date') ?></th>
                <th scope="col"><?= __('Email') ?></th>
                <th scope="col"><?= __('Password') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Is Beta') ?></th>
                <th scope="col"><?= __('Last Name') ?></th>
                <th scope="col"><?= __('Short Name') ?></th>
                <th scope="col"><?= __('Istype') ?></th>
                <th scope="col"><?= __('Photo') ?></th>
                <th scope="col"><?= __('Photo Reset') ?></th>
                <th scope="col"><?= __('Isactive') ?></th>
                <th scope="col"><?= __('Timezone Id') ?></th>
                <th scope="col"><?= __('Isemail') ?></th>
                <th scope="col"><?= __('Is Agree') ?></th>
                <th scope="col"><?= __('Usersub Type') ?></th>
                <th scope="col"><?= __('Est Billing Amount') ?></th>
                <th scope="col"><?= __('Dt Created') ?></th>
                <th scope="col"><?= __('Dt Updated') ?></th>
                <th scope="col"><?= __('Dt Last Login') ?></th>
                <th scope="col"><?= __('Dt Last Logout') ?></th>
                <th scope="col"><?= __('Query String') ?></th>
                <th scope="col"><?= __('Update Email') ?></th>
                <th scope="col"><?= __('Update Random') ?></th>
                <th scope="col"><?= __('Gaccess Token') ?></th>
                <th scope="col"><?= __('Ip') ?></th>
                <th scope="col"><?= __('Sig') ?></th>
                <th scope="col"><?= __('Desk Notify') ?></th>
                <th scope="col"><?= __('Active Dashboard Tab') ?></th>
                <th scope="col"><?= __('Is Moderator') ?></th>
                <th scope="col"><?= __('Show Default Inner') ?></th>
                <th scope="col"><?= __('Province Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($province->users as $users): ?>
            <tr>
                <td><?= h($users->id) ?></td>
                <td><?= h($users->uniq_id) ?></td>
                <td><?= h($users->btprofile_id) ?></td>
                <td><?= h($users->usersubscription_id) ?></td>
                <td><?= h($users->credit_cardtoken) ?></td>
                <td><?= h($users->card_number) ?></td>
                <td><?= h($users->expiry_date) ?></td>
                <td><?= h($users->email) ?></td>
                <td><?= h($users->password) ?></td>
                <td><?= h($users->name) ?></td>
                <td><?= h($users->is_beta) ?></td>
                <td><?= h($users->last_name) ?></td>
                <td><?= h($users->short_name) ?></td>
                <td><?= h($users->istype) ?></td>
                <td><?= h($users->photo) ?></td>
                <td><?= h($users->photo_reset) ?></td>
                <td><?= h($users->isactive) ?></td>
                <td><?= h($users->timezone_id) ?></td>
                <td><?= h($users->isemail) ?></td>
                <td><?= h($users->is_agree) ?></td>
                <td><?= h($users->usersub_type) ?></td>
                <td><?= h($users->est_billing_amount) ?></td>
                <td><?= h($users->dt_created) ?></td>
                <td><?= h($users->dt_updated) ?></td>
                <td><?= h($users->dt_last_login) ?></td>
                <td><?= h($users->dt_last_logout) ?></td>
                <td><?= h($users->query_string) ?></td>
                <td><?= h($users->update_email) ?></td>
                <td><?= h($users->update_random) ?></td>
                <td><?= h($users->gaccess_token) ?></td>
                <td><?= h($users->ip) ?></td>
                <td><?= h($users->sig) ?></td>
                <td><?= h($users->desk_notify) ?></td>
                <td><?= h($users->active_dashboard_tab) ?></td>
                <td><?= h($users->is_moderator) ?></td>
                <td><?= h($users->show_default_inner) ?></td>
                <td><?= h($users->province_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Users', 'action' => 'view', $users->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Users', 'action' => 'edit', $users->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Users', 'action' => 'delete', $users->id], ['confirm' => __('Are you sure you want to delete # {0}?', $users->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
