<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Programtraining */

$this->title = 'Create Programtraining';
$this->params['breadcrumbs'][] = ['label' => 'Programtrainings', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="programtraining-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
