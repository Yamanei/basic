<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\FeedbackForm */

$this->title = 'Update Feedback Form: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Feedback Forms', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->name]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="feedback-form-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
