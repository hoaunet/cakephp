<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\School $school
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit School'), ['action' => 'edit', $school->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete School'), ['action' => 'delete', $school->id], ['confirm' => __('Are you sure you want to delete # {0}?', $school->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Schools'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New School'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Provinces'), ['controller' => 'Provinces', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Province'), ['controller' => 'Provinces', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Resumes'), ['controller' => 'Resumes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Resume'), ['controller' => 'Resumes', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="schools view large-9 medium-8 columns content">
    <h3><?= h($school->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('School Name') ?></th>
            <td><?= h($school->school_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('School Address') ?></th>
            <td><?= h($school->school_address) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('School Type') ?></th>
            <td><?= h($school->school_type) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('School Website') ?></th>
            <td><?= h($school->school_website) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Province') ?></th>
            <td><?= $school->has('province') ? $this->Html->link($school->province->id, ['controller' => 'Provinces', 'action' => 'view', $school->province->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($school->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($school->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($school->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Resumes') ?></h4>
        <?php if (!empty($school->resumes)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Career Id') ?></th>
                <th scope="col"><?= __('Degree Id') ?></th>
                <th scope="col"><?= __('Level Id') ?></th>
                <th scope="col"><?= __('Salary Id') ?></th>
                <th scope="col"><?= __('School Id') ?></th>
                <th scope="col"><?= __('Experience') ?></th>
                <th scope="col"><?= __('Address') ?></th>
                <th scope="col"><?= __('Uploadcv') ?></th>
                <th scope="col"><?= __('Lastcompany') ?></th>
                <th scope="col"><?= __('Summary') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($school->resumes as $resumes): ?>
            <tr>
                <td><?= h($resumes->id) ?></td>
                <td><?= h($resumes->user_id) ?></td>
                <td><?= h($resumes->career_id) ?></td>
                <td><?= h($resumes->degree_id) ?></td>
                <td><?= h($resumes->level_id) ?></td>
                <td><?= h($resumes->salary_id) ?></td>
                <td><?= h($resumes->school_id) ?></td>
                <td><?= h($resumes->experience) ?></td>
                <td><?= h($resumes->address) ?></td>
                <td><?= h($resumes->uploadcv) ?></td>
                <td><?= h($resumes->lastcompany) ?></td>
                <td><?= h($resumes->summary) ?></td>
                <td><?= h($resumes->created) ?></td>
                <td><?= h($resumes->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Resumes', 'action' => 'view', $resumes->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Resumes', 'action' => 'edit', $resumes->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Resumes', 'action' => 'delete', $resumes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $resumes->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
