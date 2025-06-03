# LaTazaPoblana
# La Taza Poblana

La Taza Poblana es un proyecto web para una cafetería que combina tradición y modernidad, ofreciendo a sus usuarios una experiencia sensorial única. El sitio consta de varias secciones que permiten al usuario conocer la historia y la esencia del café, explorar el menú de productos, y gestionar su perfil de usuario mediante un sistema de autenticación.

## Características

- **Autenticación de Usuarios:**  
  - Inicio de sesión y verificación de credenciales.
  - Sesiones en PHP para restringir el acceso a áreas privadas (perfil).

- **Registro y Gestión de Usuarios:**  
  - Sistema de registro con formulario que guarda datos en la base de datos.
  - Perfil de usuario con información personal consultada de la base de datos.

- **Menú Interactivo:**  
  - Secciones de productos organizadas en categorías (Cafés Calientes, Bebidas Frías, Postres).
  - Cada producto cuenta con una imagen, descripción, precio y botón de "Comprar Ahora" que muestra una alerta (simulando la acción de agregar al carrito).

- **Diseño Responsivo y Estético:**  
  - Uso de CSS personalizado con imágenes de fondo, fuentes de Google Fonts y paletas en tonos café.
  - Interfaz adaptada a dispositivos móviles y de escritorio gracias a media queries.

## Tecnologías Utilizadas

- **PHP:** Procesamiento del lado del servidor, manejo de sesiones y consultas a la base de datos.
- **MySQL:** Almacenamiento de usuarios y otros datos necesarios.
- **HTML & CSS:** Estructura y estilización de la interfaz.
- **JavaScript:** Uso básico para mostrar alertas y redireccionamientos.
- **Google Fonts:** Para incorporar tipografías personalizadas.


## Instalación y Configuración

1. **Requisitos:**  
   - Servidor web con PHP y MySQL (por ejemplo, XAMPP, WAMP o LAMP).
   - Un editor de código para modificar los archivos.

2. **Base de Datos:**  
   - Crea una base de datos denominada `FormularioDB`.
   - En ella, crea una tabla `usuarios` con las columnas necesarias: `nombre`, `contraseña`, `correo`, `telefono`, `fecha_nacimiento`.

3. **Configuración de Conexión:**  
   - Verifica que el archivo `conexion.php` tenga la configuración correcta para conectar a tu base de datos.

4. **Rutas de Recursos:**  
   - Asegúrate de que las rutas hacia las imágenes y hojas de estilo en los archivos HTML y CSS sean correctas según la estructura de tu proyecto.

5. **Despliegue:**  
   - Coloca todos los archivos en la carpeta adecuada de tu servidor web.
   - Accede a la página principal a través del navegador para iniciar la experiencia.

## Uso

- **Inicio de Sesión y Registro:**  
  - Los usuarios deben autenticarse para acceder a su perfil y otras secciones restringidas.
  - En la página de login, se ingresan las credenciales y se redirige al usuario a la página principal o al perfil según corresponda.

- **Exploración del Menú:**  
  - Navega por las categorías de productos (Cafés Calientes, Bebidas Frías y Postres).
  - Cada producto muestra su imagen, descripción, precio y un botón de "Comprar Ahora" que simula la acción de agregar el producto mediante una alerta.

- **Navegación:**  
  - La barra de navegación permite acceder a secciones clave como el perfil, el menú y cerrar sesión.

## Notas Adicionales

- Se utiliza `mysqli` para realizar consultas y se implementan técnicas básicas para prevenir inyección SQL mediante `mysqli_real_escape_string` y consultas preparadas.
- El proyecto se enfoca en una experiencia visual cálida y moderna, acorde al tema de una cafetería.
- Los estilos responsivos aseguran que el sitio se vea bien en diferentes dispositivos.



Este README ofrece un resumen general del proyecto "La Taza Poblana", proporcionando información sobre sus características, estructura, tecnologías utilizadas y pasos de instalación. 


