
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
   
    <title>Regitro de Post</title>
</head>

<body>
   
	<header class="header">
        <h1 class="display-4 font-italic">Escribe tu Post</h1>
    </header>

	<div class="nav-scroller py-1 mb-2"> 
        <!--Para la etiqueta nav le he puesto la clase d-flex para alinear los elementos en linea
        y tambien tiene el justify-content-between que hace que se ajusten los elementos al ancho definido y que el
        espacio este  equilibrado entre ellos -->    
        <nav class="nav d-flex justify-content-between">
          <!--Para el texto del nav he utilizado la clase p-2 para agregar un padding de 2 
          que aumenta un poco el espacio interno y también le he puesto el text-muted 
         para cambiar el color del texto  a un tono más claro-->
		 <a class="p-2 bd-highlight" href="index.php">HOME</a>
		 <a class="p-2 bd-highlight" href="blog.html">Escribir blog</a>
		 <a class="p-2 bd-highlight" href="entradas.php">Entradas publicadas</a>
		 <a class="p-2 bd-highlight" href="contactos.html">CONTACTO</a>
        </nav> 
    </div>

        <?php
        // Se establece una conexión a la base de datos "registros" en el servidor local,
        // utilizp la función mysqli_connect(). La conexión se asigna a la variable $conex.

        $conex = mysqli_connect("localhost","root","","registros"); 
        echo "Conexión exitosa";


        // Con la funcin strlen comprobamos que almenos tenemos informaciópn en los campos más importantes del formulario.
        // Para asegurarme de que no se almacenan espacios en blanco innecesarios en la base de datos utilizo la funcion trim() que los quita de delante y detras.

        if (isset($_POST['register'])) {
            if (strlen($_POST['email']) >= 1 && strlen($_POST['titulo']) >= 1 && strlen($_POST['contenido']) >= 1) {
                
                // Obtenemos los datos del formulario
                $email = trim($_POST['email']);
                $titulo = trim($_POST['titulo']);
                $contenido = $_POST['contenido'];
                $fecha = date("d/m/y");
                $imagen = $_POST['imagen'];
                
                // creo la variable $consulta para que contenga la cadena de la sentencia SQL
                $consulta = "INSERT INTO datos(email,titulo,fecha,contenido,imagen) VALUES ('$email','$titulo','$fecha','$contenido','$imagen')";
            
                // la función mysqli_query() de PHP sirve ejecutar la sentencia SQL en la base de datos almacenamos el resultado en su variable.
                $resultado = mysqli_query($conex,$consulta);
                if ($resultado) {
                    ?> 
                    <h3 class="ok">¡Tu post se ha grabado correctamente en nuestro blog!</h3>
                <?php
                } else {
                    ?> 
                    <h3 class="bad">¡Ups ha ocurrido un error!</h3>
                <?php
                }
            }   else {
                    ?> 
                    <h3 class="bad">¡Por favor complete los campos!</h3>
                <?php
            }
        }


        ?>

</body>
</html>