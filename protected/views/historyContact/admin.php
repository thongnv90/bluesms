<?php
/* @var $this HistoryContactController */
/* @var $model HistoryContact */

$this->breadcrumbs=array(
	'History Contacts'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List HistoryContact', 'url'=>array('index')),
	array('label'=>'Create HistoryContact', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#history-contact-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage History Contacts</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'history-contact-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'history_contact_id',
		'history_id',
		'contact_id',
		'history_contact_hoten',
		'history_contact_phone',
		'history_contact_birthday',
		/*
		'history_contact_gender',
		'history_contact_address',
		'history_contact_email',
		'history_contact_company',
		'history_contact_notes',
		'history_contact_status',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
