<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en" xmlns:th="http://www.thymeleaf.org">
<head>
  <title>Prueba</title> 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
  <nav class="navbar navbar-expand-sm navbar-light bg-light">
    <!-- enlaces -->

    <ul class="navbar-nav">
      <li class="nav-item">
        <a href="carrito.php" class="nav-link" href="#">Carrito</a>
    
      </li> 
      <li class="nav-item">
        <a href="index.php" class="nav-link" href="#">Salir</a>
      </li>       
    </ul>
  </nav>

    <!-- enlaces -->

    <div class="container">
        <br>
     
    

        <div class="row">
       
            <div class="col-3">
                <div class=" card">
                    <img
                    title="Titulo producto"
                    alt="Titulo"
                    Class="Card-img-top"
                    src="https://cdn.shopify.com/s/files/1/0634/5457/6854/products/paleta-de-sombras-the-everyday-pallete-rosy-mcmichael-5_1024x1024.webp?v=1662564406"
                    > 
                    <div>
                    <form action="cliente.php" method="POST">
                        <span> Sombras The Every Day Palette - Rosy McMichael X Beauty Creations</span>
                        <h5>$689</h5> 
                        <p>  THE EVERY DAY PALETTE</p> 
                            <input type="hidden" name="title" value=" THE EVERY DAY PALETTE">
                            <input type="hidden" name="price" value="689">
                            <button class="btn btn-primary" 
                            name="btnAccion" 
                            value="Agregar" 
                            type="submit"
                            >
                            Agregar al carrito
                            </button>
                             <input type="number" name="cant" value=" " style="width:50px;"><br>
                        </form>
                        
                    </div>       
                </div>     
            </div>
            <div class="col-3">
                <div class=" card">
                    <img
                    title="Titulo producto"
                    alt="Titulo"
                    Class="Card-img-top"
                    src="https://cdn.shopify.com/s/files/1/0634/5457/6854/products/kit-de-labios-the-true-red-kit-rosy-mcmichael-2_grande.webp?v=1662566161"
                    > 
                    <div>
                    <form action="cliente.php" method="POST">
                        <span> Kit De Labios The True Red Kit - Rosy McMichael X Beauty Creations      </span>
                        <h5>$359.00</h5> 
                        <p> THE TRUE RED KIT</p> 
                            <input type="hidden" name="title" value="THE TRUE RED KIT">
                            <input type="hidden" name="price" value="359">
                            <button class="btn btn-primary" 
                            name="btnAccion" 
                            value="Agregar" 
                            type="submit"
                            >
                            Agregar al carrito
                            </button>
                             <input type="number" name="cant" value=" " style="width:50px;"><br>
                        </form>
                        
                    </div>       
                </div>     
            </div>
            <div class="col-3">
                <div class=" card">
                    <img
                    title="Titulo producto"
                    alt="Titulo"
                    Class="Card-img-top"
                    src="http://cdn.shopify.com/s/files/1/0634/5457/6854/products/kit-de-labios-the-nude-kit-rosy-mcmichael-beauty-creations-2_1200x.webp?v=1662566562"
                    > 
                    <div>
                    <form action="cliente.php" method="POST">
                        <span>Kit De Labios The Nude Kit - Rosy McMichael X Beauty Creations          </span>
                        <h5>$359.00</h5> 
                        <p> THE NUDE KIT</p> 
                            <input type="hidden" name="title" value=" THE NUDE KIT">
                            <input type="hidden" name="price" value="359">
                            <button class="btn btn-primary" 
                            name="btnAccion" 
                            value="Agregar" 
                            type="submit"
                            >
                            Agregar al carrito
                            </button>
                             <input type="number" name="cant" value=" " style="width:50px;"><br>
                        </form>
                        
                    </div>       
                </div>     
            </div>
            <div class="col-3">
                <div class=" card">
                    <img
                    title="Titulo producto"
                    alt="Titulo"
                    Class="Card-img-top"
                    src="https://cdn.shopify.com/s/files/1/0634/5457/6854/products/coleccion-completa-caja-pr-rosy-mcmichael-beauty-creations-6_1024x1024.webp?v=1662562704"
                    > 
                    <div>
                    <form action="cliente.php" method="POST">
                        <span>Pestañas Postizas The Lash Trio - Rosy McMichael X Beauty Creations</span>
                        <h5>$489.00</h5> 
                        <p> THE LASH TRIO</p> 
                            <input type="hidden" name="title" value="THE LASH TRIO">
                            <input type="hidden" name="price" value="489">
                            <button class="btn btn-primary" 
                            name="btnAccion" 
                            value="Agregar" 
                            type="submit"
                            >
                            Agregar al carrito
                            </button>
                             <input type="number" name="cant" value=" " style="width:50px;"><br>
                        </form>
                        
                    </div>       
                </div>     
            </div>
        </div>
        
    </div>
    <?php
    if(isset($_REQUEST["btnAccion"])){
        $producto = $_REQUEST["title"];
        $cantidad = $_REQUEST["cant"];
        $precio = $_REQUEST["price"];

       

        
        $_SESSION["carrito"][$producto]["cant"] = $cantidad;
        $_SESSION["carrito"][$producto]["precio"] = $precio;

        echo "<script>alert('Se agrego $producto con exito al carrito de compras');</script>";
    }
    ?>

</body>
</html>