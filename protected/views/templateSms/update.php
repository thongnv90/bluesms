<?php
/* @var $this TemplateSmsController */
/* @var $model TemplateSms */

$this->breadcrumbs=array(
	'Template Sms'=>array('index'),
	$model->template_id=>array('view','id'=>$model->template_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List TemplateSms', 'url'=>array('index')),
	array('label'=>'Create TemplateSms', 'url'=>array('create')),
	array('label'=>'View TemplateSms', 'url'=>array('view', 'id'=>$model->template_id)),
	array('label'=>'Manage TemplateSms', 'url'=>array('admin')),
);
?>

<h1>Update TemplateSms <?php echo $model->template_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>