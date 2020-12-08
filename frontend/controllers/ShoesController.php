<?php

namespace frontend\controllers;

use Yii;
use frontend\models\Shoes;
use frontend\models\Shoesimage;
use frontend\models\ShoesSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use frontend\models\Cart;
use frontend\models\Myorder;
/**
 * ShoesController implements the CRUD actions for Shoes model.
 */
class ShoesController extends Controller
{
    /**
     * {@inheritdoc}
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
     * Lists all Shoes models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ShoesSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Shoes model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Shoes model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Shoes();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
          
            return $this->redirect(['addimage', 'shoesId' => $model->shoesId]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    public function actionAddimage($shoesId)
    {
        $model = new Shoesimage();
        if ($model->load(Yii::$app->request->post()))
        {

           //generates images with unique names
            $imageName = bin2hex(openssl_random_pseudo_bytes(10));
            $model->image = UploadedFile::getInstance($model, 'image');
            //saves file in the root directory
            $model->image->saveAs('uploads.'.$imageName.'.'.$model->image->extension);
            //save in the db
            $model->image='uploads/'.$imageName.'.'.$model->image->extension;
            $model->save();
            return $this->redirect(['index']);
        }
            return $this->render('addimage', [
                'model' => $model,
                'shoesId' =>$shoesId,

            ]);
    }
  
    public function actionCheckout()
    {
        $model = new Myorder();
    
        if ($model->load(Yii::$app->request->post())) {
                       $model->save();
    
                return $this->redirect(['site/congrats']);
    
        }
    
        return $this->render('checkout', [
            'model' => $model,
            
        ]);
    }
   


  /**
     * Updates an existing Shoes model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->shoesId]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Shoes model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Shoes model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Shoes the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Shoes::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
