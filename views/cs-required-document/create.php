<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\CsRequiredDocument $model */

$this->title = 'Create Cs Required Document';
$this->params['breadcrumbs'][] = ['label' => 'Cs Required Documents', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cs-required-document-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
