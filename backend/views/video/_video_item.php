<?php 
/** @var $model \common\models\Video */

use yii\helpers\StringHelper;
?> 

<div class="media">
  <img src="..." class="mr-3" alt="...">
  <div class="media-body">
    <h5 class="mt-0"><?=$model->title; ?>/h5>
    <?php StringHelper::truncateWords($model->description, 10); ?>
  </div>
</div>