<?php
class Conexion{
    private $host;
    private $db;
    private $user;
    private $password;
    private $charset;
    public function __construct(){
     
     /*   $this->host     = 'localhost';
        $this->db       = 'u646101226_siplam_desiert';
        $this->user     = 'u646101226_BRAN';
        $this->password = "BRan1361";
        $this->charset  = 'utf8mb4';
   */
   
   
        $this->host     = 'localhost';
        $this->db       = 'evaluaciones';
        $this->user     = 'root';
        $this->password = "";
        $this->charset  = 'utf8mb4';
        

    }


    function conectarse(){
    $enlace=mysqli_connect($this->host, $this->user, $this->password, $this->db);
    if($enlace){
    }else{
        die('Error de conexio('. mysqli_connect_errno() . ') ' .mysqli_connect_error());
    }
    return($enlace);
}
}
?>

 


<?php


