//aca pido un usuario y clave lo chequeo contra la base de datos y lo guardo en sesiones si es correcto.
<?php


function abrirBase(){
    return mysqli_connect('localhost', 'root', 'root', 'usuario');
}
        
?>


<form action="ver.php" method="POST" enctype="multipart/form_path">
    <input type="name" name="nombre"/>
    <input type="password" name="clave"/>
    <input type="submit"/>
</form>