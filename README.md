Trabajo Practico "Fotomascotas" : Diseño Web 2025
Profesor: Mauro Ayala
Alumma: Soledad Albornoz 

Resumen de Cambios y Funcionalidades
1. Formulario de Contacto
Se agregó al formulario de contacto los siguientes campos date y numerico, tal cual lo observado:

Fecha de nacimiento. 
Edad.

2. Se modifico el nombre del formulario ubicado abajo a la derecha a
"Login de Usuarios"
Solo para usuarios autorizados a descargar las fotos ( mas adelante la idea es sincronizarlo con weTransf u otro sitio que permita subir y descargar fotos).


El formulario envía los datos mediante POST usando fetch - funcion del JS que permite realizar solicuitudes http, como get o post, a servidores web de forma asincrona- a usuarios.php.

El backend valida el usuario y la contraseña contra la base de datos y responde en formato JSON.

3. Listado de Usuarios

Se utiliza fetch con método GET para obtener los usuarios desde usuarios.php y mostrarlos dinámicamente en tarjetas.

4. Script Unificado para GET y POST
Se unificó el script JavaScript para manejar tanto la carga de usuarios (GET) como el login (POST) dentro de un solo bloque DOMContentLoaded.

El script maneja correctamente las respuestas y muestra alertas según el resultado del login.

5. Backend PHP (usuarios.php)
El archivo acepta:
GET: Devuelve la lista de usuarios.
POST: Recibe usuario y contraseña, valida contra la base de datos y responde si el login es exitoso o no.

6. Segun lo observado se agrega estilos de Botones
Se agregó una regla CSS para que todos los botones tengan el mismo color y estilo, asegurando coherencia visual en la interfaz.

7. Viewport y Mobile-First
Ya esta incoorporado en el head.

8. Unidades Relativas 
%,rem se encuentran en el ccs

9. Se Aplicaron técnicas de diseño para adaptar el proyecto a sitio web o a dispositivos de distintos tamaños de pantalla (PC, tablet y celular).


