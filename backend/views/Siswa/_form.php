<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;
use kartik\number\NumberControl;

/* @var $this yii\web\View */
/* @var $model common\models\Siswa */
/* @var $form yii\widgets\ActiveForm */
$dispOptions = ['class' => 'form-control kv-monospace'];
 
$saveOptions = [
    'type' => 'text', 
    'label'=>'<label>Saved Value: </label>', 
    'class' => 'kv-saved',
    'readonly' => true, 
    'tabindex' => 1000
];
 
$saveCont = ['class' => 'kv-saved-cont'];
?>

<div class="siswa-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alamat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_kelas')->textInput() ?>

    <?= $form->field($model, 'tanggal_masuk')->widget(DatePicker::classname(), [
	    'options' => ['placeholder' => 'Enter birth date ...'],
	    'pluginOptions' => [
	        'autoclose'=>true,
	        'format' => 'yyyy-mm-dd'
	    ]
		]);
	?>

	


	<?= 
	$form->field($model, 'gaji')->widget(NumberControl::classname(), [
    'maskedInputOptions' => [
        'prefix' => 'Rp. ',
        'suffix' => ' ,00',
        'allowMinus' => false
    ],
    'options' => $saveOptions,
    'displayOptions' => $dispOptions,
    'saveInputContainer' => $saveCont
	]);
	?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>