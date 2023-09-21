<?php

namespace App\Services;

use App\Repositories\UsuarioRepository;

class UsuarioService {

    protected $repository;

    public function __construct(UsuarioRepository $repository) {
        $this->repository = $repository;
    }


    public function create(array $data) {
        return $this->repository->create($data);
    }
}
