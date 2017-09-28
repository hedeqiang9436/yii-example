<?php

use yii\db\Migration;
use yii\db\Schema;
class m170928_074420_Customer extends Migration
{
    public function safeUp()
    {

    }

    public function safeDown()
    {
        echo "m170928_074420_Customer cannot be reverted.\n";

        return false;
    }

    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $this->createTable('customer',[
           'customer_id'=>Schema::TYPE_PK,
            'name'=>Schema::TYPE_STRING,
            'age'=>Schema::TYPE_INTEGER,
            'avatar'=>$this->string(),
        ]);
    }
    /*
        public function down()
        {
            echo "m170928_074420_Customer cannot be reverted.\n";

            return false;
        }
        */
}
