# EXAMEN - Sistema de Gestión de Errores (PixelForge Studios)

Este proyecto es una aplicación web desarrollada en Laravel para que los beta testers de **PixelForge Studios** puedan reportar y gestionar errores (bugs) de forma eficiente y responsiva.

## Capturas de Pantalla

### 1. Listado de Errores (Index)
Aquí se muestran todos los bugs reportados con su gravedad y estado actual.
<img width="1753" height="520" alt="image" src="https://github.com/user-attachments/assets/96071722-1d58-4484-8b83-3d44b2e8acd1" />



### 2. Formulario de Reporte (Create)
Pantalla donde se registran los nuevos errores encontrados en el juego.
<img width="1119" height="791" alt="image" src="https://github.com/user-attachments/assets/72045d66-e0a3-4ac0-bf36-e08105af1354" />

### 3. Actualización de Estado (Edit)
Interfaz para que Sergio pueda cambiar el estado de los bugs a "Arreglado" o "Rechazado".
<img width="1696" height="586" alt="image" src="https://github.com/user-attachments/assets/ed7a816a-5142-4a32-8ba5-ba23629e6cdd" />

###4. Eliminación de Registros (Delete)
Esta opción permite a los administradores del sistema borrar reportes de errores que hayan sido duplicados o creados por accidente, manteniendo la base de datos limpia y organizada.

<img width="1698" height="524" alt="image" src="https://github.com/user-attachments/assets/6b0f7c95-e58e-4b99-84ad-093a99f0ba06" />

---

## Informe de Decisiones de Diseño 

### 1. Estructura de la Base de Datos
Se creó una migración para la tabla `bugs` con los siguientes campos técnicos para cumplir con el requerimiento:
- **ID**: Identificador único.
- **Título**: Resumen corto del error (máx. 100 caracteres).
- **Área**: Lugar del juego donde ocurre el fallo.
- **Gravedad**: Clasificación del impacto.
- **Pasos**: Descripción detallada para reproducir el error.
- **Estado**: Situación del bug (Nuevo, En revisión, Arreglado, Rechazado).

### 2. Clasificación de Gravedad
Para facilitar la priorización, se implementaron cuatro niveles:
- **Baja, Media, Alta y Crítica.**

### 3. Lógica de Gestión de Registros (Pregunta Clave)
- **¿Se pueden eliminar registros?** No.
- **Justificación de diseño:** Por solicitud de Sergio (QA), el sistema **no permite la eliminación física** de los registros de la base de datos. Esto es fundamental para mantener la trazabilidad y un historial de calidad histórico de la empresa. Los errores se gestionan mediante el cambio de **Estado**; así, aunque un bug esté "Arreglado", su registro permanece para futuras auditorías de desarrollo.

## Tecnologías y Requisitos
- **Framework:** Laravel 11.
- **Frontend:** Bootstrap 5 (Diseño responsivo para móviles).
- **Servidor Local:** Herd / MySQL.

---
