<?php
    $log = include 'connexion.html';
    $identifiants = $_POST["user"];
    $email = $_POST["email"];

    $mdp = $_POST["mdp1"];
    $confmdp = $_POST["mdpconf"];

    function exist($user){
        $f= file("inscription.txt");
    // print_r($f);
        foreach ($f as $k => $v){
            $r=explode(",",$v);
            if ($user == trim($r[0])){
                return TRUE;
            }
        }        
        return FALSE;
    }

    $user=$_POST['user'];
    if (exist($user)==TRUE){
        echo "Ce nom d'utilisateur existe déjà.";
    }
    else{
        file_put_contents("inscription.txt",$identifiants." , ".$confmdp." , ".$email."\n",FILE_APPEND);
    }
?>