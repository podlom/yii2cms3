<?php

namespace common\models;


use Yii;
use yii\behaviors\TimestampBehavior;
use common\models\PageCategory;


/**
 * This is the model class for table "page".
 *
 * @property integer $id
 * @property string $slug
 * @property string $title
 * @property string $announce
 * @property string $body
 * @property string $lang
 * @property integer $published
 * @property string $created_at
 * @property string $updated_at
 * @property integer $sort
 * @property integer $category_id
 *
 * @property PageCategory $category
 */
class Page extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'page';
    }

    /**
     * Поведения модели
     * @return array
     */
    public function behaviors()
    {
        return [
            // автозаполнение полей created_at и updated_at
            'timestamp' => [
                'class' => TimestampBehavior::className(),
                'value' => function () {return date('Y-m-d H:i:s');},
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['slug', 'title', 'body'], 'required'],
            [['announce', 'body'], 'string'],
            [['published', 'sort', 'category_id'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['slug', 'title'], 'string', 'max' => 255],
            [['lang'], 'string', 'max' => 2],
            [['slug'], 'unique'],
            [['category_id'], 'default', 'value' => 0],
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
            'announce' => Yii::t('app', 'Announce'),
            'body' => Yii::t('app', 'Body'),
            'lang' => Yii::t('app', 'Lang'),
            'published' => Yii::t('app', 'Published'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
            'sort' => Yii::t('app', 'Sort'),
            'category_id' => Yii::t('app', 'Category ID'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(PageCategory::className(), ['id' => 'category_id']);
    }
}
