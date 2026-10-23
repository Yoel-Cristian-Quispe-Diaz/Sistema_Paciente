# 🏥 Sistema_Paciente

Sistema web para la gestión de pacientes y usuarios, desarrollado en **PHP** con arquitectura **MVC** (Modelo – Vista – Controlador).

> 🚧 Completa las secciones marcadas con `[...]` con los datos reales de tu proyecto.

## ✨ Características

- Gestión de pacientes: [registrar, listar, editar y eliminar].
- Gestión de usuarios del sistema: [registro, inicio de sesión y roles].
- Arquitectura MVC que separa la lógica, los datos y la interfaz.
- Plantilla principal reutilizable para todas las vistas.
- URLs amigables mediante `.htaccess`.

## 🧰 Tecnologías

| Componente | Tecnología |
|---|---|
| Backend | PHP |
| Base de datos | [MySQL / MariaDB] |
| Servidor web | Apache (con `mod_rewrite`) |
| Frontend | HTML, CSS y JavaScript |
| Patrón de diseño | MVC |

## 📁 Estructura del proyecto

```
Sistema_Paciente/
├── assest/                  # Recursos estáticos (CSS, JS, imágenes)
├── controlador/
│   ├── plantillaControlador.php   # Carga la plantilla principal
│   ├── pacienteControlador.php    # Lógica de pacientes
│   └── usuarioControlador.php     # Lógica de usuarios
├── modelo/
│   ├── pacienteModelo.php         # Acceso a datos de pacientes
│   └── usuarioModelo.php          # Acceso a datos de usuarios
├── vista/                   # Páginas y plantillas de la interfaz
├── .htaccess                # Reglas de reescritura de URLs
└── index.php                # Punto de entrada de la aplicación
```

### Cómo funciona

`index.php` es el único punto de entrada: carga los controladores y modelos, crea el controlador de plantilla y lo ejecuta (`ctrPlantilla()`), que se encarga de mostrar la vista correspondiente.

## 🚀 Instalación

### Requisitos previos

- PHP 7.4 o superior
- Apache con `mod_rewrite` habilitado
- [MySQL / MariaDB]
- Opcional: [XAMPP](https://www.apachefriends.org/) o [Laragon](https://laragon.org/) para tener todo en uno

### Pasos

1. **Clonar el repositorio** dentro de la carpeta pública del servidor (`htdocs` en XAMPP):

   ```bash
   git clone https://github.com/Yoel-Cristian-Quispe-Diaz/Sistema_Paciente.git
   ```

2. **Crear la base de datos** e importar el script SQL:

   ```sql
   CREATE DATABASE [nombre_bd] CHARACTER SET utf8mb4;
   ```

   > Indica aquí el archivo `.sql` a importar, o las tablas necesarias (`pacientes`, `usuarios`, etc.).

3. **Configurar la conexión** a la base de datos en [archivo de conexión, por ejemplo `modelo/conexion.php`]:

   ```php
   host:     localhost
   database: [nombre_bd]
   user:     [usuario]
   password: [contraseña]
   ```

4. **Verificar `.htaccess`:** si tu proyecto está en una subcarpeta, revisa que `RewriteBase` coincida con ella.

5. **Abrir el sistema** en el navegador: `http://localhost/Sistema_Paciente/`

## 🔐 Acceso

Usuario inicial: [usuario de prueba]
Contraseña: [contraseña de prueba]

> ⚠️ Cambia las credenciales por defecto antes de usar el sistema en un entorno real.

## 🔒 Seguridad y privacidad

Este sistema maneja datos de pacientes, que son información sensible:

- No subas al repositorio credenciales, archivos de configuración reales ni datos de pacientes.
- Usa consultas preparadas (PDO) y guarda las contraseñas con `password_hash()`.
- Usa HTTPS si lo despliegas en un servidor real.



## 👤 Autor

**Yoel Cristian Quispe Diaz** — [@Yoel-Cristian-Quispe-Diaz](https://github.com/Yoel-Cristian-Quispe-Diaz)
