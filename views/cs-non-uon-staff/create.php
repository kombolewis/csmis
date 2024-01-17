<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\CsNonUonStaff $model */

$this->title = 'Create Cs Non Uon Staff';
$this->params['breadcrumbs'][] = ['label' => 'Cs Non Uon Staff', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cs-non-uon-staff-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
