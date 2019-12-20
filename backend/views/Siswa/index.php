<?php

use yii\helpers\Html;
use kartik\grid\GridView;

use kartik\icons\FontAwesomeAsset;
FontAwesomeAsset::register($this);


/* @var $this yii\web\View */
/* @var $searchModel backend\models\SiswaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Siswas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="siswa-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Siswa', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); 
    ?>

    <?=
    GridView::widget([
    'moduleId' => 'gridviewKrajee', // change the module identifier to use the respective module's settings
    'dataProvider' => $dataProvider,
    'filterModel' => $searchModel,
    'columns' => ['id',
            'nama',
            'alamat',
            'kelas.nama_kelas',
            'tanggal_masuk',
            'gaji',],
    'pjax'=>true,
    'pjaxSettings'=>[
        'neverTimeout'=>true,
        'beforeGrid'=>'My fancy content before.',
        'afterGrid'=>'My fancy content after.',
    ],
    'resizableColumns'=>true,
    'floatHeader'=>true,
    'floatHeaderOptions'=>['top'=>'50']
    ]);
     ?>


    <!--< ?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'nama',
            'alamat',
            'kelas.nama_kelas',
            'tanggal_masuk',
            'gaji',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>-->


</div>