<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "masters".
 *
 * @property int $id
 * @property string $fio
 *
 * @property Requests[] $requests
 */
class Masters extends \yii\db\ActiveRecord
{

    public function __tostring() {
        return $this->fio;
    }
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'masters';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['fio'], 'required'],
            [['fio'], 'string', 'max' => 511],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'fio' => 'Fio',
        ];
    }

    /**
     * Gets query for [[Requests]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRequests()
    {
        return $this->hasMany(Requests::class, ['master_id' => 'id']);
    }
}
