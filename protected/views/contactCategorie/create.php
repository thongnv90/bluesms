<?php
/* @var $this ContactCategorieController */
/* @var $model ContactCategorie */

$this->breadcrumbs=array(
	'Contact Categories'=>array('index'),
	'Create',
);
?>

<h1>Tạo mới danh bạ</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>