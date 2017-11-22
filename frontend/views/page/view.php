<?php

/* @var $this yii\web\View */
/* @var $page common\models\Page */

if (!empty($page)) {
    echo '<h1>' . $page->title . '</h1>';
    echo '<div class="page-content">' . $page->body . '</div>';
    // echo '<pre>' . print_r($page) . '</pre>';
}
