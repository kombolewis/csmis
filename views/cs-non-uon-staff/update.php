<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\CsNonUonStaff $model */

$this->title = 'Update Cs Non Uon Staff: ' . $model->non_uon_staffid;
$this->params['breadcrumbs'][] = ['label' => 'Cs Non Uon Staff', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->non_uon_staffid, 'url' => ['view', 'non_uon_staffid' => $model->non_uon_staffid]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="cs-non-uon-staff-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
