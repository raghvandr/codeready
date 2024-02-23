<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
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
                'class' => VerbFilter::class,
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
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

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * Displays blog.php.
     *
     * @return string
     */
    public function actionBlog()
    {
        return $this->render('blog.php');
    }

    /**
     * Displays blog-details.php.
     *
     * @return string
     */
    public function actionBlogdetails()
    {
        return $this->render('blog-details.php');
    }

    /**
     * Displays services-detailsweb.php.
     *
     * @return string
     */
    public function actionServicesweb()
    {
        return $this->render('services-details-web');
    }

    /**
     * Displays services-detailsai.php.
     *
     * @return string
     */
    public function actionServicesai()
    {
        return $this->render('services-details-dsai');
    }

    /**
     * Displays services-details.php.
     *
     * @return string
     */
    public function actionServicescloud()
    {
        return $this->render('services-details-cloud');
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
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

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }

    /**
     * Displays courses page.
     *
     * @return string
     */
    public function actionCourses()
    {
        return $this->render('courses');
    }

    public function actionDevelopment()
    {
        return $this->render('development');
    }

    public function actionDsai()
    {
        return $this->render('dsai');
    }
    public function actionCloud()
    {
        return $this->render('cloud');
    }
}
