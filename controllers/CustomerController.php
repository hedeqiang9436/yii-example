<?php
namespace app\controllers;
use app\models\Customer;
use app\models\Orders;
use yii\web\Controller;
class CustomerController extends Controller
{
    public function actionInsert()
    {
        $customer=new Customer();
        $customer->name='laravel';
        $customer->age=12;
        $customer->avatar='laravel';
        $customer->save();


//        $order=new Orders();
//        $order->price=12.5;
//        $order->address='北京市';
//        $order->save();
    }

    public function actionSelect()
    {
        //$customer=new Customer();

        $customer = Customer::findOne(1);
        var_dump($customer->orders);
//        var_dump(Customer::find()
//            ->select('customer.*,orders.*')
//            ->innerJoin('orders','customer.customer_id=orders.id')->asArray()->all());

    }

}