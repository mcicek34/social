<?php

namespace vendor\mcicek34\social\src\models;

use Yii;

/**
 * This is the model class for table "kullanicilar".
 *
 * @property int $id
 * @property int|null $UserID
 * @property int|null $F_UserID
 * @property string|null $Username
 * @property string|null $Password
 * @property string|null $Name
 * @property string|null $Surname
 * @property string|null $Age
 * @property string|null $Location
 * @property string|null $Mail
 * @property string|null $Gender
 */
class Kullanicilar extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kullanicilar';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [

            [['UserID', 'F_UserID'], 'integer'],
            [['Username', 'Password', 'Name', 'Surname', 'Age', 'Location', 'Mail', 'Gender'], 'string'],
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
            'F_UserID' => 'F User ID',
            'Username' => 'Username',
            'Password' => 'Password',
            'Name' => 'Name',
            'Surname' => 'Surname',
            'Age' => 'Age',
            'Location' => 'Location',
            'Mail' => 'Mail',
            'Gender' => 'Gender',
        ];
    }
}
