<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;
use yii\bootstrap4\Html as Bootstrap4Html;
use yii\web\Link;

/* @var $this yii\web\View */
/* @var $model common\models\Video */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="video-form">

    <?php $form = ActiveForm::begin([
        'options' => ['enctype' => 'multipart/form-data']
    ]); ?>

    <div class="row">
        <div class="col-sm-8">
            <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

            <div class="form-group">
                <label><?php echo $model->getAttributeLabel('thumbnail');?></label>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="thumbnail" 
                    aria-describedby="inputGroupFileAddon01" name="thumbnail">
                    <label class="custom-file-label" for="thumbnail">Choose file</label>
                </div>
            </div>

            <?= $form->field($model, 'tags')->textInput(['maxlength' => true]) ?>
        </div> 

        <div class="col-sm-4">
            <div class="embed-responsive embed-responsive-16by9 mb-3">
                <video  class="embed-responsive-item" 
                        poster = "<?=$model->thumbnailLink; ?>"
                        src="<?=$model->videoLink;?>" 
                        controls controlslist='nofullscreen' ></video>
            </div>
            
            <div class="mb-3">
                <div class="text-muted"> Video Link</div>
                <a href="<?=$model->getVideoLink()?>">
                    Open Video
                </a>
            </div>

            <div class="mb-3"> 
                <div class="text-muted"> Video Name</div>
                <?=$model->video_name;?>
            </div>

            <?= $form->field($model, 'status')->dropDownList($model->statusLabel) ?>
        </div>

    </div>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>
    <div class="row"></div>

    <?php ActiveForm::end(); ?>

</div>