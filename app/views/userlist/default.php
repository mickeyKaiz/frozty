<h2>Users</h2>
<?php $basket = frozty::getInstance ('basket');?>

<ul>
    <?php foreach ($basket as $key => $value) { ?>
        <li> <?php echo $value;}?></li>
    </ul>