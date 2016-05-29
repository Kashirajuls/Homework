<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "users".
 *
 * @property integer $id
 * @property string $name
 * @property string $lastname
 * @property string $email
 * @property string $password
 * @property string $date_registration
 *
 * @property Posts[] $posts
 */
class Users extends \yii\db\ActiveRecord implements \yii\web\IdentityInterface
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'users';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'lastname', 'email', 'password'], 'required'],
            [['date_registration'], 'safe'],
            [['name', 'lastname', 'email'], 'string', 'max' => 50],
            [['password'], 'string', 'max' => 40],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'lastname' => 'Lastname',
            'email' => 'Email',
            'password' => 'Password',
            'date_registration' => 'Date Registration',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPosts()
    {
        return $this->hasMany(Posts::className(), ['author_id' => 'id']);
    }

    public function getUsers()
    {
        return $this->hasMany(Users::className(), ['author_id' => 'id']);
    }

    public function findByEmail($email)
    {
        return self::findOne(['email'=>$email]);
    }

    public function validatePassword($password)
    {
        return $this->password === $password;
    }

    public function validateAuthKey($authKey){
        throw new NotSupportedException();//I don't implement this method because I don't have any access token column in my database
    }
    public function getAuthKey(){
        throw new NotSupportedException();//I don't implement this method because I don't have any access token column in my database
    }
 
    public static function findIdentityByAccessToken($token, $type = null){
        throw new NotSupportedException();//I don't implement this method because I don't have any access token column in my database
    }
    public function getId(){
        throw new NotSupportedException();//I don't implement this method because I don't have any access token column in my database
    }
    public static function findIdentity($id){
        throw new NotSupportedException();//I don't implement this method because I don't have any access token column in my database
    }
}