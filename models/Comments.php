<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "comments".
 *
 * @property integer $id
 * @property string $name
 * @property string $title
 * @property string $text
 * @property string $data
 * @property string $ip
 * @property integer $censure
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
            [['name', 'title', 'text'], 'required'],
            [['text'], 'string'],
            [['data'], 'safe'],
            [['censure'], 'integer'],
            [['name'], 'string', 'max' => 20],
            [['title'], 'string', 'max' => 100],
            [['ip'], 'string', 'max' => 15]
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
            'title' => 'Title',
            'text' => 'Text',
            'data' => 'Data',
            'ip' => 'Ip',
            'censure' => 'Censure',
        ];
    }
}
