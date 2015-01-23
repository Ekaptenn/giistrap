<?php
/**
 * create.php
 * @Author original Nicola Asun, sirin k -> http://www.yiiframework.com/extension/giiStrap/
 * @Tested on YiiStrap. Version 1.2.0
 * @Reworked by Anibal Centurion -> https://github.com/Ekaptenn
 * @package giiStrap.
 */

?>
<?php
echo "<?php\n";
$label=$this->pluralize($this->class2name($this->modelClass));
echo "\$this->breadcrumbs=array(
	'$label'=>array('index'),
	'Create',
);\n";
?>

?>

<h1>Create <?php echo $this->modelClass; ?></h1>
<hr/>
<?php echo "<?php "; ?>
$this->beginWidget('zii.widgets.CPortlet', array(
	'htmlOptions'=>array(
		'class'=>''
	)
));
$this->widget('bootstrap.widgets.TbNav', array(
    'type' => TbHtml::NAV_TYPE_PILLS,
	'items'=>array(
		array('label'=>'Create', 'icon'=>'icon-plus', 'url'=>Yii::app()->controller->createUrl('create'),'active'=>true, 'linkOptions'=>array()),
                array('label'=>'List', 'icon'=>'icon-th-list', 'url'=>Yii::app()->controller->createUrl('index'), 'linkOptions'=>array()),
		array('label'=>'Search', 'icon'=>'icon-search', 'url'=>'#', 'linkOptions'=>array('class'=>'search-button')),
	),
));
$this->endWidget();
?>

<?php echo "<?php echo \$this->renderPartial('_form', array('model'=>\$model)); ?>"; ?>
