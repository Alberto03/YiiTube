<?php
namespace api\common\models;

use yii\db\ActiveRecord;
//use yii\filters\RateLimitInterface;

class VideoResourceApi extends ActiveRecord //implements RateLimitInterface
{
    public static function tableName()
    {
        return '{{%video}}';
    }

    public function fields()
    {
        return[
            'title',
            'description',
            'tags',
            'video_name',
            'status'
        ];
    }
}