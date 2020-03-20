<?php
include_once 'db.php';
class User extends DB{
    private $nombre;
    private $username;
    private $tipouser;
    private $APaterno;
    private $AMaterno;
    
    public function userExists($user, $pass){
       
        $query = $this->connect()->prepare('SELECT * FROM usuarios WHERE username = :user AND password = :pass');
        $query->execute(['user' => $user, 'pass' => $pass]);
        if($query->rowCount()){
            return true;
        }else{
            return false;
        }
    }
    public function setUser($user){
        $query = $this->connect()->prepare('SELECT * FROM usuarios WHERE username = :user');
        $query->execute(['user' => $user]);
        foreach ($query as $currentUser) {
            $this->nombre = $currentUser['nombre'];
            $this->id = $currentUser['id'];
            $this->tipouser = $currentUser['tipouser'];
            $this->username = $currentUser['username'];
            $this->APaterno = $currentUser['APaterno'];
            $this->AMaterno = $currentUser['AMaterno'];
        }
    } 
    public function getId(){
        return $this->id;
    }
    public function getNombre(){
        return $this->nombre;
    }
    public function gettipouser(){
        return $this->tipouser;
    }
    public function getAPaterno(){
        return $this->APaterno;
    }
    public function getAMaterno(){
        return $this->AMaterno;
    }
    public function nombre(){
        return $this->nombre;
    }
}
?>