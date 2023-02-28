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
		
        </nav> 
    </div>



    <div class="container">
        <?php
        // nos conectamos a MySql con la funcion mysqli_connect()
        $inc = mysqli_connect("localhost","root","","registros"); 

        // este if comprueba que la conexión fue ok
        if ($inc) {
            
            // metemos en la variable consulta la cadena SQl que quermos lanzar y la lanzamos con la funcion mysqli_query() y guardo en resultado en $resultado.
            
            $consulta = "SELECT * FROM datos order by fecha";
            $resultado = mysqli_query($inc,$consulta);
            
            // si la consulta fue ok, hago un bucle para ir guardando fila a fila los registros. los almaceno en $row
            if ($resultado) {
                while ($row = $resultado->fetch_array()) {
                // la funcion fetch_array() devuelve una fila de la tabla y los mento a la variable $row en cada iteración del bucle
                // ahora saco los valores de las columnas
                
                    $email = $row['email'];
                    $titulo = $row['titulo'];
                    $contenido = $row['contenido'];
                    $fecha = $row['fecha'];
                    $imagen = $row['imagen'];
                    ?>
                    <div>
                        <h2><?php echo $titulo; ?></h2>
                        <div>
                            <p>
                                <b>Post: </b> <?php echo $contenido; ?><br>
                                <b>Autor: </b> <?php echo $email; ?><br>
                                <b>Fecha Registro: </b> <?php echo $fecha; ?><br>
                                <b>Archivo imagen: </b> <?php echo $imagen; ?><br>
                            </p>
                        </div>
                    </div> 
                    <?php
                }
            }
        }
        ?>
    </div>
</body>
</html>