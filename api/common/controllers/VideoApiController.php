<?php
namespace api\common\controllers;

use yii\rest\ActiveController;

class VideoApiController extends ActiveController
{
    public $modelClass = "api\common\models\VideoResourceApi";

    public function behaviors()
    {
        $behaviors = parent::behaviors();
        unset($behaviors['rateLimiter']);

       // $behaviors['contentNegotiator']['response'] = ['acceptParams'=> ['version'=> 'v1']];

        return $behaviors;
    }
    
}
