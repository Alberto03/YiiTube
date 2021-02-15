<?php
namespace api\common\models;

use yii\db\ActiveRecord;
use yii\filters\RateLimitInterface;

class VideoResourceApi extends ActiveRecord implements RateLimitInterface
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


    public function getRateLimit($request, $action)
    {
        //var_dump($this->reateLimit); die();

        return [1/*$this->rateLimit*/, 600];
    }

    public function loadAllowance($request, $action)
    {
        return [$this->allowance, $this->allowance_update_at];
    }

    public function saveAllowance($request, $action, $allowance, $timestamp)
    {
        $this->allowance = $allowance;
        $this->allowance_update_at = $timestamp;
        $this->save();   
    }

}