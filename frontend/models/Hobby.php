<?php

namespace frontend\models;
use yii\db\ActiveRecord;

use Yii;

/**
 * This is the model class for table "hobby".
 *
 * @property integer $id
 * @property string $name
 * @property string $description
 */
class Hobby extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'hobby';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'string', 'max' => 50],
            [['name'], 'safe'],
            [['description'], 'string', 'max' => 200],
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
            'description' => 'Description',
        ];
    }

}
