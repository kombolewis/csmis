<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\CsNonUonStaff $model */

$this->title = $model->non_uon_staffid;
$this->params['breadcrumbs'][] = ['label' => 'Cs Non Uon Staff', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="cs-non-uon-staff-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'non_uon_staffid' => $model->non_uon_staffid], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'non_uon_staffid' => $model->non_uon_staffid], [
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
            'non_uon_staffid',
            'surname',
            'other_names',
            'email:email',
            'org_id',
        ],
    ]) ?>

</div>
