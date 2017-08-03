<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Unit */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="unit-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'japanese_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'icon')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'link_seesaw')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'link_gc')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rarity')->dropDownList([
        'black' => 'Black',
        'sapphire' => 'Sapphire',
        'platinum' => 'Platinum',
        'gold' => 'Gold',
        'silver' => 'Silver',
        'bronze' => 'Bronze',
        'iron' => 'Iron',
    ], ['prompt' => '']) ?>

    <?= $form->field($model, 'gender')->dropDownList(['female' => 'Female', 'male' => 'Male',], ['prompt' => '']) ?>

    <?= $form->field($model, 'dmm')->textInput() ?>

    <?= $form->field($model, 'nutaku')->textInput() ?>

    <?= $form->field($model, 'special_cg')->textInput() ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update',
            ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
