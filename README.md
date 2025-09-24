# 📌 SysWeb - Sistema Web de Compra|Venatas desarrollado en LP3, con PHP (MVC + MySQL + Boostrap + AdminLTE)

Este proyecto es un **sistema web compra-venta para la materia LP3**, desarrollado en **PHP** utilizando el **patrón MVC**, **MySql** para la base de datos y **Bootstrap + AdminLTE** para el diseño.  
Incluye un **módulo de autenticación de usuarios** con login/logout, manejo de sesiones, permisos de acceso y un **panel de administración (Dashboard)**.

---

## 🚀 Características principales

- 🔑 Inicio de sesión con validación de usuario/contraseña (MD5 en la BD).
- 👥 Manejo de sesiones seguras con cierre de sesión (`logout`).
- 🛡️ Permisos de acceso por roles (ejemplo: `admin`, otros roles).
- 🗂️ Estructura **MVC**: separación de controladores, modelos y vistas.
- 🎨 Interfaz con **Bootstrap**, **Font Awesome** y **AdminLTE**.
- 📊 Dashboard inicial con bienvenida al usuario y bloques de acción.
- 📂 Menú lateral dinámico según permisos del usuario.

---

## 📂 Estructura del proyecto

```
.
├── asset/
│   └── css                   # archivos de css
│   └── fonts                 # archivos de fuentes
│   └── img                   # archivos de imagenes
│   └── js                    # archivos de javascript
├── plugins/
│   └── chosen                # archivos de utilidad de seleccion
│   └── datables              # utilidad y funcionalidad de tablas 
│   └── datepicker            # utilidad y funcionalidad de fechas
│   └── fastclick             # utilidad y funcionalidad de ...
│   └── font-awesome-4.6.3    # utilidad y funcionalidad de iconos
│   └── jQuery                # utilidad y funcionalidad de Jquery 
│   └── jQueryUI              # utilidad y funcionalidad de JqueryUI 
│   └── slimScroll            # utilidad y funcionalidad de Scroll 
├── documentos                # Documentación del proyecto o notas o archivos varios
├── config/
│   └── database.php          # Configuración y conexión a MySQL
├── controller/
│   ├── DashboardController.php
│   ├── LoginController.php
│   └── MainController.php
├── model/
│   └── UserModel.php         # Consultas relacionadas a usuarios
├── view/
│   ├── login.php             # Vista del login
│   ├── dashboard.php         # Vista principal del sistema
│   └── template/
│       ├── main_menu.php     # Layout principal
│       ├── sidebar_menu.php  # Menú lateral dinámico
│       └── top_menu.php      # Menú superior con perfil/cerrar sesión
├── core/
│   └── View.php              # Motor de vistas
├── index.php                 # Enrutador principal del sistema
└── README.md                 # Documentación del proyecto
```

---

## ⚙️ Requisitos

- **PHP >= 5**.
- **MySQL**.
- Extensión **PDO** habilitada.
- Servidor local como **XAMPP**.
- Navegador moderno (Chrome, Firefox, Edge).

---

## 🛠️ Instalación

1. **Clonar o descargar el repositorio** en tu servidor local:
   ```bash
   git clone https://github.com/chelosil/sysweb.git
   ```

2. **Configurar la base de datos** en `config/database.php`:
   ```php
   $server   = "localhost";
   $username = "";
   $password = "xxxx";
   $database = "";
   ```

3. **Importar la base de datos**  
   - Crear la base de datos `sysweb` en MySQL.
   
   Ejemplo en terminal:
   ```bash
   mysql -u root -p sysweb < database/sysweb.sql
   ```

4. **Iniciar el servidor local**:
     ```bash
     php -S localhost:8000
     ```
   - O, iniciar Apache desde XAMPP.

5. **Acceder al sistema**:
   ```
   http://localhost/sysweb
   ```

---
## 📖 Créditos

- 💻 **Desarrollado por:** Marcelo Silvero.  
---

## 📜 Licencia
Este proyecto se distribuye bajo la licencia **MIT**.

