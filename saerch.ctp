<h1><?php echo $this->pageTitle = 'Advanced Game Search'; ?></h1>
<?php
$html->addCrumb($this->pageTitle);
echo $form->create('Search', array('action' => 'advanced'));

if (isset($formData) && !empty($formData)) {
  $form->data = $formData;
}

echo $form->input('game_category_id', array('label' => 'Category:', 'options' => $searchCategories, 'empty' => 'All Categories'));
echo $form->input('keywords', array('label' => 'Text from game name, description or instructions:'));
echo $form->input('tags', array('label' => 'Is tagged with (separate tags by comma):'));
$orderOptions = array(
  'Game.name' => 'Name',
  'GameCategory.name' => 'Game Category',
  'Game.avg_rating' => 'Game Rating',
  'Game.clicks' => 'Number of Plays',
);
echo $form->input('order_by', array('label' => 'Order Results By:', 'options' => $orderOptions));
echo $form->input('order_dir', array('label' => 'Direction:', 'options' => array('asc' => 'Ascending', 'desc' => 'Descending')));
?>
<div class="clear"></div>
<?php echo $form->end('Search', array('action' => 'search'))?>

<?php if (isset($games)) : ?>
  <div class="clear"></div>

  <?php if (!empty($games)) : ?>
    <?php echo $this->element('../games/list', array('games' => $games, 'hilite' => $query))?>
    <div class="clear"></div>
    <?php echo $this->element('paging', array('model' => 'GameCategoriesGame'))?>
  <?php else : ?>
    <p class="error-message">Sorry, your search returned no results</p>
  <?php endif; ?>
<?php endif; ?>