<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\search\CsNonUonStaffSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="cs-non-uon-staff-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'non_uon_staffid') ?>

    <?= $form->field($model, 'surname') ?>

    <?= $form->field($model, 'other_names') ?>

    <?= $form->field($model, 'email') ?>

    <?= $form->field($model, 'org_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
