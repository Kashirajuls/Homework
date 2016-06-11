<?php

namespace app\modules\blog\models;

use Yii;

/**
 * This is the model class for table "comments".
 *
 * @property integer $id
 * @property string $email
 * @property string $letter
 * @property string $updated_at
 * @property string $created_at
 * @property integer $user_id
 */
class Comments extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'comments';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['letter'], 'string'],
            [['updated_at', 'created_at'], 'safe'],
            [['user_id'], 'integer'],
            [['email'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'email' => 'Email',
            'letter' => 'Letter',
            'updated_at' => 'Updated At',
            'created_at' => 'Created At',
            'user_id' => 'User ID',
        ];
    }
}
