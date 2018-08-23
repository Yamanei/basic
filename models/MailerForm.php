<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\db\ActiveRecord;

class MailerForm extends Model
{
  public $name;
  public $email;
  public $birthday;
  public $gender;
  public $city;

    public function rules()
    {
        return [
          // name, email, subject and body are required
          [['name', 'email', 'birthday', 'gender', 'city'], 'required'],
          // email has to be a valid email address
          ['email', 'email'],
        ];
    }

    public function contact(email)
    {
        if ($this->validate()) {
            Yii::$app->mailer->compose()
                ->setTo($email)
                ->setFrom(['monah-ice-fire@yandex.ru' => $this->name])
                ->setSubject($this->name)
                ->setTextBody($this->gender)
                ->send();
            return true;
        }
        return false;
    }
}
