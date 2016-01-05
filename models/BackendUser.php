<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "backend_user".
 *
 * @property string $username
 * @property string $password
 * @property boolean $is_admin
 * @property integer $id
 */
class BackendUser extends \yii\db\ActiveRecord  implements \yii\web\IdentityInterface
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'backend_user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username'], 'required'],
            [['is_admin'], 'boolean'],
            [['username'], 'string', 'max' => 32],
            [['password'], 'string', 'max' => 64],
            [['username'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'username' => 'Username',
            'password' => 'Password',
            'is_admin' => 'Is Admin',
            'id' => 'ID',
        ];
    }

	public function beforeSave($insert) {
		BackendUser::find()->where('id != -1')->count() == 0 ? $this->is_admin = true : $this->is_admin = false;

		return parent::beforeSave($insert);
	}

	 public static function findIdentity($id)
	 {
	 	return static::findOne($id);
	 }
	 
	 public static function findIdentityByAccessToken($token, $type = null)
	 {
	 	throw new NotSupportedException();
	 }
	 
	 public function getId()
	 {
	 	return $this->id;
	 }
	 
	 public function getAuthKey()
	 {
		throw new NotSupportedException();
	 }
	 
	 public function validateAuthKey($authKey)
	 {
		throw new NotSupportedException();
	 }
	 public static function findByUsername($username)
	 {
	 	return self::findOne(['username'=>$username]);
	 }
	 
	 public function validatePassword($password)
	 {
	 	return $this->password === $password;
	 }
}
