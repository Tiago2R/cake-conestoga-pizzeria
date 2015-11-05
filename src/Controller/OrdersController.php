<?php
namespace App\Controller;

class OrdersController extends AppController
{
	public function index()
    {
         $this->set('orders', $this->Orders->find('all'));
    }

    public function view($id = null)
    {
        $orders = $this->Orders->get($id);
        $this->set(compact('orders'));
    }
}