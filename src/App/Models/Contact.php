<?php

namespace App\Models;

use App\Db\Db;

class Contact 
{
    protected int $id;

    protected string $color;

    protected string $name;

    protected string $number;

    public static function getAll(): array {
        $db = new Db();
        $contacts['contacts'] = $db->getData();
        return $contacts;
    }

    public function save() {
        $db = new Db();
    }

    public function delete() {
        $db = new Db();
    }
}