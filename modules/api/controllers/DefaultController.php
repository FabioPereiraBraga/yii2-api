<?php

namespace app\modules\api\controllers;

use yii\rest\ActiveController;
use yii\web\Controller;

/**
 * Default controller for the `api` module
 */
class DefaultController extends ActiveController
{
    public $modelClass = 'app\models\Noticia';

    public  function actions()
    {
       $parent =  parent::actions();

      //  unset($parent['delete'],$parent['create']);

        return $parent;
    }
    
}
