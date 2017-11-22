<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\PageCategory */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Page Category',
]) . $model->title;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Page Categories'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="page-category-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
