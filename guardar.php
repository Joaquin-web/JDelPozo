<?php
    //Conectamos con el servidor
    $con = mysqli_connect("localhost", "root", "", "datos" );
            if (mysqli_connect_error()){
                echo "No se pudo conectar a la base de datos" . mysqli_connect_error();


            }

    //Recuperar las variables

    $datos= mysqli_real_escape_string($con, $_POST["nombre"]);
    $email = mysqli_real_escape_string($con, $_POST["correo"]);
    $mensaje = mysqli_real_escape_string($con, $_POST["mensaje"]);

   
    //Insertamos los valores del formulario en nuestra bd

            $sql = "INSERT INTO datos VALUES ('$datos ','$email', '$mensaje')";

            if (!mysqli_query($con, $sql)) {
                    die('Error:' . mysqli_error($con));
                } else{

                        echo "Registro guardado exitosamente<br><a href='index.html'>Volver</a>";
                    }
?>