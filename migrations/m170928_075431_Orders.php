<?php

use yii\db\Migration;

class m170928_075431_Orders extends Migration
{
    public function safeUp()
    {

    }

    public function safeDown()
    {
        echo "m170928_075431_Orders cannot be reverted.\n";

        return false;
    }


    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $this->createTable('orders',[
            'id'=>$this->integer(),
            'price'=>$this->double(),
            'address'=>$this->string(),
            'PRIMARY KEY(id)',
        ]);
        $this-$this->addForeignKey('orders_id','customer','id','customer_id');

    }
    /*
        public function down()
        {
            echo "m170928_075431_Orders cannot be reverted.\n";

            return false;
        }
        */
}
