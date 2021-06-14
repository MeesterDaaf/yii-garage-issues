<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\AppointmentSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Appointments';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="appointment-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Appointment', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); 
    ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'comment:ntext',
            'datetime',
            'status',
            [
                'attribute' => 'car_id',
                'label'     => 'Car',
                'value'     => 'car.plate'
            ],
            [
                'attribute' => 'car.customer_id',
                'label'     => 'Customer',
                
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>