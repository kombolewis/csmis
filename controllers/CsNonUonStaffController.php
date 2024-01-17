<?php

namespace app\controllers;

use app\models\CsNonUonStaff;
use app\models\search\CsNonUonStaffSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * CsNonUonStaffController implements the CRUD actions for CsNonUonStaff model.
 */
class CsNonUonStaffController extends Controller
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
     * Lists all CsNonUonStaff models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new CsNonUonStaffSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single CsNonUonStaff model.
     * @param int $non_uon_staffid Non Uon Staffid
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($non_uon_staffid)
    {
        return $this->render('view', [
            'model' => $this->findModel($non_uon_staffid),
        ]);
    }

    /**
     * Creates a new CsNonUonStaff model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new CsNonUonStaff();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'non_uon_staffid' => $model->non_uon_staffid]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing CsNonUonStaff model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $non_uon_staffid Non Uon Staffid
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($non_uon_staffid)
    {
        $model = $this->findModel($non_uon_staffid);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'non_uon_staffid' => $model->non_uon_staffid]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing CsNonUonStaff model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $non_uon_staffid Non Uon Staffid
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($non_uon_staffid)
    {
        $this->findModel($non_uon_staffid)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the CsNonUonStaff model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $non_uon_staffid Non Uon Staffid
     * @return CsNonUonStaff the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($non_uon_staffid)
    {
        if (($model = CsNonUonStaff::findOne(['non_uon_staffid' => $non_uon_staffid])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
