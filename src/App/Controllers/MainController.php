<?php

namespace App\Controllers;

use App\View\View;
use App\Models\Contact;

class MainController
{
    protected $view;

    public function __construct()
    {
        $this->view = new View(__DIR__ . '/../../templates');
    }

    public function main()
    {
        $contacts = Contact::getAll();
        $this->view->renderHtml('main/main.php', $contacts);
    }
}
