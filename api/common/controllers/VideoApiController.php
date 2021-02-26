<?php
namespace api\common\controllers;

use yii\rest\ActiveController;
use yii\rest\Controller;

class VideoApiController extends  ActiveController
{
    public $modelClass = "api\common\models\VideoResourceApi";
    public $serializer = [
        'class' => 'yii\rest\Serializer',
        'collectionEnvelope' => 'items',
    ];

    public function actions()
    {
        $actions = parent::actions();
        unset($actions["create"], $actions["delete"]);
        return $actions;
    }

    public function behaviors()
    {
        $behaviors = parent::behaviors();
        unset($behaviors['rateLimiter']);

       // $behaviors['contentNegotiator']['response'] = ['acceptParams'=> ['version'=> 'v1']];

        return $behaviors;
    }
    
}
