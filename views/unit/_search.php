<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\UnitSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="unit-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'japanese_name') ?>

    <?= $form->field($model, 'icon') ?>

    <?= $form->field($model, 'link_seesaw') ?>

    <?php // echo $form->field($model, 'link_gc') ?>

    <?php // echo $form->field($model, 'rarity') ?>

    <?php // echo $form->field($model, 'gender') ?>

    <?php // echo $form->field($model, 'dmm') ?>

    <?php // echo $form->field($model, 'nutaku') ?>

    <?php // echo $form->field($model, 'special_cg') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
