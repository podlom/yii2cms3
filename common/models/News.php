<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "news".
 *
 * @property integer $id
 * @property string $slug
 * @property string $title
 * @property string $pubdate
 * @property string $announce
 * @property string $body
 * @property string $source
 * @property string $lang
 * @property integer $published
 * @property string $created_at
 * @property string $updated_at
 * @property string $img_url
 * @property integer $sort
 */
class News extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'news';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['slug', 'title', 'pubdate', 'announce', 'body', 'source'], 'required'],
            [['pubdate', 'created_at', 'updated_at'], 'safe'],
            [['announce', 'body'], 'string'],
            [['published', 'sort'], 'integer'],
            [['slug', 'title', 'source', 'img_url'], 'string', 'max' => 255],
            [['lang'], 'string', 'max' => 2],
            [['slug'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'slug' => Yii::t('app', 'Slug'),
            'title' => Yii::t('app', 'Title'),
            'pubdate' => Yii::t('app', 'Pubdate'),
            'announce' => Yii::t('app', 'Announce'),
            'body' => Yii::t('app', 'Body'),
            'source' => Yii::t('app', 'Source'),
            'lang' => Yii::t('app', 'Lang'),
            'published' => Yii::t('app', 'Published'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
            'img_url' => Yii::t('app', 'Img Url'),
            'sort' => Yii::t('app', 'Sort'),
        ];
    }
}
