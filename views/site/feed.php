<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-feed">
 <?php foreach ( $data as $item): ?>
     <h3> <?= $item['title'] ?> </h3>
 <?php endforeach ?>

</div>
