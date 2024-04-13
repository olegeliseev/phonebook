<?php

namespace App\Controllers;

use App\View\View;
use App\Models\Contact;
use App\Services\Helper;

class MainController
{
    public static function main()
    {
        $contacts = Contact::getAll();
        $view = new View(__DIR__ . '/../../templates');
        $view->renderHtml('main/main.php', $contacts);
    }

    public static function add()
    {
        if(empty($_POST['name']) && empty($_POST['number'])) {
            header("Location: /", true, 302);
        }

        $contact = new Contact();
        $contact->setId(Helper::generateRandomId());
        $contact->setColor(Helper::getHexColor($_POST['color']));
        $contact->setName(Helper::formatName($_POST['name']));
        $contact->setNumber($_POST['number']);
        $contact->save();

        header("Location: /", true, 302);
    }

    public static function delete()
    {
        $id = $_POST['id'];
        Contact::delete($id);
        
        header("Location: /", true, 302);
    }
}
