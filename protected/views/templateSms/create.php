<?php
/* @var $this TemplateSmsController */
/* @var $model TemplateSms */

$this->breadcrumbs=array(
	'Template Sms'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TemplateSms', 'url'=>array('index')),
	array('label'=>'Manage TemplateSms', 'url'=>array('admin')),
);
?>

<h1>Create TemplateSms</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>