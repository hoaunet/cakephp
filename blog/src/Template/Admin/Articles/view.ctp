<!-- File: src/Template/Articles/view.ctp -->
<?php $this->layout = "admin_template";?>
<!-- Content Header (Page header) -->

<section class="content-header">
  <h1> Blog articles <small>Control panel</small> </h1>
  <ol class="breadcrumb">
    <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
     <li><?php echo $this->Html->link('Articles',['controller' => 'Articles', 'action' => 'index', '_full' => true]);?></li>
    <li class="active">View articles #<?=$article->id?></li>
  </ol>
</section>

<section class="content">
<h1><?= h($article->title) ?></h1>
<p><?= h($article->body) ?></p>
<p><small>Created: <?= $article->created->format(DATE_RFC850) ?></small></p>

</section>