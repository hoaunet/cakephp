<!-- File: src/Template/Articles/view.ctp -->
<?php $this->layout = "admin_template";
	  echo $this->Html->css('datatables/dataTables.bootstrap.css');
?>
<!-- Content Header (Page header) -->

<section class="content-header">
  <h1> <?= __('Tin tức') ?>  <small>Control panel</small> </h1>
  <ol class="breadcrumb">
    <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
     <li><?php echo $this->Html->link('Articles',['controller' => 'Articles', 'action' => 'index', '_full' => true]);?></li>
    <li class="active"><?= __('Xem Tin tức') ?> #<?=$article->id?></li>
  </ol>
</section>

<section class="content">
<h1><?= h($article->title) ?></h1>
<p><small>Ngày tạo: <?php //echo $article->created->format(DATE_RFC850); ?></small></p>
<p><small>Thể loại: <?php echo $this->Html->link($article->category->name,['controller' => 'Categories', 'action' => 'view', $article->category->id]);?></small></p>
<p><?php echo (!empty($article->articles_image))?$this->Html->image($article->articles_image, ["alt" => $article->title,"height"=>'100px',"width"=>'100px']):"";?></p>
<p><?= h($article->body) ?></p>
</section>