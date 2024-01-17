<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\CsRequiredDocument $model */

$this->title = $model->document_id;
$this->params['breadcrumbs'][] = ['label' => 'Cs Required Documents', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="cs-required-document-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'document_id' => $model->document_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'document_id' => $model->document_id], [
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
            'document_id',
            'document_name',
        ],
    ]) ?>

</div>
