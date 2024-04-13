<?php

namespace App\Services;

class Helper
{
    public static function generateRandomId(): string
    {
        return bin2hex(random_bytes(8));
    }

    public static function formatName($name): string
    {
        if(strlen($name) >= 20) {
            $name = substr($name, 0, 17) . '...';
        }

        return $name;
    }

    public static function getHexColor($color): string
    {
        switch ($color) {
            case 'red':
                $hexcolor = '#db2828';
                break;
            case 'orange':
                $hexcolor = '#f2711c';
                break;
            case 'yellow':
                $hexcolor = '#fbbd08';
                break;
            case 'green':
                $hexcolor = '#21ba45';
                break;
            case 'blue':
                $hexcolor = '#2185d0';
                break;
            case 'pink':
                $hexcolor = '#e03997';
                break;
            default:
                $hexcolor = '#db2828';
        }

        return $hexcolor;
    }
}
