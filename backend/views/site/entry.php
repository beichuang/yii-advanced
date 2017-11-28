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

<div class="form-group">
    <?= Html::submitButton('Submit', ['class' => 'btn btn-primary'])?>
</div>
<?php ActiveForm::end();  ?>



