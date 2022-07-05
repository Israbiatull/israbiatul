<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Programtraining */

$this->title = 'Update Programtraining: ' . $model->IdTra;
$this->params['breadcrumbs'][] = ['label' => 'Programtrainings', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->IdTra, 'url' => ['view', 'IdTra' => $model->IdTra]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="programtraining-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
