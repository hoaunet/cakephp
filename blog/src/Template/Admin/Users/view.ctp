<?php $this->layout = "admin_template"; ?>
<!-- Content Header (Page header) -->

<section class="content-header">
  <h1> List Users<small>Control panel</small> </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">
      <?= __('Actions') ?>
    </li>
  </ol>
</section>
<div class="row " >
  <div class="col-xs-12"><span class="label label-primary" >
    <?= $this->Html->link('List Users', ['controller' => 'Users','action' => 'index'],[ 'style'=>'height:45px; color:#fff']) ?>
    </span> </div>
</div>
<section class="content">
<div class="row"> 
  <!-- left column -->
  <div class="col-md-12">
        <table width="50%" align="left">
        <tr><td><?= __('Actions') ?></td>
        <td><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id]) ?></td>
        <td><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?></td>
        <td><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?> </td>
        <td><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </td>
       </tr>
      </table>
  </div>
</div>
<div class="row"> 
  <!-- left column -->
  <div class="col-md-12"> 
    <!-- general form elements -->
    <div class="box box-primary">
      <div class="box-header">
        <h3 class="box-title">View user ID :
          <?= h($user->id) ?>
        </h3>
      </div>
      <!-- /.box-header --> 
      <!-- form start -->
      
      <div class="box-body">
        <table class="vertical-table">
          <tr>
            <th scope="row"><?= __('Username') ?></th>
            <td><?= h($user->username) ?></td>
          </tr>
          <tr>
            <th scope="row"><?= __('Password') ?></th>
            <td><?= h($user->password) ?></td>
          </tr>
          <tr>
            <th scope="row"><?= __('Role') ?></th>
            <td><?= h($user->role) ?></td>
          </tr>
          <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($user->id) ?></td>
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
      </div>
      <!-- /.box-body -->
      <div class="box-footer"> </div>
    </div>
    <!-- /.box --> 
  </div>
  <!--/.col (left) --> 
</div>

</section>
