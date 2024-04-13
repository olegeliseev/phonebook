<?php

namespace App\Models;

use App\Db\Db;

class Contact 
{
    protected string $id;

    protected string $color;

    protected string $name;

    protected string $number;

    public function getId(): string
    {
        return $this->id;
    }

    public function setId($id): void
    {
        $this->id = $id;
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function setColor($color): void
    {
        $this->color = $color;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName($name): void
    {
        $this->name = $name;
    }

    public function getNumber(): string
    {
        return $this->number;
    }

    public function setNumber($number): void
    {
        $this->number = $number;
    }

    public static function getAll(): array 
    {
        $db = new Db();
        $contacts['contacts'] = $db->getData();
        return $contacts;
    }

    public static function delete(string $id): void 
    {
        $db = new Db();
        $db->deleteData($id);
    }

    public function save(): void
    {
        $db = new Db();
        $arrayObj = [
            'id' => $this->getId(),
            'color' => $this->getColor(),
            'name' => $this->getName(),
            'number' => $this->getNumber()
        ];
        $db->saveData($arrayObj);
    }
}