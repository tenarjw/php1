<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Osoby */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="osoby-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nazwisko')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'stanowisko')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kod')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
