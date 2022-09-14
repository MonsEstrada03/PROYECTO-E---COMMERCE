<?php
echo "<body style='background-color:pink'>";
echo '<img src="https://cdn-icons-png.flaticon.com/512/3394/3394009.png" width="100px" height="100px">';
session_start();

 $total=0;

    if(isset($_SESSION["carrito"])){
        foreach($_SESSION["carrito"] as $indice => $arreglo){
            echo "<hr>Producto: ". $indice . "<br>";
            $total += $arreglo["cant"] * $arreglo["precio"];
            foreach ((array) $arreglo as $key =>$value) {
                echo $key .": " . $value. "<br>";

                }
           
        }
        echo"<h2>TOTAL A PAGAR: $ $total </h2>";
        echo '<a ><a href="cliente.php">MENU</a></a> <br>
        <a href="carrito.php?vaciar=true">Vaciar carrito</a>';

    }else{
        //echo "<script>alert('el carrito esta vacio');</script>";
        ?>
        <a href="cliente.php">Regresar</a>
     
        <?php
}
if(isset($_REQUEST["vaciar"])){
    session_destroy();
    header("location:carrito.php");
}


?>