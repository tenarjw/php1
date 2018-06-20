<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "osoby".
 *
 * @property int $id
 * @property string $nazwisko
 * @property string $stanowisko
 * @property string $kod
 */
class Osoby extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'osoby';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nazwisko', 'stanowisko', 'kod'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nazwisko' => 'Nazwisko',
            'stanowisko' => 'Stanowisko',
            'kod' => 'Kod',
        ];
    }
}
