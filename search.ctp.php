<?php
$short = isset($short) ? $short : false;
$class = $short ? ' short' : '';
?>
<div class="games-list">
  <?php foreach ($games as $game) : ?>
    <div class="game<?php echo $class ?>">
      <div class="game-image">
        <?php echo $this->element('game_image', array('game' => $game, 'thumb' => true))?>
      </div>
      <div class="game-descr">
        <?php
        $name = $game['Game']['name'];
        if (isset($hilite)) {
          $name = $text->highlight($game['Game']['name'], $hilite);
        }
        echo $html->link($name, Game::url($game), null, false, false);
        ?>
        <?php if (!$short) : ?>
          
<?php echo $game['Game']['short_desc'] ?>

          <div class="plays"><span>Plays:</span> <?php echo $game['Game']['game_playing_count']?></div>
        <?php endif; ?>
      </div>
    </div>
  <?php endforeach; ?>
</div>
?>
<?php
if (!isset($model) || $paginator->params['paging'][$model]['pageCount'] > 1) : ?>
<div class="paging">
  <?php echo $paginator->prev('&laquo; Previous', array('escape' => false, 'class' => 'prev'), null, array('class'=>'disabled'));?>
  <?php echo $paginator->numbers();?>
  <?php echo $paginator->next('Next &raquo;', array('escape' => false, 'class' => 'next'), null, array('class'=>'disabled'));?>
</div>
<?php endif; ?>