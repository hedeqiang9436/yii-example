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
class Customer extends \yii\db\ActiveRecord
{
    public $primaryKey='customer_id';
    public function getOrders()
    {
        return $this->hasMany(Orders::className(), ['id' => 'customer_id']);
    }
}
