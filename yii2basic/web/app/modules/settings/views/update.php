<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\settings\model\Companies */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Companies',
]) . $model->com_address;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Companies'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->com_address, 'url' => ['view', 'id' => $model->com_address]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="companies-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
