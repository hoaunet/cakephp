<?php
$this->layout = 'default'; 
?>

<div id="checkout">
  <h4><span><?php echo (!empty($category->name))?$category->name:'';?></span></h4>
  <table width="100%">
    <tbody>
      <?php foreach($category->articles as $val):?>
      <tr>
        <td><b><?php echo $this->Html->link(h($val->title),['controller' => 'Articles', 'action' => 'detail', $val->id]);?></b>
            <br /><?php if(!empty($val->articles_image)):
		  		    		echo $this->Html->image($val->articles_image, ["alt" => $val->title,"height"=>'100px',"width"=>'100px']);
						endif;
		     	?><?=$val->short_desc?>
          </td>
      </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>

