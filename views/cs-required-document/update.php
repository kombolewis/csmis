<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\CsRequiredDocument $model */

$this->title = 'Update Cs Required Document: ' . $model->document_id;
$this->params['breadcrumbs'][] = ['label' => 'Cs Required Documents', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->document_id, 'url' => ['view', 'document_id' => $model->document_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="cs-required-document-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
