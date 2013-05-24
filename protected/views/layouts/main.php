<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>

	<?php Yii::app()->bootstrap->register(); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/styles.css" />
</head>

<body>

<?php $this->widget('bootstrap.widgets.TbNavbar',array(
		'type'=>'inverse',
		'fluid'=>false,
		'collapse'=>true,
		'brand'=>'',	
    'items'=>array(
        array(
            'class'=>'bootstrap.widgets.TbMenu',
            'items'=>array(
		'...',
                array('icon'=>'home','label'=>'Home', 'url'=>array('/site/index')),
		'...',
                array('icon'=>'hdd','label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
		'...',
                array('icon'=>'envelope','label'=>'Contact', 'url'=>array('/site/contact')),
		'...'
            ),
        ),
						'<div class="pull-right sub-brand"></div>',
        array(
            'class'=>'bootstrap.widgets.TbMenu',
            'htmlOptions'=>array('class'=>'pull-right'),
            'items'=>array(
                '---',
                array('icon'=>'off white','label'=>'Login', 'url'=>array('/user/login'), 'visible'=>Yii::app()->user->isGuest),
                array('icon'=>'bookmark white','label'=>Yii::app()->user->name, 'url'=>'#', 'items'=>array(
                    array('label'=>'Manage Voyage', 'url'=>'#'),
                    array('label'=>'Manage Vessel', 'url'=>'#'),
                    array('label'=>'Manage Schedule', 'url'=>'#'),
                    '---',
                    array('icon'=>'off','label'=>'Logout', 'url'=>array('/site/logout')),
                ), 'visible'=>!Yii::app()->user->isGuest),
                '---',
            ),
			  ),
    ),
)); ?>

<div class="container" id="page">

	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('bootstrap.widgets.TbBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>

	<div class="footer">
		<p>&copy; <?php echo date('Y'); ?> Archipelago | Philipine Ferries Corporation.</p>
		<p>Designed by A-Team.</p>
		<p><?php echo Yii::powered(); ?></p>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
