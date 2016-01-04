<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "backend_user".
 *
 * @property string $username
 * @property string $password
 * @property string $authKey
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
            [['is_admin'], 'boolean'],
            [['username'], 'string', 'max' => 32],
            [['password'], 'string', 'max' => 64],
            [['authKey'], 'string', 'max' => 50]
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
            'authKey' => 'Auth Key',
            'is_admin' => 'Is Admin',
            'id' => 'ID',
        ];
    }

	public static function findIdentity($id)
	 {
	 return static::findOne($id);
	 }
	 
	 public static function findIdentityByAccessToken($token, $type = null)
	 {
	 throw new NotSupportedException();//I don't implement this method because I don't have any access token column in my database
	 }
	 
	 public function getId()
	 {
	 return $this->id;
	 }
	 
	 public function getAuthKey()
	 {
	 return $this->authKey;//Here I return a value of my authKey column
	 }
	 
	 public function validateAuthKey($authKey)
	 {
	 return $this->authKey === $authKey;
	 }
	 public static function findByUsername($username)
	 {
	 return self::findOne(['username'=>$username]);
	 }
	 
	 public function validatePassword($password)
	 {
echo "asdfasdfasdfasdfasdfasdf<br><br><br><br><br><br><br><br><br>asdf;lafdal;fkja;lsjfk<br>";
echo $password . " --- " . $this->password;
	 return $this->password === $password;
	 }
}
