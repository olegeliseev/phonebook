<?php

namespace App\Controllers;

use App\View\View;
use App\Models\Contact;

class MainController
{
    public static function main()
    {
        $contacts = Contact::getAll();
        $view = new View(__DIR__ . '/../../templates');
        $view->renderHtml('main/main.php', $contacts);
    }
}
