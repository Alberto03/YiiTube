<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\i18n\Formatter;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Videos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="video-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Video', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            [
                'attribute' => 'title',
                'content' => function($model){
                    return $this->render('_video_item', ['model'=>$model]);
                }
            ],
            [
                'attribute' => 'status',
                'content' => function($model){
                    return $model->getStatusLabel()[$model->status];
                }
            ],
            'title',
            'tags',
            'status',
            //'has_thumbnail',
            //'video_name',
            [
                'attribute'=> 'created_at',
                //'format' => ['date', 'php:Y-m-d'],
                'content' => function($data){
                  return Yii::$app->formatter->asDateTime($data->created_at, 'long');
                }  , 
            ],
            'updated_at:datetime',
            //'created_by',

            [
                'class' => 'yii\grid\ActionColumn',
                'buttons' => [
                    'delete' => function ($url){
                        return Html::a('Delete', $url, [
                            'data-method' => 'POST',
                            'data-confirm' => 'Are you sure?'
                        ]);
                    }
                ],
                'visibleButtons' => ['delete'],
            ],
        ],
    ]); ?>


</div>
