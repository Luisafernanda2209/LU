<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Freehand&family=Lilita+One&family=Poppins:wght@300&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <title>Iniciar sesión</title>
</head>
<body>
   <div class="contenedor">
    <h1 class="titulo">
    FUNDACIÓN SALVANDO VIDAS    
    </h1>
    <h2 class="titulo">
    Iniciar sesión
    </h2>
    <a href="cerrar.php">Cerrar sesión</a>
    <hr class="border">
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" class="formulario" method="POST" name="login">
    <div class="form-group">
        <i class="fa fa-user icono izquierda" aria-hidden="true"></i>
        <input type="text" class="usuario" placeholder="Usuario" name="usuario">
     </div>

        <div class="form-group">
            <i class="fa fa-lock icono izquierda" aria-hidden="true"></i>
            <input type="password" class="password" placeholder="contraseña" name="password">
            <i class="submit-btn fa fa-arrow-right" onclick="login.submit()"></i>
    </div>

    <?php if(!empty($errores)): ?>
        <div class="error">
            <ul>
               <?php echo $errores; ?>
            </ul>
        </div>
    <?php endif; ?>

    </form>
    <p class="texto-registrate">
        ¿ Aun no tienes cuenta ?
    </p>
    <P class="texto">
        <a href="registrate.php" class="texto-registrate-enlace">Registrate</a>
    </P>
   </div>
</body>
</html>