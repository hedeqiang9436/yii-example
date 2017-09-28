<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "country".
 *
 * @property string $code
 * @property string $name
 * @property integer $population
 */
class Orders extends \yii\db\ActiveRecord
{
    public function getCustomer()
    {
        return $this->hasOne(Customer::className(),['customer_id','id']);
    }

}
