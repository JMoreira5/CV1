//voy a chequear si hay un usuario en sesion si hay entonces muestro su nombre, si no hay, redirecciono hacia el login.
<?php

session_start();

function abrirBase(){
    return mysqli_connect('localhost', 'root', 'root', 'usuario');
}

if ($resultado = mysqli_query($enlace, "SELECT id, name, password")) {

            while($row = mysqli_fetch_array($resultado, MYSQLI_ASSOC)){
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['password'] . "</td>";
                echo "</tr>";
            }

            /* liberar el conjunto de resultados */
            mysqli_free_result($resultado);
    }