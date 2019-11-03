<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ResItem */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="res-item-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'res_type_id')->dropDownList(\app\models\ResType::getAvailableTypesAsArray(),['style'=>'width:200px'])->label('Content Type') ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'image')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rss')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'url')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'created_by')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-rect-xl']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
