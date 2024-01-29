<?php

namespace app\controllers;
use yii\web\Controller;


class FirstController extends Controller
{
    public function actionIndex(){
        echo "yes"; 
    }
    public function actionTest(){
        //$this->layout =false; // with layout
        
        // return $this->renderPartial('test');
        $response = [];
        $response['name']= ['codeImprove'];
        $response['list']= ['test','demo','crud'];
        return $this->render('testy',$response);
    }
    public function actionDemoFirst(){
        echo "actionDemofor hyphon - insertion First"; die;
    }
    public function actionDemo_second(){
        echo "actionDemofor underscore _ insertion second"; die;
    }
}
