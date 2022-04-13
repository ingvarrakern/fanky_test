<?php

class User {

    private $name;
    private $phone;
    private $email;
    private $created_at;
    private $updated_at;
    
    public function __construct($name, $phone, $email, $created_at) {
        $this->name = $name;
        $this->phone = $phone;
        $this->email = $email;
        $this->created_at = $created_at;
    }
    public function getName() {
        return $this->name;
    }

    public function getPhone() {
        return $this->phone;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getCreated_at() {
        return $this->created_at;
    }

    public function getUpdated_at() {
        return $this->updated_at;
    }

    public function setName($name): void {
        $this->name = $name;
    }

    public function setPhone($phone): void {
        $this->phone = $phone;
    }

    public function setEmail($email): void {
        $this->email = $email;
    }

    public function setCreated_at($created_at): void {
        $this->created_at = $created_at;
    }

    public function setUpdated_at($updated_at): void {
        $this->updated_at = $updated_at;
    }


}
