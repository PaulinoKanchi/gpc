       
<?php
include_once 'includes/user.php';
include_once 'includes/usersession.php';
$userSession = new UserSession();
$user = new User();


if(isset($_SESSION['user'])){
    //echo "Hay sesión";
    $user->setUser($userSession->getCurrentUser());
    //include_once 'sistema/index.php';
 
    header("location: sistema/index.php");

}else if(isset($_POST['username']) && isset($_POST['password'])){
    
    //echo "Validación de login";
    $userForm = $_POST['username'];
    $passForm = $_POST['password'];  
    if($user->userExists($userForm, $passForm)){
        //echo "usuario validado";
        $userSession->setCurrentUser($userForm);
        $user->setUser($userForm);
        //include_once 'sistema/index.php';
        
     
        $tipoo=$user->getTipoUser(); 
        $id=$user->getId();
        $nombre=$user->getnombre();
        $APaterno=$user->getAPaterno();
        $AMaterno=$user->getAMaterno();
        if($user->getTipoUser()=="Administrador"){
             
            header("location: ../admin/sistema/index.php?id=$id");

            }    else if($user->getTipoUser()=="Observador"){
           header("location: ../admin/sistema/indexobser.php?id=$id");
           
        
        }

        else if($user->getTipoUser()=="Legal"){
            header("location: ../admin/sistema/indexlegal.php?id=$id");
         }
         else if($user->getTipoUser()=="Tecnico"){
            header("location: ../admin/sistema/indextecnico.php?id=$id");
         }
         else if($user->getTipoUser()=="Economico"){
            header("location: ../admin/sistema/indexeconomico.php?id=$id");
         }

        
    }else{
        //echo "nombre de usuario y/o password incorrecto";
        $errorLogin = "Nombre de usuario y/o password es incorrecto";
        include_once 'vistas/login.php';
    }
}else{
    //echo "Login";
    include_once 'vistas/login.php';
}
?>