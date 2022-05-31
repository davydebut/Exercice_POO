<?php


class User 
{
    public $pseudo;
    public $email;
    public $pwd; // Mot de passe

    public function __construct($pseudo, $email, $pwd)
    {
        $this->pseudo = $pseudo;
        $this->email = $email;
        $this->pwd = $pwd;
    }

    public function getPseudo()
    {
        return $this->pseudo;
    }

    public function setPseudo($pseudo)
    {
        $this->pseudo = $pseudo;
    }

    public function getPwd()
    {
        return $this->pwd;
    }

    public function setPwd($pwd)
    {
        $this->pwd = $pwd;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function __toString()
    {
        return $this->pseudo;
    }


}