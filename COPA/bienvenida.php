<? php
  session_start ()

  if= (!isset($_SESSION['usuario'])){ 
        echo '
            <script> 
            alert ("Por favor debes iniciar sesion");
            window.location= "index.php";
            </script>
        ';
      
      session_destroy();
      die();  
   
} 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Bienvenidos a JobSage</title>
</head>
<body>
    <h1> Bienvenidos a JobSage</h1>
</body>
</html>