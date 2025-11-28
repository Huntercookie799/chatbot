<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\KnowledgeItem;

class KnowledgeSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        // --- 1. Eventos ---
        KnowledgeItem::create([
            'titulo' => 'Evento de Ingeniería 2025',
            'contenido' => 'El evento de ingeniería 2025 se llevará a cabo el 14 de junio en el auditorio principal de 9:00 a 17:00. Incluirá charlas magistrales y talleres prácticos.',
            'tags' => 'evento, ingenieria, actividades, seminario, 2025',
            'tipo' => 'evento'
        ]);

        KnowledgeItem::create([
            'titulo' => 'Fecha Límite para Propuestas de Proyectos',
            'contenido' => 'La fecha límite para la presentación de todas las propuestas de proyectos del segundo semestre es el 30 de noviembre.',
            'tags' => 'proyecto, propuesta, fecha, limite, academico',
            'tipo' => 'fecha_importante'
        ]);

        // --- 2. Cursos y Capacitación ---
        KnowledgeItem::create([
            'titulo' => 'Curso de Introducción a Docker y Contenedores',
            'contenido' => 'Curso obligatorio para nuevos desarrolladores. Se imparte todos los lunes a las 10:00 AM en la sala de capacitación 3. Requisito: Conocimiento básico de Linux.',
            'tags' => 'curso, docker, contenedores, capacitacion, desarrollo',
            'tipo' => 'curso'
        ]);

        KnowledgeItem::create([
            'titulo' => 'Tutorial: Configuración de Entorno Python con Virtualenv',
            'contenido' => 'Guía paso a paso para configurar un entorno de desarrollo aislado para proyectos Python utilizando la herramienta virtualenv.',
            'tags' => 'tutorial, python, virtualenv, entorno, desarrollo',
            'tipo' => 'tutorial'
        ]);

        // --- 3. Herramientas y Recursos Técnicos ---
        KnowledgeItem::create([
            'titulo' => 'Servidor de Control de Versiones Git',
            'contenido' => 'La URL del servidor de Git de la compañía es: https://git.miempresa.com. Para acceso, contactar al equipo de Infraestructura.',
            'tags' => 'git, version, control, herramienta, repositorio',
            'tipo' => 'recurso'
        ]);

        KnowledgeItem::create([
            'titulo' => 'Software de Gestión de Proyectos (JIRA)',
            'contenido' => 'Utilizamos JIRA para el seguimiento de tareas y sprints. El tablero principal se encuentra en: https://jira.miempresa.com/tablero/main.',
            'tags' => 'jira, proyecto, gestion, scrum, herramienta, agile',
            'tipo' => 'recurso'
        ]);

        // --- 4. Políticas y Normativas ---
        KnowledgeItem::create([
            'titulo' => 'Política de Vacaciones y Ausencias',
            'contenido' => 'Los empleados tienen derecho a 15 días hábiles de vacaciones anuales después de un año de servicio. Las solicitudes deben enviarse con al menos dos semanas de anticipación a RRHH.',
            'tags' => 'politica, vacaciones, rrhh, ausencias, norma',
            'tipo' => 'politica'
        ]);

        KnowledgeItem::create([
            'titulo' => 'Directrices de Seguridad de Contraseñas',
            'contenido' => 'Todas las contraseñas deben tener al menos 12 caracteres, incluir mayúsculas, minúsculas, números y símbolos. Deben cambiarse cada 90 días.',
            'tags' => 'seguridad, contraseña, politica, it',
            'tipo' => 'politica'
        ]);

        // --- 5. Contactos Clave ---
        KnowledgeItem::create([
            'titulo' => 'Contacto Soporte Técnico IT',
            'contenido' => 'Para problemas técnicos o de hardware, contactar a soporte a través del correo: soporte@miempresa.com o la extensión telefónica 555.',
            'tags' => 'contacto, soporte, it, tecnico, ayuda',
            'tipo' => 'contacto'
        ]);

        KnowledgeItem::create([
            'titulo' => 'Contacto Recursos Humanos (RRHH)',
            'contenido' => 'Para consultas sobre nómina, beneficios o políticas, enviar un correo a rrhh@miempresa.com. Contacto: María Pérez.',
            'tags' => 'contacto, rrhh, nomina, recursos, humanos',
            'tipo' => 'contacto'
        ]);
    }
}