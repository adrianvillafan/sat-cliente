<?php

    include("nexo.php"); 


    $mozo = $_POST['mozo'];
    $p1 = $_POST['p1'];
    $p2 = $_POST['p2'];
    $p3 = $_POST['p3'];
    $p4 = $_POST['p4'];
    $p5 = $_POST['p5'];
    $score = $_POST['score'];
    $feedback = $_POST["feedback"];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];

    if($p1 == ""){
        header('Location: http://localhost/curso_php/index.php');
    }
    else{
        $insertar = "INSERT INTO cuestionario(mozo, p1, p2, p3,p4,p5,score,feedback,nombre,apellido,email,telefono) VALUES ('$mozo','$p1','$p2','$p3','$p4','$p5','$score','$feedback','$nombre','$apellido','$email','$telefono')";
    
        $resultado = mysqli_query($conn, $insertar);
        if ($resultado) {
            echo "<script>alert('Se ha registrado el usuario con éxito')</script>"; 
        } else {
                  echo "<script>alert('No se pudo registrar'); window.history.go(-1); </script>";
       }
       //cierre 
       mysqli_close($conn);
       header('Location: http://localhost/curso_php/index.php');
       //header('Location: http://quefue.totalh.net/');
       
    }
    header("Cache-Control: no cache");
    session_cache_limiter("private_no_expire");
    
?>

<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
        
    }
</script>