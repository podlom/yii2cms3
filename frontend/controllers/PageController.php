<?php

namespace frontend\controllers;


use Yii;
use yii\web\Controller;
use common\models\Page;
use yii\web\NotFoundHttpException;


class PageController extends Controller
{
    public function actionView($slug)
    {
        $page = Page::findOne(['slug' => $slug, 'published' => 1]);

        if (empty($page)) {
            throw new NotFoundHttpException('Page with slug ' . $slug . 'was not found');
        }

        return $this->render('view', [
            'page' => $page,
        ]);
    }
}
