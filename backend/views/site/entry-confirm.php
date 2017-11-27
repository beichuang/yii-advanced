<?php
/**
 * Created by PhpStorm.
 * File_Name: entry-confirm.php
 * User: 刘亚博
 * Date: 2017/11/27
 * Time: 19:57
 * 摘要:
 */
use yii\helpers\Html;
?>
<p>You have entered the following information:</p>

<ul>
    <li><label>Name</label>: <?= Html::encode($model->name) ?></li>
    <li><label>Email</label>: <?= Html::encode($model->email) ?></li>
</ul>
