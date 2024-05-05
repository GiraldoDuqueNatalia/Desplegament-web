# Desplegament-web

![Captura de pantalla de Principal.php](https://github.com/GiraldoDuqueNatalia/Desplegament-web/blob/4d7f31488efdf638d06800e4efa118e3fd0853b9/Principal.png)

## Acerca del proyecto

Este repositorio contiene el proyecto "Desplegament-web", que es una aplicación web diseñada para gestionar una tienda online. Este proyecto fue creado siguiendo los pasos de una tarea específica y utiliza GIT para el control de versiones, GitHub para el alojamiento del repositorio y Netbeans como IDE.

## Construido con

- PHP
- MySQL
- HTML
- CSS
- Bootstrap

## Empezando

Para obtener una copia local en funcionamiento, sigue estos sencillos pasos de ejemplo.

### Prerrequisitos


- PHP
- MySQL
- Servidor web (como Apache)
- Tambien puedes usar XAMPP
- Git

### Instalación

1. Clona el repositorio
   ```sh
   git clone https://github.com/GiraldoDuqueNatalia/Desplegament-web.git

2. Configura tu servidor web para apuntar al directorio del proyecto
3. Importa la base de datos la_meva_botiga a tu sistema MySQL
4. Modifica el archivo Connexio.php con tus credenciales de MySQL
5. Si trabajas con XAMPP puedes alojar la base de datos en phpMyadmin

### Configuración local con XAMPP
1. Descarga e instala XAMPP.
2. Clona el repositorio en la carpeta htdocs de la instalación de XAMPP.
   git clone https://github.com/GiraldoDuqueNatalia/Desplegament-web.git

3. Inicia los servicios de Apache y MySQL a través del panel de control de XAMPP.
4. Importa la base de datos la_meva_botiga a tu sistema MySQL a través de phpMyAdmin 
    (http://localhost/phpmyadmin).
5 Modifica el archivo Connexio.php con tus credenciales de MySQL.
6. Accede a tu aplicación en http://localhost/Desplegament-web.
   o si netbeans te da otra salida puede ser: http://localhost:8000/Principal.php

### Usos 
Desde la pantalla principal.php puedes dar click en boton Nou y agregar producto y dar click en el boton Eliminar y eliminará el producto seleccionado
![Captura de pantalla de Nou.php](https://github.com/GiraldoDuqueNatalia/Desplegament-web/blob/9ef0da78213fc7ddbdbb3366161bf6cae1d33073/Nou.png)

## Archivos PHP

Este proyecto incluye varios archivos PHP que se encargan de diferentes partes de la aplicación:

- **Principal.php**: Página principal de la aplicación. Muestra la lista de productos y permite a los usuarios agregar o eliminar productos. Este es el archivo principal de la aplicación. Es la página que los usuarios ven cuando visitan la aplicación. Muestra la lista de productos y permite a los usuarios agregar o eliminar productos. En el código, puedes ver que se incluyen otros archivos PHP para reutilizar el código, y se utiliza PHP para interactuar con la base de datos y mostrar los productos
- **Nou.php**: Contiene el formulario para agregar un nuevo producto a la base de datos. Este archivo contiene el formulario que permite a los usuarios agregar un nuevo producto a la base de datos. Cuando se envía el formulario, los datos del nuevo producto se envían a la base de datos. En el código, puedes ver que se utiliza PHP para procesar los datos del formulario y ejecutar una consulta SQL de inserción en la base de datos.
- **Connexio.php**: Se encarga de la conexión a la base de datos. Este archivo se encarga de la conexión a la base de datos. Contiene una clase que tiene un método para obtener una conexión a la base de datos. En el código, puedes ver que se utiliza la extensión MySQLi de PHP para establecer una conexión con la base de datos.
- **Eliminar.php**: Permite a los usuarios eliminar un producto de la base de datos. Este archivo permite a los usuarios eliminar un producto de la base de datos. Recibe el ID del producto a eliminar y luego ejecuta una consulta SQL para eliminar el producto de la base de datos. En el código, puedes ver que se utiliza PHP para procesar el ID del producto y ejecutar una consulta SQL de eliminación en la base de datos.
- **Actualizar.php**: Permite a los usuarios actualizar los detalles de un producto existente. Este archivo permite a los usuarios actualizar los detalles de un producto existente. Recibe los nuevos datos del producto y luego ejecuta una consulta SQL para actualizar los datos del producto en la base de datos. En el código, puedes ver que se utiliza PHP para procesar los datos del formulario y ejecutar una consulta SQL de actualización en la base de datos.
- **Modificar.php**: Muestra un formulario para modificar los detalles de un producto existente. Este archivo muestra un formulario que permite a los usuarios modificar los detalles de un producto existente. Cuando se envía el formulario, los datos modificados se envían al archivo Actualizar.php para actualizarlos en la base de datos. En el código, puedes ver que se utiliza PHP para obtener los datos actuales del producto de la base de datos y mostrarlos en el formulario.
- **Header.php**: Contiene el código HTML para el encabezado de la aplicación. Este archivo contiene el código HTML para el encabezado de tu aplicación. Se incluye en las otras páginas para mantener un aspecto consistente en toda la aplicación. En el código, puedes ver que se utiliza HTML para estructurar el encabezado y CSS para darle estilo.
- **Footer.php**: Contiene el código HTML para el pie de página de la aplicación. Este archivo contiene el código HTML para el pie de página de tu aplicación. Al igual que el encabezado, se incluye en las otras páginas para mantener un aspecto consistente. En el código, puedes ver que se utiliza HTML para estructurar el pie de página y CSS para darle estilo.

                           
### Contribuyendo
Las contribuciones son lo que hacen a la comunidad de código abierto un lugar tan increíble para aprender, inspirar y crear. Cualquier contribución que hagas será muy apreciada.

###Licencia
Distribuido bajo la licencia MIT. Consulta LICENSE para obtener más información.

###Contacto
Si tienes alguna pregunta o comentario sobre este proyecto, no dudes en contactarme  

