<?php
namespace api\common\controllers;

use yii\rest\ActiveController;

class VideoApiController extends ActiveController
{
    public $modelClass = "api\common\models\VideoResourceApi";

    public function behaviors()
    {
        $behaviors = parent::behaviors();
        $behaviors['rateLimiter']['enableRateLimitHeaders'] = true;

        $behaviors['contentNegotiator']['response'] = ['acceptParams'=> ['version'=> 'v12']];

        return $behaviors;
    }
    
}
