<?php

namespace app\models;

use Yii;
use yii\base\Model;

class EntryForm extends Model
{
    public $name;
    public $lastname;
    public $email;
    public $password;

    public function rules()
    {
        return [
            [['name', 'email','password'], 'required'],
            ['email', 'email'],
            ['email', 'unique','targetClass'=>'app\models\users'],
            ['password','string','min'=>2,'max'=>15],
            ['name','string'],
            ['lastname','string']
        ];
    }
    public function entrance()
    {
    	$user = new users();
    	$user->name = $this->name;
    	$user->lastname = $this->lastname;
    	$user->email = $this->email;
    	$user->password = $this->password;
    	return $user->save();
    }
}