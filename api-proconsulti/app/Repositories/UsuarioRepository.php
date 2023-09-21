<?php

namespace App\Repositories;

use App\Models\Usuario;

class UsuarioRepository {

    private $entity;

    public function __construct(Usuario $usuario) {
        $this->entity = $usuario;
    }

    public function create(array $data) {
        return $this->entity->create($data);
    }
}
