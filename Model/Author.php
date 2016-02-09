<?php

namespace Model;

use Components\Ancestor;

class Author extends Ancestor
{
    /**
     * @param const Имя таблицы в БД
     */
    const TABLE = 'authors';

    //public $id;

    /**
     * @param string Имя автора
     */
    public $name;
}