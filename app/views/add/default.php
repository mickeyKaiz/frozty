<?php
$basket = frozty::getInstance('basket');
?>
<div style="text-align:center">
    <h2> This is addition!</h2>
    <p>You have Given numbers <?php echo $basket->get('a');?> and <?php echo $basket->get('b');?></p>
    <p><b>The Sum is <?php echo $basket->get('c');?></b></p>
</div>
