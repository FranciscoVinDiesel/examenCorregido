<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace backend\controllers;

use yii\rest\ActiveController;

class ApiController extends ActiveController
{
    public $modelClass = 'backend\models\Bebidas';//aqui va la tabla de los datos q se quieran mostrar
   

    public function actions() {
        $actions=parent::actions();
        unset($actions['index']);
        return $actions;
    }


    public function actionIndex($usuario,$opcion){
        if ($opcion=='consumo') {
            $query = \frontend\models\Bebidas::find(['idpersona'=>2])->select(['refrescos','valor'])->all()  ;
            return $query;
        }
        if ($opcion == 'saldo'){
            $query = \frontend\models\Bebidas::find()->where(['idpersona'=>$usuario])->sum('valor')  ;
            return round($query,2);
        }
    }
    
    
}