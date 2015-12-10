<?php
/* @var $this ContactCategorieController */
/* @var $model ContactCategorie */

$this->breadcrumbs=array(
	'Contact Categories'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List ContactCategorie', 'url'=>array('index')),
	array('label'=>'Create ContactCategorie', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#contact-categorie-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Danh bạ</h1>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('bootstrap.widgets.TbGridView', array(
	'id'=>'contact-categorie-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'category_id',
		'category_name',
		'category_createby',
		'category_status',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
