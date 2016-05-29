<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "guestbook".
 *
 * @property integer $id
 * @property string $name
 * @property string $email
 * @property string $ip
 * @property string $comment
 * @property string $imagelink
 */
class Guestbook extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'guestbook';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'email', 'ip', 'comment', 'imagelink'], 'required'],
            [['comment'], 'string'],
            [['name'], 'string', 'max' => 20],
            [['email', 'ip', 'imagelink'], 'string', 'max' => 200],
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
            'email' => 'Email',
            'ip' => 'Ip',
            'comment' => 'Comment',
            'imagelink' => 'Imagelink',
        ];
    }
}
