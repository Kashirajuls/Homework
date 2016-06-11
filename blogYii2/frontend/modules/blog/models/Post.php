<?php

namespace app\modules\blog\models;

use Yii;
use yii\web\UploadedFile;
use yii\helpers\BaseStringHelper;


/**
 * This is the model class for table "post".
 *
 * @property integer $id
 * @property string $title
 * @property string $description
 * @property string $updated_at
 * @property string $created_at
 * @property integer $user_id
 * @property string $img
 */
class Post extends \yii\db\ActiveRecord
{
    public $image;
    public $filename;
    public $string;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'post';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['description'], 'string'],
            [['updated_at', 'created_at'], 'safe'],
            [['user_id'], 'integer'],
            [['title', 'description',], 'required'],
            [['title'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'description' => 'Description',
            'updated_at' => 'Updated At',
            'created_at' => 'Created At',
            'user_id' => 'User ID',
            'img' => 'Img',
        ];
    }

    public function beforeSave($insert){
        if ($this->isNewRecord) {
            //generate & upload
            $this->string = substr(uniqid('img'), 0, 12); //imgRandomString
            $this->image = UploadedFile::getInstance($this, 'img');
            $this->filename = '/static/images/' . $this->string . '.' . $this->image->extension;
            $this->image->saveAs($this->filename);

            //save
            $this->img = '/' . $this->filename;
        }else{
            $this->image = UploadedFile::getInstance($this, 'img');
            if($this->image){
                $this->image->saveAs(substr($this->img, 1));
            }
        }

        return parent::beforeSave($insert);
    }
}
