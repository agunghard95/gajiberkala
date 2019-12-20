<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Kelas */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Kelas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="kelas-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'nama_kelas',
        ],
    ]) ?>

    <div class="box-body">
        <table class="table">
            <thead>
                <tr>
                    <th> No </th>
                    <th> Nama </th>
                    <th> Alamat </th>
                    <th> Kelas </th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1;
                foreach ($siswa as $s) : ?>
                    <tr>
                        <td><?= $i; ?> </td>
                        <td><?= $s->nama; ?> </td>
                        <td><?= $s->alamat; ?> </td>
                        <td><?= $s->namakelas; ?> </td>
                    </tr>
                <?php $i++;
                endforeach; ?>
            </tbody>
        </table>
    </div>
</div>