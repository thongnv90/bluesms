<?php
/* @var $this HistoryController */
/* @var $model History */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'history-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'history_campaingname'); ?>
		<?php echo $form->textField($model,'history_campaingname',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'history_campaingname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'history_brandname'); ?>
		<?php echo $form->textField($model,'history_brandname',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'history_brandname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'history_startdate'); ?>
		<?php echo $form->textField($model,'history_startdate'); ?>
		<?php echo $form->error($model,'history_startdate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'history_status'); ?>
		<?php echo $form->textField($model,'history_status'); ?>
		<?php echo $form->error($model,'history_status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'history_total'); ?>
		<?php echo $form->textField($model,'history_total'); ?>
		<?php echo $form->error($model,'history_total'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'history_notes'); ?>
		<?php echo $form->textField($model,'history_notes',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'history_notes'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'history_type'); ?>
		<?php echo $form->textField($model,'history_type',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'history_type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'history_mobile'); ?>
		<?php echo $form->textField($model,'history_mobile',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'history_mobile'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'member_createby'); ?>
		<?php echo $form->textField($model,'member_createby'); ?>
		<?php echo $form->error($model,'member_createby'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->