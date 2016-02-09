<?php

namespace Model;

use Components\Ancestor;
use Components\Db;
use Components\ThisArrayAccess;

class News extends Ancestor implements \ArrayAccess
{
    use ThisArrayAccess;

    const TABLE = 'news';

    public $id;
    public $title;
    public $text;
    public $author_id;

    /**
     * Метод, получающий int $limit последних новостей
     * @param int $limit
     * @return mixed object News
     */
    public static function getThreeLastRecord(int $limit)
    {
        $sql = 'SELECT * FROM ' . static::TABLE . ' ORDER BY id DESC LIMIT ' . $limit;
        //var_dump($sql);
        $db = Db::instance();
        return $db->query($sql, static::class);
    }

    /**
     * Метод, возвращающий объект класса Author
     * @return object Author or bool
     */
    public function getAuthor()
    {
        if (!empty($this->author_id)) {
            $author = Author::findById($this->author_id);
            return $author;
        } else {
            return false;
        }
    }

}