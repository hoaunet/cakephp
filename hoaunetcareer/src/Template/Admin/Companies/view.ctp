<?php $this->layout = "admin_template";
	  echo $this->Html->css('datatables/dataTables.bootstrap.css');
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Company'), ['action' => 'edit', $company->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Company'), ['action' => 'delete', $company->id], ['confirm' => __('Are you sure you want to delete # {0}?', $company->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Companies'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Company'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Companyusers'), ['controller' => 'Companyusers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Companyuser'), ['controller' => 'Companyusers', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="companies view large-9 medium-8 columns content">
    <h3><?= h($company->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($company->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Seo Url') ?></th>
            <td><?= h($company->seo_url) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Logo') ?></th>
            <td><?= h($company->logo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Website') ?></th>
            <td><?= h($company->website) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Address') ?></th>
            <td><?= h($company->address) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Contact Phone') ?></th>
            <td><?= h($company->contact_phone) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Masothue') ?></th>
            <td><?= h($company->masothue) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($company->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Subscription Id') ?></th>
            <td><?= $this->Number->format($company->subscription_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Is Beta') ?></th>
            <td><?= $this->Number->format($company->is_beta) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Is Active') ?></th>
            <td><?= $this->Number->format($company->is_active) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Is Deactivated') ?></th>
            <td><?= $this->Number->format($company->is_deactivated) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Twitted') ?></th>
            <td><?= $this->Number->format($company->twitted) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($company->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($company->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Uniq Id') ?></h4>
        <?= $this->Text->autoParagraph(h($company->uniq_id)); ?>
    </div>
    <div class="row">
        <h4><?= __('Descriptions') ?></h4>
        <?= $this->Text->autoParagraph(h($company->descriptions)); ?>
    </div>
    <div class="related">
        <h4><?= __('Nhân viên') ?></h4>
        <?php if (!empty($company->companyusers)): ?>
        <table id="example1" class="table table-bordered table-hover">
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
            <?php foreach ($company->companyusers as $companyusers): ?>
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
</div>
<?php echo $this->Html->script('plugins/datatables/jquery.dataTables.js');//DATA TABES SCRIPT
	  echo $this->Html->script('plugins/datatables/dataTables.bootstrap.js');//DATA TABES SCRIPT

?><script type="text/javascript">
            $(function() {
                $("#example1").dataTable();
               
            });
        </script>
