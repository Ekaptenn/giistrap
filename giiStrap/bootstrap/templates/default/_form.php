<?php
/**
 * _form.php
 * @Author original Nicola Asun, sirin k -> http://www.yiiframework.com/extension/giiStrap/
 * @Tested on YiiStrap. Version 1.2.0
 * @Reworked by Anibal Centurion -> https://github.com/Ekaptenn
 * @package giiStrap.
 */



?>
<div class="form">
<?php echo "<?php \$form=\$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'".$this->class2id($this->modelClass)."-form',
	'enableAjaxValidation'=>false,
    'method'=>'post',
	'htmlOptions'=>array(
		'enctype'=>'multipart/form-data'
	)
)); ?>\n"; ?>
     	<fieldset>
		<legend>
			<p class="note">Fields with <span class="required">*</span> are required.</p>
		</legend>

	<?php echo "<?php echo \$form->errorSummary(\$model,'Opps!!!', null,array('class'=>'alert alert-error span12')); ?>\n"; ?>


<?php
foreach ($this->tableSchema->columns as $column) {

	if ($column->autoIncrement)
		continue;
?>

	<?php echo $this->generateActiveRow($this->modelClass, $column)."\n"; ?>

<?php
}
?>

	<div class="form-actions">
		<?php echo "<?php echo CHtml::submitButton(\$model->isNewRecord ? 'Create' : 'Save', array('class'=>'btn btn-primary','icon'=>'ok white'));?>"; ?>
	</div>
</fieldset>
<?php echo "<?php \$this->endWidget(); ?>\n"; ?>
</div>
