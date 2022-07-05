<?php

namespace app\controllers;

use app\models\Programtraining;
use app\models\ProgramtrainingSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ProgramtrainingController implements the CRUD actions for Programtraining model.
 */
class ProgramtrainingController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all Programtraining models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new ProgramtrainingSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Programtraining model.
     * @param string $IdTra Id Tra
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($IdTra)
    {
        return $this->render('view', [
            'model' => $this->findModel($IdTra),
        ]);
    }

    /**
     * Creates a new Programtraining model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Programtraining();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'IdTra' => $model->IdTra]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Programtraining model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $IdTra Id Tra
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($IdTra)
    {
        $model = $this->findModel($IdTra);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'IdTra' => $model->IdTra]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Programtraining model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $IdTra Id Tra
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($IdTra)
    {
        $this->findModel($IdTra)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Programtraining model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $IdTra Id Tra
     * @return Programtraining the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($IdTra)
    {
        if (($model = Programtraining::findOne(['IdTra' => $IdTra])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
