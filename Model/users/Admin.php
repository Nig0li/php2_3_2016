<?php

namespace Model\users;

use Model\News;

class Admin
{
    /**
     * Метод, проверки id новости
     * @param int id модели
     * @return new object News or object News from BD
     */
    public function verify(int $id)
    {
        if (empty($id)) {
            $res = new News();
        } else {
            $res = News::findById($id);
        }
        return $res;
    }

    /**
     * Метод - добавление новой новости в БД
     * @param array $mass
     * @return bool
     */
    public function insertNews($mass)
    {
        //var_dump($mass);
        $news = new News();
        $news->title = strip_tags($mass['title']);
        $news->text = strip_tags($mass['text']);
        //var_dump($news);
        return $news->save();
    }

    /**
     * Метод -обновление существующей новости
     * @param array $mass
     * @return bool
     */
    public function updateNews($mass)
    {
        $id = strip_tags($mass['id']);
        $news = News::findById($id);
        $news->id = $id;
        $news->title = strip_tags($mass['title']);
        $news->text = strip_tags($mass['text']);
        //var_dump($news);
        return $news->save();
    }

    /**
     * Метод - удаление новости по id
     * @param int $id
     */
    public function deleteNews(int $id)
    {
        $news = News::findById($id);
        if (false !== $news) {
            $news->delete();
        }
    }
}