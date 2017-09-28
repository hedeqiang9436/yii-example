<?php
namespace app\models;
use yii\base\Model;

class EntryForm extends Model
{
    public $name;
    public $email;
    public function rules()
    {
        return [
            // username and password are both required
            [['name', 'email'], 'required'],
            // rememberMe must be a boolean value
            ['email', 'email'],
        ];
    }

}