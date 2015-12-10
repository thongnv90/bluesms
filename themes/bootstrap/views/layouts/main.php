<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />
    <link data-jsfiddle="common" rel="stylesheet" media="screen" href="<?php echo Yii::app()->request->baseUrl; ?>/css/handsontable/handsontable.css">
    <link data-jsfiddle="common" rel="stylesheet" media="screen" href="<?php echo Yii::app()->request->baseUrl; ?>/css/handsontable/pikaday.css">
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/styles.css" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>

	<?php Yii::app()->bootstrap->register(); ?>
        <script data-jsfiddle="common" src="<?php echo Yii::app()->request->baseUrl; ?>/js/handsontable/pikaday/pikaday.js"></script>
    <script data-jsfiddle="common" src="<?php echo Yii::app()->request->baseUrl; ?>/js/handsontable/moment/moment.js"></script>
    <script data-jsfiddle="common" src="<?php echo Yii::app()->request->baseUrl; ?>/js/handsontable/zeroclipboard/ZeroClipboard.js"></script>
    <script data-jsfiddle="common" src="<?php echo Yii::app()->request->baseUrl; ?>/js/handsontable/handsontable.js"></script>
</head>

<body>

    <?php $this->widget('bootstrap.widgets.TbNavbar',array(
        'items'=>array(
            array(
                'class'=>'bootstrap.widgets.TbMenu',
                'htmlOptions'=>array('class'=>'pull-right'),
                'encodeLabel'=>false,
                'items'=>array(
                    array('label'=>'Gửi SMS',
                            'items'=>array(
                                array('label'=>'Chăn sóc khách hàng','url'=>'#'),
                                array('label'=>'Quảng cáo', 'url'=>'#'),
                            ),
                        ),
                    array('label'=>'Tin nhắn mẫu', 'url'=>array('/templatesms/admin')),
                    array('label'=>'Danh bạ', 'url'=>array('/contactCategorie/admin')),
                    array('label'=>'Nhật ký gửi SMS', 'url'=>array('/history/admin')),
                    array('label'=>'Tìm kiếm', 'url'=>'#'),
                    array('label'=>'Báo cáo', 'url'=>'#'),
                    array('label'=>'Thành viên', 'url'=>array('/Members')),
                    //array('label'=>'', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                    array('label'=>Yii::app()->user->name, 'url'=>'#',
                            'items'=>array(
                                array('label'=>'Thông tin cá nhân','url'=>array('/Members/default/view', 'id'=>YII::app()->user->id)),
                                array('label'=>'Logout('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest),
                            ),
                            'visible'=>!Yii::app()->user->isGuest),
                ),
            ),
        ),
    ));
    ?>

<div class="container" id="page">

	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('bootstrap.widgets.TbBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> by My Company.<br/>
		All Rights Reserved.<br/>
		<?php echo Yii::powered(); ?>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
