<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Country'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="countries index large-9 medium-8 columns content">
    <h3><?= __('Countries') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('countries_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('countries_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('countries_iso_code_2') ?></th>
                <th scope="col"><?= $this->Paginator->sort('countries_iso_code_3') ?></th>
                <th scope="col"><?= $this->Paginator->sort('address_format_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($countries as $country): ?>
            <tr>
                <td><?= $country->has('country') ? $this->Html->link($country->country->countries_id, ['controller' => 'Countries', 'action' => 'view', $country->country->countries_id]) : '' ?></td>
                <td><?= h($country->countries_name) ?></td>
                <td><?= h($country->countries_iso_code_2) ?></td>
                <td><?= h($country->countries_iso_code_3) ?></td>
                <td><?= $this->Number->format($country->address_format_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $country->countries_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $country->countries_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $country->countries_id], ['confirm' => __('Are you sure you want to delete # {0}?', $country->countries_id)]) ?>
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
