<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "bebidas".
 *
 * @property integer $id
 * @property integer $idpersona
 * @property string $refrescos
 * @property double $valor
 */
class Bebidas extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'bebidas';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idpersona', 'refrescos', 'valor'], 'required'],
            [['idpersona'], 'integer'],
            [['refrescos'], 'string'],
            [['valor'], 'number'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'idpersona' => 'Idpersona',
            'refrescos' => 'Refrescos',
            'valor' => 'Valor',
        ];
    }
}
