<?php
/* @var $this KotaController */
/* @var $model Kota */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'provinsi_id'); ?>
		<?php echo $form->textField($model,'provinsi_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nm_kota'); ?>
		<?php echo $form->textField($model,'nm_kota',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->