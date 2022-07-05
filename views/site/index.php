<?php

/** @var yii\web\View $this */
use yii\bootstrap4\ActiveForm;
use yii\bootstrap4\Html;
use yii\captcha\Captcha;

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <?php $form = ActiveForm::begin(['id' => "contact-form"
        ]); 
  ?>
    <?= $form->field($model, 'number')->textInput(['class'=>'effect-4'])?>
    <?= Html::submitButton('CEK', ['number'], ['class' => 'btn btn-primary']) ?>
    <br>
    <?php if( $is_check ) : ?>
      <?= $is_prime ? 'BILANGAN PRIMA' : 'BUKAN BILANGAN PRIMA' ?>
    <?php endif; ?>
    <?php ActiveForm::end(); ?>
</div>
