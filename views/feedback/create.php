<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\FeedbackForm */

$this->title = 'Форма обратной связи';
$this->params['breadcrumbs'][] = ['label' => 'Feedback Forms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="feedback-form-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
