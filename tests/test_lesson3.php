<?php

/**
 * Тест ДЗ
 */

/* -- Проверка метода getAuthor(); -- */
/*
$art = \Model\News::findById(3); //Получаем определенную новость из БД
//var_dump($art);
$art->author_id = 0; //Присваиваем пустое значение
$aut = $art->getAuthor(); //Пытаемся найти автора
var_dump($aut); //результат false
*/


/**
 * Повтор работы на уроке.
 */

/*
$view = new \View\php\View();
$view->title = 'Мой крутой сайт';
$view->news = \Model\News::findAll();

echo count($view);

$view->display(__DIR__ . '/../View/templ/index.php');
*/

/* -- Реализация домашней работы Index.php в Lesson_2  -- */

/*
use Model\News;

require __DIR__ . '/autoload.php';

//$news = News::findAll(); //Получили массив ВСЕХ новостей
//var_dump($news);

$news = News::getThreeLastRecord(3); //Получаем массив последних трех новостей
//var_dump($news);
include __DIR__ . '/View/templates/index.php'; //подключаем шаблон
*/