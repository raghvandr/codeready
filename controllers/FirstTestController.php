<?php

namespace app\controllers;
use yii\web\Controller;


class FirstTestController extends Controller
{
    public function actionIndex(){
        echo "2yes"; die;
    }
    public function actionTest(){
        echo "T2ests"; die;
    }
    public function actionDemoFirst(){
        echo "a2ctionDemofor hyphon - insertion First"; die;
    }
    public function actionDemo_second(){
        echo "2Test actionDemofor underscore _ insertion second"; die;
    }
}
