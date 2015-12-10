<?php
/* @var $this TemplateSmsController */
/* @var $model TemplateSms */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'template-sms-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'template_content'); ?>
		<?php echo $form->textArea($model,'template_content',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'template_content'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'template_date'); ?>
		<?php echo $form->textField($model,'template_date'); ?>
		<?php echo $form->error($model,'template_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'template_createby'); ?>
		<?php echo $form->textField($model,'template_createby'); ?>
		<?php echo $form->error($model,'template_createby'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->