<?php

namespace frontend\controllers;


use yii\web\Controller;
use yii\web\NotFoundHttpException;
use common\models\News;


class NewsController extends Controller
{
    public function actionIndex()
    {
        $allNews = News::find()
            ->where(['published' => 1])
            ->orderBy(['sort' => SORT_DESC])
            ->asArray()
            ->limit(7)
            ->all();

        return $this->render('index', [
            'allNews' => $allNews,
        ]);
    }

    public function actionView($slug)
    {
        $news = News::find()
            ->where(['published' => 1, 'slug' => $slug])
            ->one();

        if (empty($news)) {
            throw new NotFoundHttpException('News with slug ' . $slug . ' was not found');
        }

        return $this->render('view',
            compact('news')
        );
    }

}
