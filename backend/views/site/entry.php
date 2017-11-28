<?php
/**
 * Created by PhpStorm.
 * File_Name: entry.php
 * User: 刘亚博
 * Date: 2017/11/27
 * Time: 19:57
 * 摘要:
 */
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<?php $form = ActiveForm::begin(); ?>
<?= $form-> field($model, 'name') ?>
<?= $form->field($model, 'email') ?>
<!--视图中自定义标签-->
<?= $form->field($model, 'name')->label('自定义 Name') ?>
<?= $form->field($model, 'email')->label('自定义 Email') ?>

<div class="form-group">
    <?= Html::submitButton('Submit', ['class' => 'btn btn-primary'])?>
</div>
<?php ActiveForm::end();  ?>



