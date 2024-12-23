Sistema de Gestión Escolar con Laravel

Este proyecto tiene como objetivo la creación de un sistema de gestión escolar utilizando Laravel, un framework PHP ampliamente utilizado para el desarrollo web. El sistema está diseñado para manejar diversos aspectos clave de una institución educativa, como estudiantes, cursos, comisiones, materias y profesores.

¿Cuál es su propósito?

El sistema proporciona una solución completa para la administración de datos académicos, permitiendo a los usuarios:
	•	Administrar los datos de los estudiantes:
Registrar y actualizar la información personal de los estudiantes, como su nombre, correo electrónico y las inscripciones a cursos y comisiones.
	•	Gestionar los cursos y materias:
Crear, modificar y eliminar cursos y materias, además de asignar profesores a las comisiones correspondientes en cada curso.
	•	Controlar el proceso de inscripciones:
Facilitar la inscripción de estudiantes a cursos y comisiones, evitando duplicados y conflictos en los horarios.
	•	Generar reportes detallados:
Crear reportes con información como los estudiantes inscritos en cada curso, la relación de cursos por materia, horarios de comisiones y asistencia de profesores.
	•	Buscar información de manera eficiente:
Permitir a los usuarios buscar y filtrar información de estudiantes, cursos, comisiones y profesores de forma rápida y precisa.

¿Cómo fue desarrollado?

El sistema fue creado utilizando una combinación de tecnologías web modernas:
	•	Laravel:
Sirve como la base del sistema, gestionando el enrutamiento, los controladores, modelos y la interacción con la base de datos.
	•	Eloquent ORM:
Proporciona una forma sencilla de interactuar con la base de datos, representando los datos como objetos, lo que facilita las consultas.
	•	Blade:
Es el motor de plantillas de Laravel, que permite crear vistas dinámicas con lógica de presentación.
	•	Bootstrap:
Un framework CSS que ofrece estilos y componentes predefinidos, asegurando un diseño visual atractivo y funcional en diferentes dispositivos.

El proceso de desarrollo se llevó a cabo de forma continua y en varias etapas:
	1.	Diseño de la base de datos:
Se definieron las relaciones entre las diferentes entidades, como estudiantes, cursos, materias, etc.
	2.	Desarrollo de modelos, controladores y vistas:
Se implementaron las funcionalidades básicas CRUD (Crear, Leer, Actualizar, Eliminar) para cada entidad, junto con las lógicas de negocio necesarias.
	3.	Uso de migraciones y seeders:
Se emplearon migraciones para gestionar la estructura de la base de datos y seeders para cargar datos de prueba.
	4.	Implementación de filtros y opciones de búsqueda:
Se añadieron filtros para facilitar la búsqueda de información específica.
	5.	Generación de reportes:
Se desarrollaron funcionalidades para generar reportes relevantes para la institución educativa.
	6.	Diseño de la interfaz de usuario:
La interfaz se diseñó utilizando Bootstrap, garantizando un diseño coherente y adaptativo a dispositivos móviles.

El código fuente del proyecto fue gestionado con Git y se alojó en GitHub, lo que facilitó el control de versiones y la colaboración en equipo.

Alumno: Villaboa Lucas Ezequiel