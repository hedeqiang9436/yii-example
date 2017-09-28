<?php

namespace app\controllers;

use Yii;
use app\models\Country;
use app\models\CountrySearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * CountryController implements the CRUD actions for Country model.
 */
class CountryController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Country models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new CountrySearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Country model.
     * @param string $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Country model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Country();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->code]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Country model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->code]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Country model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Country model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return Country the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Country::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }


    public function actionRequest()
    {
        $request=Yii::$app->request;
        if ($request->isGet)
        {
            echo $request->get('name','hello laravel');
            echo $request->userHost;
            echo $request->userIP;
            echo $request->hostInfo;
        }else{
            echo "未知星球，不明生物";
        }
    }
    public function actionResponse()
    {
        $response=Yii::$app->response;
        //$response->statusCode=404;
        //echo  $response->getStatusCode();
        //$response->redirect('http://www.deqianghe.xyz');
        //$this->redirect('http://www.deqianghe.xyz');

        $response->sendFile('index.php');
    }
    public function actionSession()
    {
        $session=Yii::$app->session;
        echo $session->isActive;

        $session->set('name','laravel');

        echo $session->get('name');
        $session->remove('name');
        echo $session['name'];
        //$session->remove('name');
    }

    public function actionViews()
    {
        $searchModel = new CountrySearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
    /*
     *数据库操作
     */
    public function actionSql()
    {
        //$sql='select * from country where code=:code';
        //$res= Country::findBySql($sql,['code'=>'AU'])->all();


        //$res=Country::find()->where(['code'=>'AU'])->asArray()->all();

        //$res=Country::find()->where(['like','name','Aus'])->asArray()->all();

        //批量查询
//        foreach (Country::find()->batch(4) as $countries)
//        {
//            //var_dump($countries);
//            //echo $countries[0]['name'].'<br>';
//        }
        //var_dump($res);

        //删除
        //$res=Country::find()->where(['code'=>'AU'])->all();
        //$res[0]->delete();

        //Country::deleteAll(['code'=>'AU']);
//        $code='DS';
//        $country= Country::findOne($code);
//        if ($country === null)
//        {
//            throw new NotFoundHttpException;
//        }
//        $country->delete();
        //添加
//        $counrty=new Country();
//        $counrty->code='DS';
//
//        $counrty->population='12548313';
//        $counrty->validate();
//        if ($counrty->hasErrors())
//        {
//           var_dump($counrty->toArray()) ;
//        }
//        $counrty->save();





    }
}
