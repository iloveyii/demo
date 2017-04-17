<?php

namespace frontend\controllers;
use yii\rest\ActiveController;
use yii\filters\Cors;

class HobbysController extends ActiveController
{
    public $enableCsrfValidation = false;
    public $modelClass = 'frontend\models\Hobby';

    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        $behaviors = parent::behaviors();

        // remove authentication filter
        $auth = $behaviors['authenticator'];
        unset($behaviors['authenticator']);

        // add CORS filter
        $behaviors['corsFilter'] = [
            'class' => Cors::className(),
        ];

        // re-add authentication filter
        $behaviors['authenticator'] = $auth;
        // avoid authentication on CORS-pre-flight requests (HTTP OPTIONS method)
        $behaviors['authenticator']['except'] = ['options'];

        return $behaviors;
    }
}
