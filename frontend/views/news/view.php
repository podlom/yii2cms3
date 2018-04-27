<?php

/* @var $this yii\web\View */

$formatter = \Yii::$app->formatter;

$this->params['breadcrumbs'][] = ['label' => 'News', 'url' => ['news/index']];
$this->params['breadcrumbs'][] = $news->title;

$newsHtml = '';

if (!empty($news)) {
    $newsHtml .= '<div>' .
        '<span class="date">' . $formatter->asDate($news->pubdate, 'long') . '</span>' .
        '<h2>' . $news->title . '</h2>' .
        '<div class="text">' . $news->body . '</div>' .
        '<div class="source">News source: <code>' . $news->source . '</code></div>' .
        '</div>';
}

echo $newsHtml;
