<?php

require __DIR__ . '/autoload.php';

$view = new \View\php\View();

$view->title = 'Мой крутой сайт'; //для примера с урока
$view->news = \Model\News::findAll(); //Получение массива новостей

$view->display(__DIR__ . '/View/templates/index.php');