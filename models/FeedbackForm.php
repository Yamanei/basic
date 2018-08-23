<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "Feedback".
 *
 * @property string $name
 * @property string $email
 * @property string $birthday
 * @property int $gender
 * @property string $city
 */
class FeedbackForm extends \yii\db\ActiveRecord
{

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Feedback';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'email', 'birthday', 'gender', 'city'], 'required'],
            [['gender'], 'integer'],
            [['name'], 'string', 'max' => 50],
            [['email', 'birthday', 'city'], 'string', 'max' => 45],
            [['name'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'name' => 'ФИО',
            'email' => 'Email',
            'birthday' => 'Дата рождения',
            'gender' => 'Пол',
            'city' => 'Город',
        ];
    }
}
