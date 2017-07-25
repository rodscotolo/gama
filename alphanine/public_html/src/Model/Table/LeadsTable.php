<?php


// src/Model/Table/LeadsTable.php

namespace App\Model\Table;

use Cake\ORM\Table;

class LeadsTable extends Table
{
    public function initialize(array $config)
    {
        $this->addBehavior('Timestamp');
    }

    public function validationDefault(Validator $validator)
    {
       $validator
           ->notEmpty('nome')
           ->notEmpty('email');

       return $validator;
    }
}
