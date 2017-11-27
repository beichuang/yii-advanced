<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/11/28
 * Time: 0:24
 */
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>
<h1>Countries</h1>
<ul>
    <?php foreach ($countries as $country): ?>
        <li>
            <?= Html::encode("{$country->name} ({$country->code})")?>:
            <?= $country->population ?>
        </li>
    <?php endforeach;?>
</ul>

<?= LinkPager::widget(['pagination' => $pagination]) ?>