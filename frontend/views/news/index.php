<?php

/* @var $this yii\web\View */

$formatter = \Yii::$app->formatter;


$htmlNews = '';

if (!empty($allNews)) {
    foreach ($allNews as $an) {
        // $htmlNews .= '<pre>' . print_r($an, 1) . '</pre><br>';
        $htmlNews .= '<div>' .
            '<span class="date">' . $formatter->asDate($an['pubdate'], 'long') . '</span>' .
            '<h2><a href="/news/' . $an['slug'] . '">' . $an['title'] . '</a></h2>' .
            '<div class="text">' . $an['announce'] . '</div>' .
            '<a href="/news/' . $an['slug'] . '">Read more &gt;&gt;&gt;</a>' .
            '</div>';
    }
} else {
    $htmlNews = '<p>No news added yet.</p>';
}

echo $htmlNews;