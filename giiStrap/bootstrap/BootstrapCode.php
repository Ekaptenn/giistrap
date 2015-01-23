<?php
/**
 * BootstrapCode.php
 * @Author original Nicola Asun, sirin k -> http://www.yiiframework.com/extension/giiStrap/
 * @Tested on YiiStrap. Version 1.2.0
 * @Reworked by Anibal Centurion -> https://github.com/Ekaptenn
 * @package giiStrap.
 */


Yii::import('gii.generators.crud.CrudCode');

class BootstrapCode extends CrudCode {

    /**
     *
     *
     * @param unknown $modelClass
     * @param unknown $column
     * @return unknown
     */
    public function generateActiveRow($modelClass, $column)
    {
        if ($column->type === 'boolean') {
            return "\$form->checkBoxRow(\$model,'{$column->name}')";
        } else if (stripos($column->dbType, 'text') !== false) {
                return "\$form->textAreaRow(\$model,'{$column->name}',array('rows'=>6, 'cols'=>50, 'class'=>'span8'))";
            } else {
            if (preg_match('/^(password|pass|passwd|passcode)$/i', $column->name)) {
                $inputField = 'passwordField';
            } else {
                $inputField = 'textField';
            }

            if ($column->type !== 'string' || $column->size === null) {
                return '<div class="control-group">' . "\n" .
                    '<?php echo $form->labelEx($model,\'' . "{$column->name}" . '\', array(\'class\'=>\'control-label\')); ?>' . "\n" .
                    '<div class="controls">' . "\n" .
                    '<?php echo $form->textField($model,\'' . "{$column->name}" . '\',array(\'class\'=>\'span5\')); ?>' . "\n" .
                    '<?php echo $form->error($model,\'' . "{$column->name}" . '\'); ?>' . "\n" .
                    '</div>' . "\n" .
                    '</div>';
            } else {
                return '<div class="control-group">' . "\n" .
                    '<?php echo $form->labelEx($model,\'' . "{$column->name}" . '\', array(\'class\'=>\'control-label\')); ?>' . "\n" .
                    '<div class="controls">' . "\n" .
                    '<?php echo $form->textField($model,\'' . "{$column->name}" . '\',array(\'class\'=>\'span5\',\'maxlength\'=>' . "'{$column->size}'" . ')); ?>' . "\n" .
                    '<?php echo $form->error($model,\'' . "{$column->name}" . '\'); ?>' . "\n" .
                    '</div>' . "\n" .
                    '</div>';
            }

        }
    }

}
