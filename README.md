# **Bussiness Manager**

En este proyecto, desarrollé un sistema correctamente estructurado utilizando los siguientes conceptos clave de Laravel:

- **Models**
- **Base de datos**
- **Rutas**
- **Controladores**
- **Vistas**

## **Requisitos**

Asegúrate de tener instalado lo siguiente en tu sistema antes de comenzar:

- [**XAMPP**](https://www.apachefriends.org/index.html) para la gestión de la base de datos MySQL.
- [**Composer**](https://getcomposer.org/) para la gestión de las dependencias de Laravel.
- [**Git**](https://git-scm.com/) (opcional) para el control de versiones.

## **Configuración**

### **Pasos de Configuración:**

1. Clona este repositorio en tu sistema (si aún no lo has hecho):
   
    ```
    git clone https://github.com/juanmarobles/businessmanager.git
    ```

2. Navega hasta el directorio del proyecto:
   
    ```
    cd businessmanager
    ```

3. Instala las dependencias de Composer:
   
    ```
    composer install
    ```

4. Configura el archivo `.env` para tu base de datos.

5. Genera una clave de cifrado única para tu aplicación:
   
    ```
    php artisan key:generate
    ```

6. Ejecuta las migraciones para crear las tablas en la base de datos:
   
    ```
    php artisan migrate
    ```

7. Inicia el servidor de desarrollo de Laravel:
   
    ```
    php artisan serve
    ```

## **Funcionalidad**

### **Dashboard**

Tu proyecto Laravel incluye un menú de dashboard con tres secciones:

1. **Clientes**
   - Operaciones CRUD (Crear, Leer, Actualizar y Eliminar) para gestionar información de clientes.

2. **Productos**
   - Operaciones CRUD para gestionar productos en tu inventario.

3. **Ventas**
   - Operaciones CRUD para gestionar registros de ventas.

## **Tecnologías Utilizadas**

- **Laravel**: Framework de PHP para el desarrollo web.
- **MySQL**: Sistema de gestión de bases de datos.
- **XAMPP**: Herramienta que proporciona un servidor web Apache y un servidor de base de datos MySQL.

## **Licencia**

Este proyecto está bajo la licencia de Juan Manuel Robles. Todos los derechos reservados.
