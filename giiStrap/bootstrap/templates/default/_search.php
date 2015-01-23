<?php
/**
 * _search.php
 * @Author original Nicola Asun, sirin k -> http://www.yiiframework.com/extension/giiStrap/
 * @Tested on YiiStrap. Version 1.2.0
 * @Reworked by Anibal Centurion -> https://github.com/Ekaptenn
 * @package giiStrap.
 */


?>
<?php echo "<?php "; ?> $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
        'id'=>'search-<?php echo $this->class2id($this->modelClass); ?>-form',
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
));  ?>


<?php foreach ($this->tableSchema->columns as $column): ?>
<?php
	$field=$this->generateInputField($this->modelClass, $column);
if (strpos($field, 'password')!==false)
	continue;
?>
	<?php echo $this->generateActiveRow($this->modelClass, $column); ?>

<?php endforeach; ?>
	<div class="form-actions">
		<?php echo "<?php echo CHtml::submitButton('Search', array('class'=>'btn btn-primary','icon'=>'search white'));?>"; ?>
	</div>

<?php echo "<?php ";?>
<?php echo "\$this->endWidget();" ?>
<?php echo "?>"; ?>

<?php echo "<?php "; ?>
$cs = Yii::app()->getClientScript();
$cs->registerCoreScript('jquery');
$cs->registerCoreScript('jquery.ui');
$cs->registerCssFile(Yii::app()->request->baseUrl.'/css/bootstrap/jquery-ui.css');
?>
   <script>
	$(".btnreset").click(function(){
		$(":input","#search-<?php echo $this->class2id($this->modelClass); ?>-form").each(function() {
		var type = this.type;
		var tag = this.tagName.toLowerCase(); // normalize case
		if (type == "text" || type == "password" || tag == "textarea") this.value = "";
		else if (type == "checkbox" || type == "radio") this.checked = false;
		else if (tag == "select") this.selectedIndex = "";
	  });
	});
   </script>
