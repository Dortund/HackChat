<?php

namespace app\models;

use Yii;
use Parsedown;
use yii\helpers\HtmlPurifier;

/**
 * This is the model class for table "messages".
 *
 * @property integer $id
 * @property string $timestamp
 * @property string $content
 * @property integer $creator_id
 * @property boolean $is_visible
 */
class Message extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'messages';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['timestamp'], 'safe'],
            [['creator_id'], 'integer'],
            [['is_visible'], 'boolean'],
            [['content'], 'string', 'max' => 1024]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'timestamp' => 'Timestamp',
            'content' => 'Content',
            'creator_id' => 'Creator ID',
            'is_visible' => 'Is Visible',
        ];
    }

	public function beforeSave($insert) {
		if ($this->isNewRecord) {
			$this->is_visible = true;
			$this->creator_id = Yii::$app->user->identity->id;
		}
		return parent::beforeSave($insert);
	}
}
