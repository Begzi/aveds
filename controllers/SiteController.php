<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\WorkerForm;
use app\models\Worker;
use yii\helpers\FileHelper;
use yii\web\UploadedFile;

class SiteController extends Controller
{
    
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    public function actionIndex()
    {
        $workers = Worker::find()->all();
        return $this->render('index', ['workers' => $workers]);
    }


    public function actionAdd()
    {
        $model = new WorkerForm();
        if ($model->load(Yii::$app->request->post())) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            $worker = new Worker();
            $worker->fullname = $model->fullname;
            $worker->email = $model->email;
            $worker->average_salary = $model->average_salary;
            $worker->old = $model->old;
            $worker->experience = $model->experience;
            $worker->photo_link = UploadedFile::getInstance($model, 'photo_link');
            $worker->save();


            $path = Yii::$app->params['pathUploads'] . 'photo/' . $worker->id ;
            FileHelper::createDirectory($path);
            $worker->photo_link->saveAs( $path . '/' . $worker->photo_link );

            return $this->redirect('index');
        }
        return $this->render('add', [
            'model' => $model,
        ]);
    }

    public function actionView($id)
    {
        $worker = Worker::findOne($id);
        return $this->render('view', ['worker' => $worker]);
    }
}
