<?php

namespace App\Models;

class Users {
    private int $id;
    private string $name;
    private bool $isAdmin;
    private string $createdAt;

    public function __construct($id, $name, $isAdmin, $createdAt){
        $this->id = $id;
        $this->name = $name;
        $this->isAdmin = $isAdmin;
        $this->createdAt = $createdAt;
    }

    public function id(){
        return $this->id;
    }

    public function name(){
        return $this->name;
    }

    public function isAdmin(){
        return ($this->isAdmin) ? true : false;
    }

    public function createdAt(){
        return ($this->createdAt);
    }
}