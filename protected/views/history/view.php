<?php
/* @var $this HistoryController */
/* @var $model History */

$this->breadcrumbs=array(
	'Histories'=>array('index'),
	$model->history_id,
);

$this->menu=array(
	array('label'=>'List History', 'url'=>array('index')),
	array('label'=>'Create History', 'url'=>array('create')),
	array('label'=>'Update History', 'url'=>array('update', 'id'=>$model->history_id)),
	array('label'=>'Delete History', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->history_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage History', 'url'=>array('admin')),
);
?>

<h1>View History #<?php echo $model->history_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'history_id',
		'history_campaingname',
		'history_brandname',
		'history_startdate',
		'history_status',
		'history_total',
		'history_notes',
		'history_type',
		'history_mobile',
		'member_createby',
	),
)); ?>
