<?php
/* @var $this ContactCategorieController */
/* @var $model ContactCategorie */

$this->breadcrumbs=array(
	'Contact Categories'=>array('index'),
	$model->category_id,
);

$this->menu=array(
	array('label'=>'List ContactCategorie', 'url'=>array('index')),
	array('label'=>'Create ContactCategorie', 'url'=>array('create')),
	array('label'=>'Update ContactCategorie', 'url'=>array('update', 'id'=>$model->category_id)),
	array('label'=>'Delete ContactCategorie', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->category_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ContactCategorie', 'url'=>array('admin')),
);
?>

<h1>View ContactCategorie #<?php echo $model->category_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'category_id',
		'category_name',
		'category_createby',
		'category_status',
	),
)); ?>
