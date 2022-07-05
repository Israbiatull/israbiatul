<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Programtraining */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="programtraining-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'IdTra')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'NamaTraining')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Budget_Rupiah')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
