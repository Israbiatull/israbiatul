<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ProgramtrainingSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Programtrainings';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="programtraining-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Programtraining', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'IdTra',
            'NamaTraining',
            'Budget_Rupiah',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'IdTra' => $model->IdTra]);
                 }
            ],
        ],
    ]); ?>


</div>
