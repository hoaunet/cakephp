<?php
$this->layout = 'default';
?>

<div id="contents">
  <div id="checkout">
    <h4><span>Phụ nữ</span></h4>
    <table width="100%">
      <tbody>
        <tr>
          <td><p><h2>
              <?= h($article->title) ?>
              -
              (<?= $article->created->format("d/m/Y") ?>)
              </h2></p>
            <p>
              <?= h($article->body) ?>
            </p></td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
