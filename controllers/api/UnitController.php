<?php


namespace app\controllers\api;


use app\models\Unit;
use yii\rest\ActiveController;

class UnitController extends ActiveController
{
    public $modelClass = Unit::class;
}
