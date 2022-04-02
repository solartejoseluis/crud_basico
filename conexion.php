<?php
function retornarConexion() {
    $server="localhost";
    $usuario="kiron";
    $clave="001975";
    $base="crud_basico";
    $con=mysqli_connect($server,$usuario,$clave,$base) or die("problemas") ;
    mysqli_set_charset($con,'utf8'); 
    return $con;
}
?>