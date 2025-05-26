<?php

namespace App\User\Controller;

use App\Controller\BaseController;

class UserController extends BaseController
{
    public function list()
    {
        // a la place de return un array appeler une méthode
        return $this->render('pages/users/list.php');
    }
}