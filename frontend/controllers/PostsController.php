<?php
namespace frontend\controllers;

use yii\rest\ActiveController;


class PostsController extends  ActiveController
{
    public $modelClass = 'frontend\models\Post';
}