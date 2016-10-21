<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property integer $user_id
 * @property string $loginname
 * @property string $password
 * @property string $name
 * @property integer $depart_id
 * @property integer $priority_id
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['depart_id', 'priority_id'], 'integer'],
            [['loginname', 'password', 'name'], 'string', 'max' => 250],
        ];
    }

    /**
     * @inheritdoc
     */
   public function attributeLabels() {
        return [
            'username' => 'รหัสผู้ใช้',
            'password' => 'รหัสผ่าน',
        ];
    }
}
