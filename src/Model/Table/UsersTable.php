<?php

// src/Model/Table/UsersTable.php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class UsersTable extends Table
{

    public function validationDefault(Validator $validator)
    {
        return $validator
            ->notEmpty('username', __('Nombre de usuario requerido'))
            ->notEmpty('password', __('Contraseña requerida'))
            ->notEmpty('role', __('Rol requerido'))
            ->add('role', 'inList', [
                'rule' => ['inList', ['superadmin','admin', 'profesor']],
                'message' =>  __('Por favor, introduce un rol válido')
            ]);
    }

}