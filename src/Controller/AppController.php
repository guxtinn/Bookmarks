<?php
declare(strict_types=1);
namespace App\Controller;

use Cake\Controller\Controller;

class AppController extends Controller
{
    public function initialize(): void
    {
        $this->loadComponent('Flash');
        $this->loadComponent('Auth', [
            'authorize' => 'Controller',
            'authenticate' => [
                'Form' => [
                    'fields' => [
                        'username' => 'email',
                        'password' => 'password'
                    ]
                ]
            ],
            'loginAction' => [
                'controller' => 'Users',
                'action' => 'login'
            ]
        ]);

        // Permite a ação display, assim nosso pages controller
        // continua a funcionar.
        $this->Auth->allow(['display']);
    }
    public function isAuthorized($user)
    {
        return false;
    }
}
