<?php

namespace frontend\controllers;

use yii\helpers\Html;
use Yii;
use frontend\models\Myorder;
use frontend\models\MyorderSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use Mpdf\Mpdf; 


/**
 * MyorderController implements the CRUD actions for Myorder model.
 */
class MyorderController extends Controller
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
     * Lists all Myorder models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new MyorderSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Myorder model.
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
     * Creates a new Myorder model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
//     Yii::$app->mail->compose()
//    ->attachContent($pathToPdfFile, [
//         'fileName'    => 'Name of your pdf',
//         'contentType' => 'application/pdf'
//    ])
//    // to & subject & content of message
//    ->send();
    public function actionCreate()
    {
        $model = new Myorder();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            \Yii::$app->mailer->compose([
       
    ])
   
 
            
               
                    ->setFrom(\Yii::$app->params['senderEmail'])
                    ->setTo('test@example.com')
                    ->setSubject('Your order has been successful')
                    ->send();
                    Yii::$app->session->setFlash('success', 'Thank you for your purchase');
            return $this->redirect(['view', 'id' => $model->orderId]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    // public function actionViewpdf($id)
    // { 
        

    //     $pdf_content = $this->renderPartial('viewpdf', [
    //         'model' => $this->findModel($id),
           
          
              
    //     ]); 
         
    //       $mpdf = new Mpdf();
    //          $mpdf->WriteHtml($pdf_content);
    //          $mpdf->Output();
    //          exit;
    // }
    public function actionViewpdf($id)
    {
     
           $pdfcontent= $this->renderPartial('viewpdf', [
            'model' => $this->findModel($id),
        ]);
        
        $mpdf = new Mpdf();
        $mpdf->WriteHtml($pdfcontent);
        $mpdf->Output(); 
        exit;
      
      
    }
//     $mpdf=new mPDF();
// $mpdf->WriteHTML($this->renderPartial('pdf',['model' => $model])); //pdf is a name of view file responsible for this pdf document
// $path = $mpdf->Output('', 'S'); 

// Yii::$app->mail->compose()
// ->attachContent($path, ['fileName' => 'Invoice #'.$model->number.'
 
    /**
     * Updates an existing Myorder model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->orderId]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }
    public function actionCongrats()
    {
        return $this->render('congrats');
    }

    /**
     * Deletes an existing Myorder model.
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
     * Finds the Myorder model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Myorder the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Myorder::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
