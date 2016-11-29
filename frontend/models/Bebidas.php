<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "bebidas".
 *
 * @property integer $id
 * @property string $refrescos
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
            [['refrescos'], 'required'],
            [['refrescos'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'refrescos' => 'Refrescos',
        ];
    }
}
