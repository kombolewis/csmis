<?php

namespace app\controllers;

use app\models\CsRequiredDocument;
use app\models\search\CsRequiredDocumentSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * CsRequiredDocumentController implements the CRUD actions for CsRequiredDocument model.
 */
class CsRequiredDocumentController extends Controller
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
     * Lists all CsRequiredDocument models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new CsRequiredDocumentSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single CsRequiredDocument model.
     * @param int $document_id Document ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($document_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($document_id),
        ]);
    }

    /**
     * Creates a new CsRequiredDocument model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new CsRequiredDocument();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'document_id' => $model->document_id]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing CsRequiredDocument model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $document_id Document ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($document_id)
    {
        $model = $this->findModel($document_id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'document_id' => $model->document_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing CsRequiredDocument model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $document_id Document ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($document_id)
    {
        $this->findModel($document_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the CsRequiredDocument model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $document_id Document ID
     * @return CsRequiredDocument the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($document_id)
    {
        if (($model = CsRequiredDocument::findOne(['document_id' => $document_id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
