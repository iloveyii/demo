<?php

namespace frontend\controllers;

use Yii;
use frontend\models\Post;
use yii\data\ActiveDataProvider;
use yii\db\ActiveRecord;
use yii\helpers\ArrayHelper;
use yii\helpers\Json;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\Response;
/**
 * PostController implements the CRUD actions for Post model.
 */
class Base extends Controller
{
    /**
     * @inheritdoc
     * Check if json get param is set return json data
     * @return json | view
     */
    public function render($view, $params = [])
    {
        if( ! empty($params)) {
            if(Yii::$app->request->get() && Yii::$app->request->get('format') == 'json') {
                \Yii::$app->response->format = Response::FORMAT_JSON;

                foreach($params as $key => $value) {
                    if($value instanceof ActiveRecord) {
                        $jsonArray[$key] = ArrayHelper::toArray($value);
                    } elseif(is_array($value)) {
                        foreach($value as $k => $v) {
                            $jsonArray[$k] = ArrayHelper::toArray($v);
                        }
                    } elseif($value instanceof ActiveDataProvider) {
                        $models = $value->getModels();
                        foreach($models as $k => $v) {
                            $jsonArray[$k] = ArrayHelper::toArray($v);
                        }
                    }
                }

                echo Json::encode($jsonArray);
                die;
            }
        }

        return parent::render($view, $params);
    }

}