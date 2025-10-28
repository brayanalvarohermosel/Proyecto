# README — Proyecto AO

Resumen corto
- Instrucciones para ejecutar la aplicación PHP y descripción breve de los archivos dentro de la carpeta `Main`.

Requisitos
- PHP 7.4+ (o la versión requerida por el proyecto)
- Extensiones PHP necesarias (p. ej. pdo_mysql) — ajustar según tu proyecto
- Opcional: Composer, servidor local (XAMPP, WAMP, MAMP) o acceso a Apache/Nginx

Instalación
1. Clonar o copiar el repositorio a tu máquina:
    - Ej: `git clone <repo> && cd <repo>`
2. Si usa Composer:
    - `composer install`
3. Configurar variables (si aplica):
    - Copiar `.env.example` a `.env` y ajustar credenciales (BD, claves, etc.)

Ejecución (opciones)
- Servidor PHP integrado (rápido para desarrollo):
  - Desde la raíz del proyecto: `php -S localhost:8000 -t public`  
     (ajusta `-t` al directorio público si aplica)
- XAMPP/WAMP/MAMP:
  - Coloca el proyecto en `htdocs` (o la carpeta equivalente) y accede via `http://localhost/<carpeta>`
- Apache/Nginx:
  - Configurar VirtualHost apuntando a la carpeta pública del proyecto y reiniciar el servidor.

Cómo depurar
- Activar display_errors en php.ini o usar configuración de entorno `APP_DEBUG=true`
- Revisar logs en `storage/logs` o en el log del servidor web

Descripción de los archivos en Main
- No se encontró listado de archivos. Completa los nombres para obtener una descripción exacta. A continuación hay un formato sugerido; copia cada archivo real y rellena la descripción:

Formato sugerido:
- Main/index.php
  - Qué hace: Punto de entrada principal; inicializa la aplicación y enrutamiento.
  - Uso: Se accede desde la raíz (`/`) y carga controladores.
- Main/config.php
  - Qué hace: Define configuración (BD, ruta, keys).
  - Uso: Incluido por otros scripts para acceder a configuración central.
- Main/db.php
  - Qué hace: Maneja la conexión a la base de datos (PDO).
  - Uso: Se instancia donde se requieren consultas.
- Main/controllers/*.php
  - Qué hacen: Lógica de negocio por recursos (p. ej. UserController).
  - Uso: Llamados por rutas/endpoints.
- Main/models/*.php
  - Qué hacen: Representación de entidades y consultas a BD.
  - Uso: CRUD y acceso de datos.
- Main/helpers.php
  - Qué hace: Funciones utilitarias reutilizables.
  - Uso: Incluir para utilidades globales.
- Main/api.php
  - Qué hace: Define endpoints REST (si aplica).
  - Uso: Puntos de entrada para clientes externos.

Instrucciones para rellenar la sección "Descripción"
1. Ejecuta en terminal: `ls Main` o explora la carpeta en el explorador de archivos.
2. Copia la lista aquí o reemplaza el bloque de ejemplo anterior con los nombres reales.
3. Para cada archivo `.php`, añade:
    - Breve descripción (1–2 líneas).
    - Cómo ejecutarlo o cuándo se invoca (via navegador, cron, CLI).
    - Dependencias (si requiere conexión, include de otro archivo, etc.)

Contacto y notas finales
- Añade aquí cualquier nota de despliegue, credenciales de prueba o comandos útiles.
- Si quieres, pega la lista real de archivos de `Main` y genero descripciones específicas para cada uno.