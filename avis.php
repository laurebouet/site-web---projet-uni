<?php
    include 'avis.html';

    $com = $_POST['createcom'];
    $nom = $_POST['nom'];
    $formule = $_POST['formule'];

    // file_put_contents("avis.txt",$nom." , ".$formule." , ".$com."\n",FILE_APPEND);

    if(isset($com)){

        $com_saved = fopen('avis.txt','r+');
        $traitement = fopen('traitement.txt','r+') ;
        ftruncate($traitement,0);
        fputs($traitement, $com);
        fputs($traitement,"</br>");

        while(!feof($com_saved)){
            $ajout = fgets($com_saved);
            fputs($traitement,$ajout);
        }
        ftruncate($com_saved,0);
        fseek($traitement,0);

        while (!feof($traitement)){
            $ajout2 = fgets($traitement);
            fputs($com_saved,$nom." , ".$formule." , ".$com."\n");
            // echo "<p style='color:red; background-color:#fff;'>".$ajout."</p>";
        }
        fclose($com_saved);
        fclose($traitement);
    }

    $com_saved = fopen('avis.txt','r');
    
    $file= file("avis.txt");
     
    while(!feof($com_saved)){
        foreach ($file as $comment => $column){
        $r=explode(",",$column);
        } 
        $user = $r[0];
        $choix = $r[1];
        $commentaire = $r[2];
        $text = fgets($com_saved);
        
    }
    echo "<div style='
    background-color:#fff;
    width:max-content;
    text-align: center;
    padding:10px;
    margin:auto;
    '>"."<p 
    style='
    color:black; 
    display: inline-block;
    width:max-content;
    '>".$user
    ."</p>".'<br>'."<p style='
    display: inline-block;
    width:max-content;
    '>".$choix.
    "</p>".'<br>'.
    "<p style='
    display: inline-block;
    width:max-content;
    '>".$commentaire."</p>"."</div>";
    // echo $user;
    // echo $commentaire;
    // echo $choix;
    fclose($com_saved);

?>