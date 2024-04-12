<?php

namespace App\Db;

class Db
{
    public array $data = [];

    public function __construct()
    {
        $storageFile = file_get_contents(__DIR__ . "/../../../storage/data.json");
        $this->data = json_decode($storageFile, true);
    }

    public function getData(): array {
        return $this->data;
    }
}