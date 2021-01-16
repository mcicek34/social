<?php

namespace vendor\mcicek34\social\src\models;

use Yii;

/**
 * This is the model class for table "share".
 *
 * @property int $id
 * @property int|null $UserID
 * @property string|null $Date
 * @property string|null $Text
 */
class Share extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'share';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['UserID'], 'integer'],
            [['Date', 'Text'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'UserID' => 'User ID',
            'Date' => 'Date',
            'Text' => 'Text',
        ];
    }
}
