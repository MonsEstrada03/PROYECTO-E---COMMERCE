
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title> CSS Stylish Login Page Example</title>
    <meta name="author" content="Codeconvey" />
    
    <!-- Font Awesome -->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    
    <!-- Stylish Login Page CSS -->
    <link rel="stylesheet" href="css/login-page.css">
    
    <!--Only for demo purpose - no need to add.-->
    <link rel="stylesheet" href="css/demo.css" />
	
</head>
<body>
		


<header class="ScriptHeader">
    <div class="rt-container">
    	<div class="col-rt-12">
        	<div class="rt-heading">
            	<h1>MonsCosmetics</h1>
            </div>
        </div>
    </div>
</header>

<section>
    <div class="rt-container">
          <div class="col-rt-12">
              <div class="Scriptcontent">
              
              <!-- Stylish Login Page Start -->
                <form action="Procesos.php" method="POST">
                    
        <div class="form-title">
            <div class="user-icon gr-bg">
            <i class="fa fa-user"></i>
            </div>
     <h2> ¡BIENVENIDOS CHICOS!</h2>
            </div>
            <label for="nickname">Usuario</label>
            <input type="text" name="nickname" class="cm-input" placeholder="Introduce tu Usuario">

            <label for="password">Contraseña</label>
            <input type="text" name="password" class="cm-input" placeholder="Introduce tu Contraseña">

            <input type="submit" class="btn-login  gr-bg" value="Acceder">
            </form>
              <!-- Stylish Login Page End -->
    		
    		</div>
		</div>
    </div>
</section>
     


    <!-- Analytics -->

	</body>
</html>