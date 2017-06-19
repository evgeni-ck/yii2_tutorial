<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 19.06.17
 * Time: 23:39
 */

namespace app\controllers;
use yii\web\Controller;
use app\models\Users;

class UsersController extends Controller
{
    public function actionIndex(){
        $users = Users::find()->all();

        return $this->render('index', ['users'=>$users]);
    }
}