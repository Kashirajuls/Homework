<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\EntryForm;
class SiteController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

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
        return $this->render('index');
    }

    public function actionLogin()
    {
        $model = new LoginForm();
        if ($model->load($_POST) && $model->login()) {
            return $this->goBack();
        } else {
            return $this->render('login', array(
                'model' => $model,
            ));
        }
    }
    public function actionLogout()
    {
        Yii::$app->user->logout();
        return $this->goHome();
    }

    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    public function actionAbout()
    {
        return $this->render('about');
    }
    public function actionHello(){
        $name = "Iuliia";
        return $this->render('hello',array("name"=>$name));
    }

    public function actionEntry()
    {
        $model = new EntryForm();

        if (isset($_POST['EntryForm']))
        {
            $model->attributes =Yii::$app->request->post('EntryForm');


            if($model->validate() && $model->entrance()) {
            return $this->goHome();

            }
        }
            // either the page is initially displayed or there is some validation error
            return $this->render('entry', ['model' => $model]);

            //$userHost = Yii::$app->request->userHost;
            //$userIP = Yii::$app->request->userIP;
            //Yii::app()->request->getUserHostAddress();

    }
}
?>