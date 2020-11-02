<?php

class Adm
{
    public $id;
    public $email;
    public $pass;

    function __construct($id)
    {
        global $db;
        $id = str_secure($id);

        $req = $db->prepare('SELECT * FROM adminsita WHERE id_adminsita = ?');
        $req->execute([$id]);
        $data = $req->fetch();

        $this->id       = $id;
        $this->email    = $data['email'];
        $this->pass  = $data['pass'];
    }

    static function getAdm($id)
    {
        global $db;
        $id = str_secure($id);

        $req = $db->prepare('SELECT * FROM adminsita WHERE id_adminsita = ?');
        $req->execute([$id]);
        return $req->fetch();
    }

    static function getEmail($email)
    {
        global $db;
        $req = $db->prepare('SELECT * FROM adminsita WHERE email = ?');
        $req->execute([$email]);
        return $req->fetch();
    }

    static function getEmailPass($email, $pass)
    {
        global $db;
        $req = $db->prepare('SELECT * FROM  adminsita WHERE email = ? AND pass = ?');
        $req->execute([$email, $pass]);
        return $req->fetch();
    }
}
