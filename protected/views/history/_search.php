<?php
/* @var $this HistoryController */
/* @var $model History */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'history_id'); ?>
		<?php echo $form->textField($model,'history_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'history_campaingname'); ?>
		<?php echo $form->textField($model,'history_campaingname',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'history_brandname'); ?>
		<?php echo $form->textField($model,'history_brandname',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'history_startdate'); ?>
		<?php echo $form->textField($model,'history_startdate'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'history_status'); ?>
		<?php echo $form->textField($model,'history_status'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'history_total'); ?>
		<?php echo $form->textField($model,'history_total'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'history_notes'); ?>
		<?php echo $form->textField($model,'history_notes',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'history_type'); ?>
		<?php echo $form->textField($model,'history_type',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'history_mobile'); ?>
		<?php echo $form->textField($model,'history_mobile',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'member_createby'); ?>
		<?php echo $form->textField($model,'member_createby'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->