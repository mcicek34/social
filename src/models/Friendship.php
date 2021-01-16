<?php

namespace vendor\mcicek34\social\src\models;

use Yii;

/**
 * This is the model class for table "friendship".
 *
 * @property int $id
 * @property int|null $UserID
 * @property string|null $FriendID
 * @property string|null $Relation_start_date
 */
class Friendship extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'friendship';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [

            [['UserID'], 'integer'],
            [['FriendID', 'Relation_start_date'], 'string'],
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
            'FriendID' => 'Friend ID',
            'Relation_start_date' => 'Relation Start Date',
        ];
    }
}
