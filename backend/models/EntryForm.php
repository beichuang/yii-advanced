<?php
/**
 * Created by PhpStorm.
 * File_Name: EntryForm.php
 * User: 刘亚博
 * Date: 2017/11/27
 * Time: 19:42
 * 摘要:
 */
namespace backend\models;

use Yii;
use yii\base\Model;

class EntryForm extends Model
{
    public $name;
    public $email;

    public function rules()
    {
        return [
            [['name', 'email'], 'required'],
            ['email', 'email'],
        ];
    }
}