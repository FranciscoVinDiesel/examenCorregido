<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "persona".
 *
 * @property integer $id
 * @property integer $iduser
 * @property string $nombre
 * @property string $departamento
 */
class Persona extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'persona';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['iduser', 'nombre'], 'required'],
            [['iduser'], 'integer'],
            [['departamento'], 'string'],
            [['nombre'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'iduser' => 'Iduser',
            'nombre' => 'Nombre',
            'departamento' => 'Departamento',
        ];
    }
}
