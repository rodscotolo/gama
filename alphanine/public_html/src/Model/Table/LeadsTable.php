<?php


// src/Model/Table/LeadsTable.php

namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\ORM\Rule\IsUnique;

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

    //  $validator->add($validator->IsUnique(['ip']));

       return $validator;
    }
}
