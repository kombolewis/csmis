<?php

use app\models\CsRequiredDocument;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\search\CsRequiredDocumentSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Cs Required Documents';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cs-required-document-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Cs Required Document', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'document_id',
            'document_name',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, CsRequiredDocument $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'document_id' => $model->document_id]);
                 }
            ],
        ],
    ]); ?>


</div>
