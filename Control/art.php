<?php

require __DIR__ . '/../autoload.php';

$newsOne = \Model\News::findById($_GET['id']); //Получили одну новость по id
$view = new \View\php\View();
$view->article = $newsOne; //в свойство article сохраняем объект Новость
$view->author = $newsOne->getAuthor(); //в свойство author сохраняем объект Автор

$view->display(__DIR__ . '/../View/templ/article.php'); //подключаем шаблон
