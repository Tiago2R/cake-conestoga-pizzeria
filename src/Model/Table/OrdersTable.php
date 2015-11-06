<?php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class OrdersTable extends Table
{
    public function initialize(array $config)
    {
        $this->addBehavior('Timestamp');
    }

    public function validationDefault(Validator $validator)
    {
        $validator
            //->notEmpty('user_id')
            //->requirePresence('user_id')
            ->notEmpty('size')
            ->requirePresence('size');

        return $validator;
    }

    public function isOwnedBy($orderId, $userId)
    {
        return $this->exists(['id' => $orderId, 'user_id' => $userId]);
    }
}