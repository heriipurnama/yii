<?php
/* @var $this KotaController */
/* @var $model Kota */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'kota-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'provinsi_id'); ?>
		<?php echo $form->textField($model,'provinsi_id'); ?>
		<?php echo $form->error($model,'provinsi_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nm_kota'); ?>
		<?php echo $form->textField($model,'nm_kota',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'nm_kota'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->