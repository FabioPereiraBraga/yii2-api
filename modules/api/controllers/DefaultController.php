<?php

namespace app\modules\api\controllers;

use yii\rest\ActiveController;
use yii\helpers\ArrayHelper;
use yii\filters\auth\HttpBearerAuth;
use yii\filters\auth\QueryParamAuth;
use filsh\yii2\oauth2server\filters\ErrorToExceptionFilter;
use filsh\yii2\oauth2server\filters\auth\CompositeAuth;

/**
 * Default controller for the `api` module
 */
class DefaultController extends ActiveController
{
    public $modelClass = 'app\models\Noticia';

    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return ArrayHelper::merge(parent::behaviors(), [
            'authenticator' => [
                'class' => CompositeAuth::className(),
                'authMethods' => [
                    ['class' => HttpBearerAuth::className()],
                    ['class' => QueryParamAuth::className(), 'tokenParam' => 'accessToken'],
                ]
            ],
            'exceptionFilter' => [
                'class' => ErrorToExceptionFilter::className()
            ],
        ]);
    }

    public  function actions()
    {
       $parent =  parent::actions();

      //  unset($parent['delete'],$parent['create']);

        return $parent;
    }
    
}
