<?php
namespace frontend\controllers;

use yii\rest\ActiveController;
use yii\filters\Cors;

class PostsController extends  ActiveController
{
    public $enableCsrfValidation = false;
    public $modelClass = 'frontend\models\Post';

    /**
     * @inheritdoc
     */
    public function behaviors() {
        return array_merge(parent::behaviors(), [
            'corsFilter'  => [
                'class' => Cors::className(),
                'cors'  => [
                    'Origin'                           => ['*'],
                    'Access-Control-Request-Method'    => ['*'],
                    'Access-Control-Allow-Credentials' => true,
                    'Access-Control-Max-Age'           => 3600,
                ],
            ],

        ]);
    }

}