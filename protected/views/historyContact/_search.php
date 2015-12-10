<?php
/* @var $this HistoryContactController */
/* @var $model HistoryContact */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'history_contact_id'); ?>
		<?php echo $form->textField($model,'history_contact_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'history_id'); ?>
		<?php echo $form->textField($model,'history_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'contact_id'); ?>
		<?php echo $form->textField($model,'contact_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'history_contact_hoten'); ?>
		<?php echo $form->textField($model,'history_contact_hoten',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'history_contact_phone'); ?>
		<?php echo $form->textField($model,'history_contact_phone'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'history_contact_birthday'); ?>
		<?php echo $form->textField($model,'history_contact_birthday'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'history_contact_gender'); ?>
		<?php echo $form->textField($model,'history_contact_gender'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'history_contact_address'); ?>
		<?php echo $form->textField($model,'history_contact_address',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'history_contact_email'); ?>
		<?php echo $form->textField($model,'history_contact_email',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'history_contact_company'); ?>
		<?php echo $form->textField($model,'history_contact_company',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'history_contact_notes'); ?>
		<?php echo $form->textField($model,'history_contact_notes',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'history_contact_status'); ?>
		<?php echo $form->textField($model,'history_contact_status'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->