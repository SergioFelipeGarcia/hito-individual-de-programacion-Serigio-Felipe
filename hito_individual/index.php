<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
   
    <title>Inicio</title>
</head>
<body>
      <header class="header">
        <h1 class="display-4 font-italic">Diferencias entre lenguajes</h1>
      </header>
     
      <div class="nav-scroller py-1 mb-2"> 
        <!--Para la etiqueta nav le he puesto la clase d-flex para alinear los elementos en linea
        y tambien tiene el justify-content-between que hace que se ajusten los elementos al ancho definido y que el
        espacio este  equilibrado entre ellos -->    
        
        <!--<nav class="nav d-flex flex-row bd-highlight mb-3"> -->
        <nav class="nav d-flex justify-content-between">
          <!--Para el texto del nav he utilizado la clase p-2 para agregar un padding de 2 
          que aumenta un poco el espacio interno y también le he puesto el text-muted 
          para cambiar el color del texto  a un tono más claro  -->
          <a class="p-2 bd-highlight" href="index.php">HOME</a>
          <a class="p-2 bd-highlight" href="blog.html">Escribir blog</a>
          <a class="p-2 bd-highlight" href="entradas.php">Entradas publicadas</a>
          <a class="p-2 bd-highlight" href="contactos.html">CONTACTO</a>
        </nav> 
      </div>

    <div class="container">
      <h1>Explicación de las diferencias entre lenguajes de programación</h1>
      <p>Existen diferentes paradigmas de programación que se utilizan para desarrollar software. Los tres principales paradigmas son:</p>
      <h2>Lenguajes procedimentales</h2>
      <p>Los lenguajes procedimentales, como C y Pascal, se centran en el concepto de procedimientos o funciones. El código se divide en una serie de procedimientos o funciones que realizan tareas específicas, y luego se llaman en un orden determinado para llevar a cabo el programa completo. Estos lenguajes suelen ser más eficientes en términos de velocidad de ejecución que otros tipos de lenguajes, pero pueden ser más difíciles de mantener y actualizar debido a la naturaleza jerárquica del código.</p>
      <h2>Lenguajes orientados a objetos</h2>
      <p>Los lenguajes orientados a objetos, como Java y Python, se basan en el concepto de objetos. Un objeto es una instancia de una clase, que tiene propiedades y métodos que definen su comportamiento. Los objetos pueden interactuar entre sí a través de mensajes, lo que permite una mayor flexibilidad y modularidad en el diseño del programa. Este enfoque también facilita la reutilización de código y la programación en equipo, ya que los objetos pueden ser diseñados y probados de forma independiente antes de ser integrados en el programa completo.</p>
      <h2>Lenguajes basados en eventos</h2>
      <p>Los lenguajes orientados a eventos, como JavaScript y Visual Basic, se basan en la interacción del usuario con la interfaz gráfica del programa. En lugar de seguir un orden secuencial de ejecución, los eventos son disparados por acciones del usuario, como hacer clic en un botón o mover el ratón. El código se escribe en respuesta a estos eventos, y el programa responde en consecuencia. Este enfoque es comúnmente utilizado en el desarrollo de aplicaciones web y de escritorio.</p>
    </div>
    <div class="pie_pagina">
      <footer class="footer" > Sergio Felipe Gárcia Curso 1º B  </footer>



    </div>
  <?php
      
    // Obtener la dirección IP del usuario
    $ip = $_SERVER['REMOTE_ADDR'];

    // Obtener la fecha y hora actual
    $date = date("Y-m-d H:i:s");

    // Crear la cookie con la IP y fecha de acceso
    setcookie('acceso', $ip . ',' . $date, time() + (60 * 60 * 24 * 30), '/');

    // Mostrar un mensaje al usuario confirmando la creación de la cookie
    echo "Cookie creada con éxito!";
  ?>

      
</body>
</html>