# 🚀 Students API - CRUD con Laravel

## 📌 Descripción del Proyecto

Este proyecto consiste en la implementación de una API REST utilizando el framework Laravel, integrando un paquete personalizado para la generación automática de operaciones CRUD. El objetivo principal es demostrar cómo automatizar la creación de un sistema backend funcional que permita gestionar datos mediante peticiones HTTP, reduciendo el tiempo de desarrollo y manteniendo una arquitectura limpia.

---

## ⚙️ Tecnologías Utilizadas

* PHP 8+
* Laravel
* SQLite
* Composer
* cURL (para pruebas)

---

## 🧠 Conceptos Implementados

* API REST
* CRUD (Create, Read, Update, Delete)
* Migraciones de base de datos
* Modelos Eloquent
* Controladores API
* Rutas RESTful

---

## 🏗️ Estructura del Proyecto

El proyecto incluye:

* **Models** → Representación de la entidad `Student`
* **Migrations** → Definición de la tabla `students`
* **Controllers** → Lógica de negocio
* **Routes** → Endpoints API (`/api/students`)
* **Database** → SQLite para persistencia de datos

---

## ⚡ Instalación y Configuración

### 1. Clonar el repositorio

```bash
git clone <TU-REPO>
cd <TU-CARPETA>
```

---

### 2. Instalar dependencias

```bash
composer install
npm install
```

---

### 3. Configurar entorno

```bash
copy .env.example .env
php artisan key:generate
```

---

### 4. Configurar base de datos (SQLite)

Crear archivo:

```bash
type nul > database/database.sqlite
```

Editar `.env`:

```env
DB_CONNECTION=sqlite
DB_DATABASE=database/database.sqlite
```

---

### 5. Ejecutar migraciones

```bash
php artisan migrate
```

---

### 6. Levantar servidor

```bash
php -S localhost:8000 -t public
```

---

## 🔥 Generación del CRUD

Se utilizó el siguiente comando para generar automáticamente la entidad:

```bash
php artisan crud:generate Student --columns=name:string,email:string,age:integer
```

Esto creó:

* Modelo `Student`
* Controlador API
* Migración
* Rutas REST

---

## 🌐 Endpoints Disponibles

Base URL:

```text
http://localhost:8000/api/students
```

---

### 📥 Obtener todos los registros

```bash
GET /api/students
```

---

### ➕ Crear un registro

```bash
POST /api/students
```

Body:

```json
{
  "name": "Aless",
  "email": "aless@test.com",
  "age": 18
}
```

---

### ✏️ Actualizar un registro

```bash
PUT /api/students/{id}
```

---

### ❌ Eliminar un registro

```bash
DELETE /api/students/{id}
```

---

## 🧪 Ejemplos con cURL

### Crear

```bash
curl -X POST http://localhost:8000/api/students ^
-H "Content-Type: application/json" ^
-d "{\"name\":\"Test\",\"email\":\"test@test.com\",\"age\":18}"
```

---

### Obtener

```bash
curl http://localhost:8000/api/students
```

---

### Actualizar

```bash
curl -X PUT http://localhost:8000/api/students/1 ^
-H "Content-Type: application/json" ^
-d "{\"name\":\"Updated\",\"email\":\"new@test.com\",\"age\":20}"
```

---

### Eliminar

```bash
curl -X DELETE http://localhost:8000/api/students/1
```

---

## 🎯 Resultados

Se logró:

* Implementar una API REST funcional
* Automatizar la generación de CRUD
* Conectar correctamente con base de datos SQLite
* Validar todas las operaciones mediante pruebas HTTP

---

## 🧩 Diferenciación del Proyecto Original

Este proyecto:

* ✔ Implementa una entidad nueva: `Students`
* ✔ Genera CRUD desde cero

---

## 📌 Conclusión

Este proyecto demuestra cómo utilizar Laravel junto con un paquete especializado para generar una API completa de manera eficiente. La automatización del CRUD permite enfocarse en la lógica del negocio, mejorando la productividad y reduciendo errores en el desarrollo backend.

---

## 👨‍💻 Autor

Proyecto desarrollado como implementación práctica de generación automática de CRUD en Laravel.
