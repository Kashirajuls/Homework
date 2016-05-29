<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "products".
 *
 * @property integer $id
 * @property string $Product_name
 * @property string $Product_category
 * @property string $Product_price
 */
class Products extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'products';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Product_name', 'Product_category', 'Product_price'], 'required'],
            [['Product_name'], 'string', 'min' => 3, 'max' => 50],
            [['Product_category'], 'string', 'max' => 200],
            [['Product_price'], 'integer', 'integerOnly' => true],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'Product_name' => 'Product Name',
            'Product_category' => 'Product Category',
            'Product_price' => 'Product Price',
        ];
    }
}
