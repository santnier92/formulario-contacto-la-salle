# formulario-contacto-la-salle
Actividad 4. Curso Ingenieria de Sotware

Este proyecto es un formulario de contacto web con integración en GitHub Pages y pruebas locales en XAMPP, desarrollado como parte de la **Actividad 4** del curso **Ingeniería de Software**.

El formulario permite a los usuarios ingresar su nombre, correo electrónico y un mensaje, el cual es almacenado en una base de datos utilizando **PHP** y **MySQL**. Posteriormente, los mensajes pueden ser consultados desde un archivo separado.

## 📁 Estructura del Proyecto

- `index.html`: Formulario de contacto.
- `procesar.php`: Procesa los mensajes enviados.
- `ver_mensajes.php`: Visualiza los mensajes almacenados en la base de datos.
- `css/estilos.css`: Estilo visual.
- `js/script.js`: Lógica JS (si aplica).
- `img/`: Imágenes usadas en el sitio.

## 🚀 Versión en línea

[https://santnier92.github.io/formulario-contacto-la-salle](https://santnier92.github.io/formulario-contacto-la-salle)

## 🛠️ Requisitos para pruebas locales

- XAMPP instalado
- Apache y MySQL activos
- Base de datos llamada `bd_contacto` con la tabla `mensajes`

### Configuración Local (XAMPP)

1.Abre XAMPP y enciende Apache y MySQL.
2.Ingresa a http://localhost/phpmyadmin
3.Crea la base de datos bd_contacto.
4.Ejecuta el siguiente SQL para crear la base de datos y tabla:

## Creación de la base de datos

```sql
CREATE DATABASE bd_contacto;
USE bd_contacto;

CREATE TABLE mensajes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100),
    correo VARCHAR(100),
    mensaje TEXT
);
```
Configuración para pruebas locales
Colocar los archivos en `C:\xampp\htdocs\formulario-contacto-la-salle\`

Acceder desde el navegador:  
[http://localhost/formulario-contacto-la-salle/index.html](http://localhost/formulario-contacto-la-salle/index.html)

**Envío de formulario**  
Los datos ingresados se almacenan en la base de datos local mediante `procesar.php`.

**Ver mensajes**  
Podemos ver los mensajes almacenados accediendo a:  
[http://localhost/formulario-contacto-la-salle/ver_mensajes.php](http://localhost/formulario-contacto-la-salle/ver_mensajes.php)

---

**Autor**  
`santnier92`
