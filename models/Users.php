<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "users".
 *
 * @property integer $id
 * @property string $first_name
 * @property string $last_name
 * @property integer $age
 * @property string $birth_date
 */
class Users extends \yii\db\ActiveRecord
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
            [['first_name', 'last_name', 'age', 'birth_date'], 'required'],
            [['age'], 'integer', 'max' => 100],
            [['first_name', 'last_name'], 'string', 'max' => 255],
            [['birth_date'], 'date', 'format' => 'd.M.yyyy', 'message' => 'Wrong! Example: 25.12.1980'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'first_name' => 'First Name',
            'last_name' => 'Last Name',
            'age' => 'Age',
            'birth_date' => 'Date Birth',
        ];
    }
}
