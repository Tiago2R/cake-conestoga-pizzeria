<?php
namespace App\Controller;

class UsersController extends AppController
{
	public function index()
    {
         $this->set('users', $this->Users->find('all'));
    }

    public function view($id = null)
    {
        $users = $this->Users->get($id);
        $this->set(compact('users'));
    }
}