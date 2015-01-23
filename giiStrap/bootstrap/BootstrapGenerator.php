<?php
/**
 * BootstrapGenerator.php
 * @Author original Nicola Asun, sirin k -> http://www.yiiframework.com/extension/giiStrap/
 * @Tested on YiiStrap. Version 1.2.0
 * @Reworked by Anibal Centurion -> https://github.com/Ekaptenn
 * @package giiStrap.
 */

Yii::import('gii.generators.crud.CrudGenerator');

class BootstrapGenerator extends CrudGenerator
{
	public $codeModel = 'application.extensions.giiStrap.bootstrap.BootstrapCode';
}
