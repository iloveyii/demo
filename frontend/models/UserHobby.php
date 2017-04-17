<?php

namespace frontend\models;
use yii\db\ActiveRecord;
use Yii;

/**
 * This is the model class for table "user_hobby".
 *
 * @property integer $id
 * @property integer $user_id
 * @property integer $hobby_id
 */
class UserHobby extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user_hobby';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'hobby_id'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'hobby_id' => 'Hobby ID',
        ];
    }
}
