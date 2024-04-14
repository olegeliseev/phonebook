<?php

namespace App\Db;

class Db
{
    protected ?array $data = [];

    protected string $path = __DIR__ . "/../../../storage/data.json";

    public function __construct()
    {
        if(!file_exists($this->path)) {
            file_put_contents($this->path, '[]');
        }

        $storageFile = file_get_contents($this->path);
        $this->data = json_decode($storageFile, true);
    }

    public function getData(): ?array 
    {
        return $this->data;
    }

    public function saveData(array $obj): void
    {
        if(empty($this->data)) {
            $this->data = [];
        }
        array_push($this->data, $obj);
        $jsonNewData = json_encode($this->data, JSON_PRETTY_PRINT);
        file_put_contents($this->path, $jsonNewData);
    }

    public function deleteData(string $id): void
    {
        $this->data = array_filter($this->data, function($contact) use ($id) {
            return !($contact['id'] === $id);
        }); 

        $jsonNewData = json_encode($this->data, JSON_PRETTY_PRINT);
        file_put_contents($this->path, $jsonNewData);
    }
}