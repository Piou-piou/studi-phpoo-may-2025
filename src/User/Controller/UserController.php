<?php

namespace App\User\Controller;

class UserController
{
    public function list()
    {
        // a la place de return un array appeler une méthode
        /*return $this->render('pages/users/list.php', [
            'users' => $users,
        ]);*/

         return [
            'template' => 'pages/users/list.php',
        ];
    }
}