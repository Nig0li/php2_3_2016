<?php

require __DIR__ . '/../autoload.php';

$view = new \View\php\View();
$view->article = \Model\News::findById($_GET['id']); //сохраняем в свойство article опеределенную новость по id

$view->display(__DIR__ . '/../View/templates/article.php'); //подключаем шаблон
