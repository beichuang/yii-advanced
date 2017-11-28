<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/11/28
 * Time: 0:12
 */

namespace backend\controllers;


use yii\web\Controller;
use yii\data\Pagination;
use backend\models\Country;

class CountryController extends Controller
{
    public function actionIndex()
    {
        $query = Country::find();

        $pagination = new Pagination([
            'defaultPageSize' => 5,
            'totalCount' => $query->count(),
        ]);

        $countries = $query->orderBy('name')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();

        return $this->render('index',[
            'countries' => $countries,
            'pagination' => $pagination,
        ]);
    }
}