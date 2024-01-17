<?php

use app\models\CsNonUonStaff;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\search\CsNonUonStaffSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Cs Non Uon Staff';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cs-non-uon-staff-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Cs Non Uon Staff', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'non_uon_staffid',
            'surname',
            'other_names',
            'email:email',
            'org_id',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, CsNonUonStaff $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'non_uon_staffid' => $model->non_uon_staffid]);
                 }
            ],
        ],
    ]); ?>


</div>
