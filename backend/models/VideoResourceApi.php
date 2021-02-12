<?php
namespace backend\models;


class VideoResourceApi extends \yii\db\ActiveRecord
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