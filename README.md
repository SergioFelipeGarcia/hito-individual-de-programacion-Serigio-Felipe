# hito-individual-de-programacion-Serigio-Felipe

Este proyecto es un sistema de registros de publicaciones  y contenido
Base de datos: "registros"

La base de datos lleva el mismo nombre que el proyecto.
Tabla "datos":

Almacena información sobre publicaciones.
Columnas de la tabla:
email: tipo VARCHAR(100), almacena la dirección de correo electrónico del autor de la publicación.
titulo: tipo VARCHAR(100), almacena el título de la publicación.
contenido: tipo VARCHAR(600), almacena el contenido de la publicación.
fecha: tipo DATE, almacena la fecha de la publicación.
imagen: tipo TEXT, almacena el nombre o ruta de la imagen asociada a la publicación.
Tabla "usuarios":

Almacena información de inicio de sesión de los usuarios.
Columnas de la tabla:
usuario: tipo VARCHAR(100), almacena el nombre de usuario.
clave: tipo VARCHAR(100), almacena la contraseña del usuario.
Funcionalidad de inicio de sesión:

Se proporciona un formulario de inicio de sesión en el archivo "Formulario de login.php".
El formulario envía los datos ingresados por el usuario al archivo "validar.php" para su procesamiento.
En "validar.php", se verifica si el usuario y la contraseña coinciden con los registros de la tabla "usuarios" en la base de datos.
Si las credenciales son válidas, se redirige al usuario a "index.php" (página principal o panel de control).
Si las credenciales no son válidas, se muestra un mensaje de error.
Página principal o panel de control:

La página principal o panel de control se encuentra en "index.php".
Después de iniciar sesión correctamente, el usuario es redirigido a esta página.
