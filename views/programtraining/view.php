<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Programtraining */

$this->title = $model->IdTra;
$this->params['breadcrumbs'][] = ['label' => 'Programtrainings', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="programtraining-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'IdTra' => $model->IdTra], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'IdTra' => $model->IdTra], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'IdTra',
            'NamaTraining',
            'Budget_Rupiah',
        ],
    ]) ?>

</div>
