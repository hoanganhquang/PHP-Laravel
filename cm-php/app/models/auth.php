<?php

class Auth extends Model
{
    public function login()
    {
        // $data = "email = '$email' and password = '$password";

        // $this->db->selectOne("users", );
    }

    public function register($data)
    {
        $result = $this->db->createOne("users", "name, email, password", $data);

        return $result;
    }
}
