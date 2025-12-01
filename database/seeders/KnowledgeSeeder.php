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
    public function run() 
    {
        // --- 1. EVENTOS Y FECHAS IMPORTANTES (10 ítems) ---

        // Evento Base
        KnowledgeItem::create([
            'titulo' => 'Evento de Ingeniería 2025',
            'contenido' => 'El evento de ingeniería 2025 se llevará a cabo el 14 de junio en el auditorio principal de 9:00 a 17:00. Incluirá charlas magistrales y talleres prácticos.',
            'tags' => 'evento, ingenieria, actividades, seminario, 2025',
            'tipo' => 'evento'
        ]);

        // Fecha Límite Base
        KnowledgeItem::create([
            'titulo' => 'Fecha Límite para Propuestas de Proyectos',
            'contenido' => 'La fecha límite para la presentación de todas las propuestas de proyectos del segundo semestre es el 30 de noviembre.',
            'tags' => 'proyecto, propuesta, fecha, limite, academico',
            'tipo' => 'fecha_importante'
        ]);
        
        // Reunión Semanal
        KnowledgeItem::create([
            'titulo' => 'Reunión de Equipo Semanal de Desarrollo',
            'contenido' => 'La reunión de sincronización del equipo de desarrollo se realiza todos los lunes a las 9:30 AM vía Zoom. El enlace es recurrente: https://zoom.miempresa.com/devsync.',
            'tags' => 'reunion, equipo, desarrollo, sprint, weekly',
            'tipo' => 'evento'
        ]);

        // Presentación de Resultados
        KnowledgeItem::create([
            'titulo' => 'Presentación Trimestral de Resultados Financieros',
            'contenido' => 'La presentación de los resultados del Q3 será el 15 de octubre a las 11:00 AM en la Sala Ejecutiva. Se requiere asistencia obligatoria de gerencia.',
            'tags' => 'resultados, finanzas, trimestral, gerencia, reunion',
            'tipo' => 'evento'
        ]);

        // Vacaciones Colectivas
        KnowledgeItem::create([
            'titulo' => 'Periodo de Vacaciones Colectivas Diciembre',
            'contenido' => 'El periodo de cierre de fin de año será del 20 de diciembre al 3 de enero. Solo el personal de guardia de soporte IT deberá presentarse.',
            'tags' => 'vacaciones, diciembre, cierre, fecha, limite',
            'tipo' => 'fecha_importante'
        ]);
        
        // Jornada de Bienvenida
        KnowledgeItem::create([
            'titulo' => 'Jornada de Inducción para Nuevos Empleados (Noviembre)',
            'contenido' => 'Todos los nuevos colaboradores deben asistir a la jornada de inducción el primer lunes de cada mes en el Salón A, de 8:00 a 13:00.',
            'tags' => 'induccion, bienvenida, empleado, rrhh, actividad',
            'tipo' => 'evento'
        ]);
        
        // Fecha de Pago
        KnowledgeItem::create([
            'titulo' => 'Fechas de Pago de Nómina',
            'contenido' => 'La nómina se procesa los días 15 y 30 de cada mes. Si cae en fin de semana o festivo, se adelanta al día hábil anterior.',
            'tags' => 'nomina, pago, fecha, rrhh, sueldo',
            'tipo' => 'fecha_importante'
        ]);
        
        // Hackathon
        KnowledgeItem::create([
            'titulo' => 'Hackathon Anual de Innovación Tecnológica',
            'contenido' => 'Inscripciones abiertas para el Hackathon 2025. Se realizará del 10 al 12 de marzo. Premios para las tres mejores soluciones de IA.',
            'tags' => 'hackathon, innovacion, tecnologia, evento, concurso',
            'tipo' => 'evento'
        ]);

        // Último día para Gastos
        KnowledgeItem::create([
            'titulo' => 'Último Día para Envío de Reportes de Gastos',
            'contenido' => 'El envío de reportes de gastos del mes debe hacerse a más tardar el día 5 del mes siguiente. El incumplimiento resultará en retraso del reembolso.',
            'tags' => 'gastos, reembolso, finanzas, reporte, limite',
            'tipo' => 'fecha_importante'
        ]);
        
        // Conferencia Externa
        KnowledgeItem::create([
            'titulo' => 'Conferencia Internacional de Ciberseguridad',
            'contenido' => 'Se ofrecerán becas para asistir a la "Global Security Conference" en Dublín en abril. Interesados contactar a gerencia IT antes del 1 de febrero.',
            'tags' => 'conferencia, ciberseguridad, becas, it, evento',
            'tipo' => 'evento'
        ]);
        
        
        // --- 2. CURSOS, CAPACITACIÓN Y TUTORIALES (20 ítems) ---

        // Curso Base
        KnowledgeItem::create([
            'titulo' => 'Curso de Introducción a Docker y Contenedores',
            'contenido' => 'Curso obligatorio para nuevos desarrolladores. Se imparte todos los lunes a las 10:00 AM en la sala de capacitación 3. Requisito: Conocimiento básico de Linux.',
            'tags' => 'curso, docker, contenedores, capacitacion, desarrollo',
            'tipo' => 'curso'
        ]);

        // Tutorial Base
        KnowledgeItem::create([
            'titulo' => 'Tutorial: Configuración de Entorno Python con Virtualenv',
            'contenido' => 'Guía paso a paso para configurar un entorno de desarrollo aislado para proyectos Python utilizando la herramienta virtualenv.',
            'tags' => 'tutorial, python, virtualenv, entorno, desarrollo',
            'tipo' => 'tutorial'
        ]);

        // Curso de Liderazgo
        KnowledgeItem::create([
            'titulo' => 'Taller de Liderazgo y Gestión de Equipos Remotos',
            'contenido' => 'Dirigido a supervisores y gerentes. Martes y jueves de 14:00 a 16:00. Inscripciones abiertas hasta el 25 de septiembre.',
            'tags' => 'curso, taller, liderazgo, equipos, gerencia, rrhh',
            'tipo' => 'curso'
        ]);

        // Tutorial de Correo
        KnowledgeItem::create([
            'titulo' => 'Guía para Configurar Correo Empresarial en Móvil',
            'contenido' => 'Sigue esta guía detallada para sincronizar tu cuenta de correo @miempresa.com en dispositivos iOS y Android, utilizando el protocolo IMAP.',
            'tags' => 'tutorial, correo, email, movil, configuracion, imap',
            'tipo' => 'tutorial'
        ]);

        // Curso de UX/UI
        KnowledgeItem::create([
            'titulo' => 'Curso Avanzado de Diseño de Experiencia de Usuario (UX)',
            'contenido' => 'Curso intensivo de 4 semanas. Se cubrirán temas de testing A/B, wireframing y prototipado. Inicia el 5 de enero.',
            'tags' => 'curso, ux, ui, diseño, experiencia, capacitacion',
            'tipo' => 'curso'
        ]);

        // Tutorial de VPN
        KnowledgeItem::create([
            'titulo' => 'Procedimiento para Conexión a la VPN Corporativa',
            'contenido' => 'Para trabajar remotamente, debes descargar el cliente OpenVPN y usar tu usuario de red junto con el token generado por la app Auth.',
            'tags' => 'tutorial, vpn, remoto, acceso, red, seguridad',
            'tipo' => 'tutorial'
        ]);
        
        // Certificación
        KnowledgeItem::create([
            'titulo' => 'Información sobre la Certificación SCRUM Master',
            'contenido' => 'La empresa cubre el 50% del costo de la certificación. Los exámenes deben ser tomados antes del final del año fiscal. Contactar a RRHH para el código de descuento.',
            'tags' => 'certificacion, scrum, agile, master, beneficio',
            'tipo' => 'curso'
        ]);
        
        // Taller de Excel
        KnowledgeItem::create([
            'titulo' => 'Taller de Funciones Avanzadas de Microsoft Excel',
            'contenido' => 'Enfocado en análisis de datos, tablas dinámicas y macros básicas. Requisito: traer computadora personal con Excel instalado. Duración: 8 horas.',
            'tags' => 'taller, excel, datos, finanzas, capacitacion, office',
            'tipo' => 'curso'
        ]);

        // Tutorial Impresora
        KnowledgeItem::create([
            'titulo' => 'Cómo Instalar la Impresora de Red del Piso 4',
            'contenido' => 'Asegúrese de estar conectado a la red Wi-Fi "Corp-LAN". El nombre de la impresora es "PRN-4FL-COLOR". Utilice el driver genérico PCL6.',
            'tags' => 'tutorial, impresora, red, driver, it, instalacion',
            'tipo' => 'tutorial'
        ]);
        
        // Curso de Idiomas
        KnowledgeItem::create([
            'titulo' => 'Cursos de Inglés de Negocios Nivel B2',
            'contenido' => 'Clases de inglés online disponibles para todos los empleados los miércoles y viernes por la tarde. Inscripción por plataforma e-learning.',
            'tags' => 'curso, ingles, idiomas, negocios, e-learning',
            'tipo' => 'curso'
        ]);
        
        // Manual de Onboarding
        KnowledgeItem::create([
            'titulo' => 'Manual de Bienvenida y Onboarding',
            'contenido' => 'Documento que describe los primeros pasos en la empresa, cultura, valores y organigrama. Disponible en la intranet principal.',
            'tags' => 'manual, onboarding, bienvenida, induccion, rrhh',
            'tipo' => 'tutorial'
        ]);

        // Curso de Seguridad
        KnowledgeItem::create([
            'titulo' => 'Capacitación Obligatoria sobre Phishing y Ataques',
            'contenido' => 'Todos los empleados deben completar el curso de concientización sobre ciberseguridad antes del final del Q4. Enlace enviado por correo.',
            'tags' => 'curso, seguridad, ciberseguridad, phishing, obligatoria',
            'tipo' => 'curso'
        ]);
        
        // Tutorial de Backup
        KnowledgeItem::create([
            'titulo' => 'Guía Rápida para Respaldar Archivos Locales',
            'contenido' => 'Para hacer un respaldo de sus documentos locales, use la herramienta "BackupSync" ubicada en el menú de inicio y apunte a la unidad de red Z:.',
            'tags' => 'tutorial, backup, respaldo, archivos, it',
            'tipo' => 'tutorial'
        ]);

        // Taller de Presentaciones
        KnowledgeItem::create([
            'titulo' => 'Taller: Cómo crear Presentaciones de Alto Impacto',
            'contenido' => 'Enfocado en el uso efectivo de narrativas y diseño visual para presentaciones ejecutivas. Jueves 10 de octubre, Sala de Juntas 2.',
            'tags' => 'taller, presentacion, ejecutivo, comunicacion, diseño',
            'tipo' => 'curso'
        ]);

        // Tutorial de Redacción
        KnowledgeItem::create([
            'titulo' => 'Pautas para la Redacción de Informes Técnicos',
            'contenido' => 'Normas de formato, estilo y estructura para todos los documentos e informes generados por el equipo de ingeniería y desarrollo.',
            'tags' => 'tutorial, informe, redaccion, documentos, ingenieria',
            'tipo' => 'tutorial'
        ]);
        
        // Curso de Primeros Auxilios
        KnowledgeItem::create([
            'titulo' => 'Curso Básico de Primeros Auxilios y Emergencias',
            'contenido' => 'Curso voluntario de 4 horas en la enfermería. Se enseñará RCP y cómo usar un desfibrilador (DEA). Cupo limitado.',
            'tags' => 'curso, primeros auxilios, emergencia, salud, capacitacion',
            'tipo' => 'curso'
        ]);
        
        // Tutorial de Git
        KnowledgeItem::create([
            'titulo' => 'Tutorial: Resolución de Conflictos (Merge Conflicts) en Git',
            'contenido' => 'Guía avanzada para desarrolladores sobre cómo manejar y resolver conflictos de fusión (merge) en proyectos grandes usando Git.',
            'tags' => 'tutorial, git, merge, conflicto, desarrollo, codigo',
            'tipo' => 'tutorial'
        ]);

        // Curso de Base de Datos
        KnowledgeItem::create([
            'titulo' => 'Curso: Optimización de Consultas SQL y Performance',
            'contenido' => 'Técnicas avanzadas para escribir consultas eficientes y mejorar el rendimiento de la base de datos MySQL y PostgreSQL.',
            'tags' => 'curso, sql, base de datos, performance, optimizacion, it',
            'tipo' => 'curso'
        ]);

        // Tutorial de Teletrabajo
        KnowledgeItem::create([
            'titulo' => 'Recomendaciones para el Teletrabajo Productivo',
            'contenido' => 'Consejos sobre ergonomía, gestión del tiempo y herramientas de comunicación para mejorar la productividad trabajando desde casa.',
            'tags' => 'tutorial, teletrabajo, remoto, productividad, rrhh',
            'tipo' => 'tutorial'
        ]);

        // Curso de Finanzas
        KnowledgeItem::create([
            'titulo' => 'Seminario Web: Finanzas Personales para Empleados',
            'contenido' => 'Seminario sobre manejo de presupuesto, inversión y ahorro. Online, el último martes de cada mes. Inscripción gratuita.',
            'tags' => 'seminario, finanzas, personales, inversion, curso',
            'tipo' => 'curso'
        ]);


        // --- 3. HERRAMIENTAS Y RECURSOS TÉCNICOS (15 ítems) ---

        // Recurso Base (Git)
        KnowledgeItem::create([
            'titulo' => 'Servidor de Control de Versiones Git',
            'contenido' => 'La URL del servidor de Git de la compañía es: https://git.miempresa.com. Para acceso, contactar al equipo de Infraestructura.',
            'tags' => 'git, version, control, herramienta, repositorio',
            'tipo' => 'recurso'
        ]);

        // Recurso Base (JIRA)
        KnowledgeItem::create([
            'titulo' => 'Software de Gestión de Proyectos (JIRA)',
            'contenido' => 'Utilizamos JIRA para el seguimiento de tareas y sprints. El tablero principal se encuentra en: https://jira.miempresa.com/tablero/main.',
            'tags' => 'jira, proyecto, gestion, scrum, herramienta, agile',
            'tipo' => 'recurso'
        ]);
        
        // URL Intranet
        KnowledgeItem::create([
            'titulo' => 'Dirección de la Intranet Corporativa Principal',
            'contenido' => 'El portal interno para acceso a documentos, noticias y herramientas es: http://intranet.miempresa.com. Requiere VPN para acceso externo.',
            'tags' => 'intranet, portal, web, recurso, documentos',
            'tipo' => 'recurso'
        ]);
        
        // Herramienta de Chat
        KnowledgeItem::create([
            'titulo' => 'Plataforma Oficial de Comunicación (Slack/Teams)',
            'contenido' => 'La plataforma oficial para comunicación instantánea interna es Slack. Usar el canal #help-soporte para asistencia técnica inmediata.',
            'tags' => 'slack, teams, chat, comunicacion, herramienta',
            'tipo' => 'recurso'
        ]);
        
        // Servidor de Archivos
        KnowledgeItem::create([
            'titulo' => 'Ubicación del Servidor de Archivos Compartidos',
            'contenido' => 'La unidad de red compartida para todos los departamentos es la unidad S: (\\\\SRV-FILES01\\Shared).',
            'tags' => 'servidor, archivos, shared, red, recurso',
            'tipo' => 'recurso'
        ]);

        // Sistema ERP/Contable
        KnowledgeItem::create([
            'titulo' => 'Sistema ERP/Contable (SAP)',
            'contenido' => 'El sistema SAP se utiliza para finanzas, inventario y RRHH. El acceso se realiza a través del cliente SAP GUI, disponible en la intranet.',
            'tags' => 'erp, sap, finanzas, contabilidad, inventario',
            'tipo' => 'recurso'
        ]);

        // Gestor de Contraseñas
        KnowledgeItem::create([
            'titulo' => 'Herramienta de Gestión de Contraseñas Seguras',
            'contenido' => 'Se recomienda el uso de LastPass Enterprise para almacenar credenciales. Todos los usuarios nuevos deben ser registrados por IT.',
            'tags' => 'password, contraseña, seguridad, lastpass, it',
            'tipo' => 'recurso'
        ]);

        // Base de Datos Central
        KnowledgeItem::create([
            'titulo' => 'Información de Conexión a Base de Datos de Desarrollo',
            'contenido' => 'Host: DB-DEV-03. Puerto: 5432. Tipo: PostgreSQL. Solo para uso del equipo de desarrollo, no conectar desde producción.',
            'tags' => 'base de datos, postgresql, desarrollo, it, host',
            'tipo' => 'recurso'
        ]);

        // Herramienta de Monitoreo
        KnowledgeItem::create([
            'titulo' => 'Plataforma de Monitoreo de Sistemas (Datadog)',
            'contenido' => 'El estado en tiempo real de todos los servicios de producción se monitorea aquí: https://datadog.miempresa.com/dashboard/prod.',
            'tags' => 'monitoreo, datadog, sistemas, produccion, it',
            'tipo' => 'recurso'
        ]);
        
        // Herramienta de Diseño
        KnowledgeItem::create([
            'titulo' => 'Licencias de Software de Diseño Gráfico (Adobe)',
            'contenido' => 'Las licencias de Adobe Creative Cloud se asignan por solicitud directa al departamento de Marketing y Diseño.',
            'tags' => 'adobe, diseño, licencias, software, marketing',
            'tipo' => 'recurso'
        ]);

        // Servidor de Impresión
        KnowledgeItem::create([
            'titulo' => 'Dirección IP del Servidor de Impresión',
            'contenido' => 'La IP del servidor es 192.168.1.50. Útil para configuración manual o troubleshooting de impresoras.',
            'tags' => 'servidor, impresion, ip, it, tecnico',
            'tipo' => 'recurso'
        ]);

        // Herramienta de Videoconferencia
        KnowledgeItem::create([
            'titulo' => 'Uso de la Plataforma Google Meet/Zoom',
            'contenido' => 'El estándar de la compañía es Google Meet, aunque se permite Zoom para reuniones externas. Las cuentas son generadas automáticamente con el correo corporativo.',
            'tags' => 'meet, zoom, videoconferencia, comunicacion, software',
            'tipo' => 'recurso'
        ]);

        // Repositorio de Documentación
        KnowledgeItem::create([
            'titulo' => 'Confluence / Intranet de Documentación Técnica',
            'contenido' => 'Toda la documentación técnica (APIs, arquitectura, procedimientos) se aloja en Confluence: https://docs.miempresa.com.',
            'tags' => 'confluence, documentacion, tecnico, api, recurso',
            'tipo' => 'recurso'
        ]);

        // Repositorio de Código
        KnowledgeItem::create([
            'titulo' => 'URL del Repositorio de Código Legacy',
            'contenido' => 'El código del sistema antiguo se encuentra en Subversion (SVN) en https://svn.miempresa.com/legacy. Acceso con credenciales antiguas.',
            'tags' => 'svn, legacy, codigo, repositorio, recurso',
            'tipo' => 'recurso'
        ]);


        // --- 4. POLÍTICAS Y NORMATIVAS (15 ítems) ---

        // Política Base (Vacaciones)
        KnowledgeItem::create([
            'titulo' => 'Política de Vacaciones y Ausencias',
            'contenido' => 'Los empleados tienen derecho a 15 días hábiles de vacaciones anuales después de un año de servicio. Las solicitudes deben enviarse con al menos dos semanas de anticipación a RRHH.',
            'tags' => 'politica, vacaciones, rrhh, ausencias, norma',
            'tipo' => 'politica'
        ]);

        // Política Base (Contraseñas)
        KnowledgeItem::create([
            'titulo' => 'Directrices de Seguridad de Contraseñas',
            'contenido' => 'Todas las contraseñas deben tener al menos 12 caracteres, incluir mayúsculas, minúsculas, números y símbolos. Deben cambiarse cada 90 días.',
            'tags' => 'seguridad, contraseña, politica, it',
            'tipo' => 'politica'
        ]);

        // Código de Conducta
        KnowledgeItem::create([
            'titulo' => 'Código de Conducta y Ética Acdemica',
            'contenido' => 'Documento que detalla las expectativas de comportamiento, respeto y profesionalismo dentro y fuera del ambiente academico. Disponible en la sección de RRHH de la intranet.',
            'tags' => 'politica, conducta, etica, rrhh, norma',
            'tipo' => 'politica'
        ]);

        // Uso de Internet
        KnowledgeItem::create([
            'titulo' => 'Política de Uso de Internet y Redes Sociales',
            'contenido' => 'El uso de internet es para fines laborales. Se prohíbe el acceso a contenido ilegal o inapropiado. Las redes sociales deben usarse con discreción.',
            'tags' => 'politica, internet, redes sociales, uso, it',
            'tipo' => 'politica'
        ]);

        // Propiedad Intelectual
        KnowledgeItem::create([
            'titulo' => 'Política de Propiedad Intelectual y Confidencialidad',
            'contenido' => 'Todo el código, diseño y documentos creados por los empleados son propiedad de la empresa, incluso si se crean fuera de horario laboral.',
            'tags' => 'politica, propiedad intelectual, confidencialidad, legal',
            'tipo' => 'politica'
        ]);
        
        // Uso de Equipos
        KnowledgeItem::create([
            'titulo' => 'Reglamento de Uso de Equipos y Activos Físicos',
            'contenido' => 'Los equipos asignados son para uso exclusivo de la empresa. No está permitido instalar software no autorizado ni modificar la configuración de hardware.',
            'tags' => 'politica, hardware, equipo, activos, it',
            'tipo' => 'politica'
        ]);

        // Vestimenta
        KnowledgeItem::create([
            'titulo' => 'Política de Vestimenta (Dress Code)',
            'contenido' => 'El código de vestimenta es "Smart Casual" de lunes a jueves. Los viernes se permite vestimenta casual (Jeans Day).',
            'tags' => 'politica, vestimenta, dress code, rrhh',
            'tipo' => 'politica'
        ]);

        // Horarios
        KnowledgeItem::create([
            'titulo' => 'Regulación de Horarios de Trabajo y Flexibilidad',
            'contenido' => 'El horario estándar es de 9:00 a 18:00 con una hora de comida. Se permite flexibilidad de 30 minutos de entrada/salida previo acuerdo con el supervisor.',
            'tags' => 'politica, horario, flexibilidad, rrhh',
            'tipo' => 'politica'
        ]);
        
        // Acoso
        KnowledgeItem::create([
            'titulo' => 'Política de Prevención de Acoso y Discriminación',
            'contenido' => 'La empresa mantiene una política de tolerancia cero ante el acoso. Cualquier incidente debe ser reportado inmediatamente a RRHH o al departamento Legal.',
            'tags' => 'politica, acoso, discriminacion, legal, rrhh, denuncia',
            'tipo' => 'politica'
        ]);

        // Seguridad Física
        KnowledgeItem::create([
            'titulo' => 'Normas de Acceso y Seguridad Física del Edificio',
            'contenido' => 'Es obligatorio portar la credencial de identificación en todo momento. Prohibido permitir el acceso a personas sin credencial.',
            'tags' => 'politica, seguridad, acceso, edificio, credencial',
            'tipo' => 'politica'
        ]);

        // Procesamiento de Datos
        KnowledgeItem::create([
            'titulo' => 'Política de Tratamiento y Protección de Datos (GDPR/LOPD)',
            'contenido' => 'Directrices sobre cómo se deben manejar, almacenar y procesar los datos personales de clientes y empleados, en cumplimiento con la normativa vigente.',
            'tags' => 'politica, datos, gdpr, lopd, legal, seguridad',
            'tipo' => 'politica'
        ]);

        // Horas Extra
        KnowledgeItem::create([
            'titulo' => 'Reglamento sobre Horas Extra y Compensación',
            'contenido' => 'Las horas extra deben ser aprobadas previamente por el supervisor y se compensarán con tiempo libre o pago 1.5x, según la legislación local.',
            'tags' => 'politica, horas extra, compensacion, rrhh, nomina',
            'tipo' => 'politica'
        ]);

        // Cuentas de Usuario
        KnowledgeItem::create([
            'titulo' => 'Política de Baja y Eliminación de Cuentas de Usuario',
            'contenido' => 'Las cuentas de correo y sistema se desactivan inmediatamente al término de la relación laboral y se eliminan 90 días después, tras el respaldo de datos.',
            'tags' => 'politica, cuenta, usuario, baja, it, rrhh',
            'tipo' => 'politica'
        ]);


        // --- 5. CONTACTOS CLAVE Y UBICACIONES (15 ítems) ---

        // Contacto Base (IT)
        KnowledgeItem::create([
            'titulo' => 'Contacto Soporte Técnico IT',
            'contenido' => 'Para problemas técnicos o de hardware, contactar a soporte a través del correo: soporte@miempresa.com o la extensión telefónica 555.',
            'tags' => 'contacto, soporte, it, tecnico, ayuda',
            'tipo' => 'contacto'
        ]);

        // Contacto Base (RRHH)
        KnowledgeItem::create([
            'titulo' => 'Contacto Recursos Humanos (RRHH)',
            'contenido' => 'Para consultas sobre nómina, beneficios o políticas, enviar un correo a rrhh@miempresa.com. Contacto: María Pérez.',
            'tags' => 'contacto, rrhh, nomina, recursos, humanos',
            'tipo' => 'contacto'
        ]);
        
        // Director General
        KnowledgeItem::create([
            'titulo' => 'Contacto Dirección General',
            'contenido' => 'Director: Juan Martínez. Asistente: Laura Gómez. Correo: direccion@miempresa.com. Ext. 100. Solo para asuntos de alto nivel.',
            'tags' => 'contacto, director, gerencia, ejecutivo',
            'tipo' => 'contacto'
        ]);

        // Sala de Reuniones
        KnowledgeItem::create([
            'titulo' => 'Ubicación de la Sala de Reuniones',
            'contenido' => 'La sala se encuentra en el Piso 2. Capacidad para 12 personas, equipada con proyector y videoconferencia.',
            'tags' => 'ubicacion, sala, reunion, piso 5, espacio',
            'tipo' => 'ubicacion'
        ]);
        
        // Ubicación de Cafetería
        KnowledgeItem::create([
            'titulo' => 'Horarios y Ubicación de la Cafetería',
            'contenido' => 'La cafetería está ubicada en la planta baja, Piso 0. Abierta de 8:00 a 17:00. El servicio de comida es de 13:00 a 14:00.',
            'tags' => 'ubicacion, cafeteria, comida, horario, piso 0',
            'tipo' => 'ubicacion'
        ]);

        // Legal
        KnowledgeItem::create([
            'titulo' => 'Contacto Departamento Legal',
            'contenido' => 'Para temas de contratos, cumplimiento y disputas: legal@miempresa.com. Abogado Principal: Lic. Ana Torres. Ext. 401.',
            'tags' => 'contacto, legal, contratos, cumplimiento, abogado',
            'tipo' => 'contacto'
        ]);

        // Estacionamiento
        KnowledgeItem::create([
            'titulo' => 'Acceso y Normativa del Estacionamiento',
            'contenido' => 'El estacionamiento para empleados se encuentra en el sótano 2. Se requiere tarjeta de proximidad para el acceso. Los visitantes deben registrarse en recepción.',
            'tags' => 'ubicacion, estacionamiento, acceso, vehiculos, seguridad',
            'tipo' => 'ubicacion'
        ]);

        // Casilleros
        KnowledgeItem::create([
            'titulo' => 'Ubicación de los Casilleros Personales',
            'contenido' => 'Los casilleros se encuentran cerca de los baños del piso 3. Contactar a RRHH para la asignación de su llave o combinación.',
            'tags' => 'ubicacion, casilleros, pertenencias, rrhh',
            'tipo' => 'ubicacion'
        ]);

        // Sala de Servidores
        KnowledgeItem::create([
            'titulo' => 'Acceso a la Sala de Servidores (Data Center)',
            'contenido' => 'Acceso restringido solo al personal de IT. Requiere doble autenticación y registro biométrico. Está ubicada en el sótano 1.',
            'tags' => 'ubicacion, servidor, data center, it, acceso, seguridad',
            'tipo' => 'ubicacion'
        ]);


        // --- 6. PREGUNTAS FRECUENTES Y PROCEDIMIENTOS (25 ítems) ---

        // Pregunta: Cambio de Contraseña
        KnowledgeItem::create([
            'titulo' => 'FAQ: Cómo Cambiar mi Contraseña de Red',
            'contenido' => 'Presione Ctrl+Alt+Del, seleccione "Cambiar contraseña" y siga las directrices. Debe ser diferente a las últimas 5 usadas.',
            'tags' => 'faq, contraseña, password, cambio, it, procedimiento',
            'tipo' => 'procedimiento'
        ]);
        
        // Pregunta: Días de Vacaciones
        KnowledgeItem::create([
            'titulo' => 'FAQ: ¿Cuántos días de vacaciones me quedan?',
            'contenido' => 'Consulte el portal de RRHH en https://rrhh.miempresa.com/vacaciones. La cifra se actualiza al final de cada mes.',
            'tags' => 'faq, vacaciones, dias, rrhh, consulta',
            'tipo' => 'procedimiento'
        ]);

        // Procedimiento: Reportar Accidente
        KnowledgeItem::create([
            'titulo' => 'Procedimiento para Reportar un Accidente',
            'contenido' => 'Contactar inmediatamente a la brigada de emergencias (Ext. 911), notificar al supervisor y llenar el formulario de incidente en la oficina de RRHH.',
            'tags' => 'accidente, emergencia, rrhh, procedimiento, reporte',
            'tipo' => 'procedimiento'
        ]);

        // Pregunta: Acceso Remoto
        KnowledgeItem::create([
            'titulo' => 'FAQ: ¿Puedo trabajar desde casa?',
            'contenido' => 'Sí, el teletrabajo está permitido hasta 2 días a la semana, previa autorización del jefe de departamento. Es obligatorio usar la VPN.',
            'tags' => 'faq, teletrabajo, remoto, politica, vpn',
            'tipo' => 'procedimiento'
        ]);
        
        // Procedimiento: Nuevo Software
        KnowledgeItem::create([
            'titulo' => 'Procedimiento para Solicitud de Nuevo Software',
            'contenido' => 'Llenar el formulario de "Solicitud de Licencia de Software" en el portal de tickets, justificando la necesidad y el costo. Requiere aprobación de IT y Finanzas.',
            'tags' => 'software, licencia, solicitud, procedimiento, it, finanzas',
            'tipo' => 'procedimiento'
        ]);

        // Pregunta: Internet Lento
        KnowledgeItem::create([
            'titulo' => 'FAQ: ¿Qué hacer si el internet está lento?',
            'contenido' => 'Primero, reinicie su router y computadora. Si el problema persiste, verifique el estado del sistema en Datadog y luego abra un ticket de soporte.',
            'tags' => 'faq, internet, lento, problema, it, soporte',
            'tipo' => 'procedimiento'
        ]);
        
        // Procedimiento: Salida del Empleado
        KnowledgeItem::create([
            'titulo' => 'Checklist de Salida de Empleados (Offboarding)',
            'contenido' => 'El supervisor debe asegurar la devolución de laptop, teléfono y credenciales, y notificar a IT para la baja de cuentas.',
            'tags' => 'procedimiento, salida, offboarding, rrhh, it',
            'tipo' => 'procedimiento'
        ]);
        
        // Procedimiento: Reclamo Nómina
        KnowledgeItem::create([
            'titulo' => 'Procedimiento para Reclamo o Error en Nómina',
            'contenido' => 'Enviar un correo a rrhh@miempresa.com con el asunto "Error de Nómina - [Fecha]". Adjuntar el comprobante de pago. Plazo máximo de 5 días hábiles.',
            'tags' => 'nomina, error, reclamo, rrhh, procedimiento, pago',
            'tipo' => 'procedimiento'
        ]);

        // Pregunta: Formato de Informes
        KnowledgeItem::create([
            'titulo' => 'FAQ: ¿Cuál es el formato oficial de informes?',
            'contenido' => 'Todos los informes deben usar la plantilla "Plantilla-Informe-Oficial.dotx", disponible en la unidad S: /Documentos/Plantillas.',
            'tags' => 'faq, informe, formato, plantilla, documentos',
            'tipo' => 'procedimiento'
        ]);

        // Pregunta: Teléfono
        KnowledgeItem::create([
            'titulo' => 'FAQ: ¿Cómo hacer llamadas a larga distancia?',
            'contenido' => 'Para llamadas nacionales, marque 0. Para llamadas internacionales, marque 00 y luego el código del país. Solicite permiso a su supervisor para llamadas internacionales.',
            'tags' => 'faq, telefono, llamadas, larga distancia, procedimiento',
            'tipo' => 'procedimiento'
        ]);
        
        // Procedimiento: Devolución de Equipo
        KnowledgeItem::create([
            'titulo' => 'Procedimiento de Devolución de Equipo al Dejar la Empresa',
            'contenido' => 'Debe entregar su laptop, monitor, mouse, teclado, teléfono móvil (si fue provisto) y credencial a IT el último día de trabajo.',
            'tags' => 'procedimiento, equipo, devolucion, it, rrhh',
            'tipo' => 'procedimiento'
        ]);
        
        // Pregunta: Clave Wi-Fi
        KnowledgeItem::create([
            'titulo' => 'FAQ: ¿Cuál es la clave de la red Wi-Fi de visitantes?',
            'contenido' => 'La clave de la red "Guest-WiFi" es: MiEmpresa2025!. Debe expirar cada mes. Pregunte en recepción para la clave actualizada.',
            'tags' => 'faq, wifi, clave, red, visitantes, it',
            'tipo' => 'procedimiento'
        ]);
        
        // Procedimiento: Reserva de Sala
        KnowledgeItem::create([
            'titulo' => 'Procedimiento para Reservar Salas de Reuniones',
            'contenido' => 'Use el calendario de Google Calendar e invite al recurso de la sala (ej. sala-elsol@miempresa.com) a su evento. La reserva es por hora.',
            'tags' => 'procedimiento, sala, reunion, reserva, calendario',
            'tipo' => 'procedimiento'
        ]);
        
        // Pregunta: Parking
        KnowledgeItem::create([
            'titulo' => 'FAQ: ¿Hay estacionamiento para bicicletas?',
            'contenido' => 'Sí, existe un área de estacionamiento seguro para bicicletas y motocicletas en el Piso 0, junto a la entrada de personal.',
            'tags' => 'faq, estacionamiento, bicicletas, ubicacion',
            'tipo' => 'procedimiento'
        ]);

        // Procedimiento: Archivo Digital
        KnowledgeItem::create([
            'titulo' => 'Procedimiento de Nombramiento de Archivos Digitales',
            'contenido' => 'Todos los documentos finales deben nombrarse como: [TipoDoc]\_[FechaAAAAMMDD]\_[DescripcionCorta]\_[Version]. Ejemplo: INF\_20250614\_VentasQ2\_V1.',
            'tags' => 'procedimiento, archivos, documentos, nombramiento, norma',
            'tipo' => 'procedimiento'
        ]);

        // Procedimiento: Reporte de Bug
        KnowledgeItem::create([
            'titulo' => 'Pautas para Reportar un Bug de Software (Desarrolladores)',
            'contenido' => 'Crear un ticket en JIRA. Debe incluir: Pasos para replicar, Resultado esperado, Resultado actual, Captura de pantalla y Versión del software.',
            'tags' => 'bug, error, reporte, jira, desarrollo, procedimiento',
            'tipo' => 'procedimiento'
        ]);

        // Pregunta: Horario Cafetería
        KnowledgeItem::create([
            'titulo' => 'FAQ: ¿A qué hora abre la cafetería?',
            'contenido' => 'La cafetería abre a las 8:00 AM para el desayuno y cierra a las 5:00 PM. El servicio de almuerzo es de 1:00 PM a 2:00 PM.',
            'tags' => 'faq, cafeteria, horario, comida, ubicacion',
            'tipo' => 'procedimiento'
        ]);

        // Pregunta: Mantenimiento
        KnowledgeItem::create([
            'titulo' => 'FAQ: ¿Cómo solicito mantenimiento para mi silla?',
            'contenido' => 'Abra un ticket de soporte de "Facilities" en el portal de tickets. Especifique el número de su silla o escritorio. Tiempo de respuesta: 24h.',
            'tags' => 'faq, mantenimiento, silla, facilities, ticket, soporte',
            'tipo' => 'procedimiento'
        ]);

        // Procedimiento: Nuevo Empleado
        KnowledgeItem::create([
            'titulo' => 'Procedimiento de Alta de Nuevo Empleado (Onboarding IT)',
            'contenido' => 'El equipo de IT debe asegurar que la laptop esté configurada, las cuentas de red y correo activas, y la credencial de acceso emitida antes del día 1.',
            'tags' => 'procedimiento, onboarding, it, rrhh, alta, cuenta',
            'tipo' => 'procedimiento'
        ]);

        // Procedimiento: Emergencia
        KnowledgeItem::create([
            'titulo' => 'Ruta de Evacuación y Puntos de Encuentro',
            'contenido' => 'En caso de alarma de incendio o sismo, siga la ruta de evacuación más cercana marcada en el plano. El punto de encuentro es la Plaza Central frente al edificio.',
            'tags' => 'procedimiento, emergencia, evacuacion, seguridad, ubicacion',
            'tipo' => 'procedimiento'
        ]);
        
        // Pregunta: Licencia
        KnowledgeItem::create([
            'titulo' => 'FAQ: ¿Cómo solicito una licencia de software específica?',
            'contenido' => 'Si el software no está en la lista estándar, debe llenar el formulario especial "Solicitud de Licencia de Terceros" y esperar 10 días para la aprobación.',
            'tags' => 'faq, licencia, software, it, solicitud',
            'tipo' => 'procedimiento'
        ]);

        // --- 7. INFRAESTRUCTURA Y HARDWARE (10 ítems) ---

        // Configuración de Portátil
        KnowledgeItem::create([
            'titulo' => 'Especificaciones Estándar de Laptop para Empleados',
            'contenido' => 'Todos los empleados de desarrollo reciben una Dell Latitude Core i7, 16GB RAM, SSD de 512GB. Otros puestos reciben Core i5, 8GB RAM.',
            'tags' => 'hardware, laptop, equipo, it, especificaciones',
            'tipo' => 'infraestructura'
        ]);
        
        // Conexión a Monitor
        KnowledgeItem::create([
            'titulo' => 'Guía de Conexión de Monitores Duales (DisplayPort)',
            'contenido' => 'Utilice el adaptador USB-C a DisplayPort provisto para conectar dos monitores externos a su laptop corporativa.',
            'tags' => 'hardware, monitor, displayport, it, conexion',
            'tipo' => 'infraestructura'
        ]);

        // Teléfono IP
        KnowledgeItem::create([
            'titulo' => 'Manual de Usuario del Teléfono IP de Escritorio',
            'contenido' => 'El teléfono IP utiliza la red ethernet. Para transferir una llamada, presione *TRANSFER* y luego la extensión deseada.',
            'tags' => 'hardware, telefono, ip, comunicacion, manual',
            'tipo' => 'infraestructura'
        ]);

        // Estatus de Red
        KnowledgeItem::create([
            'titulo' => 'Dirección para Verificar el Estatus de la Red Corporativa',
            'contenido' => 'Si sospecha de un problema de red, revise el dashboard público del estado de los servicios en https://status.miempresa.com.',
            'tags' => 'infraestructura, red, status, it, problema',
            'tipo' => 'infraestructura'
        ]);

        // Proyector Sala
        KnowledgeItem::create([
            'titulo' => 'Instrucciones para Usar el Proyector de la Sala Ejecutiva',
            'contenido' => 'El proyector se enciende con el control remoto del cajón. Conectar la laptop al puerto HDMI del panel de pared. No requiere clave.',
            'tags' => 'hardware, proyector, sala, reunion, hdmi',
            'tipo' => 'infraestructura'
        ]);
        
        // Cámaras
        KnowledgeItem::create([
            'titulo' => 'Protocolo de Revisión de Cámaras de Seguridad',
            'contenido' => 'Solo el personal de seguridad y Legal puede acceder a las grabaciones de las cámaras. Se requiere un formulario de solicitud formal para su revisión.',
            'tags' => 'infraestructura, seguridad, camaras, legal, protocolo',
            'tipo' => 'infraestructura'
        ]);

        // UPS
        KnowledgeItem::create([
            'titulo' => 'Tiempo de Respaldo de UPS en Sala de Servidores',
            'contenido' => 'El sistema UPS proporciona 30 minutos de energía de respaldo al Data Center, suficiente para un apagado seguro en caso de fallo prolongado.',
            'tags' => 'infraestructura, ups, servidor, data center, energia',
            'tipo' => 'infraestructura'
        ]);

        // VPN Global
        KnowledgeItem::create([
            'titulo' => 'Información de Puntos de Acceso Global de VPN',
            'contenido' => 'Se dispone de VPN en Norteamérica, Europa y Asia. Conéctese al punto más cercano a su ubicación para un mejor rendimiento.',
            'tags' => 'infraestructura, vpn, global, acceso, red',
            'tipo' => 'infraestructura'
        ]);
        
        // Cableado
        KnowledgeItem::create([
            'titulo' => 'Estándar de Cableado de Red (CAT6)',
            'contenido' => 'Toda la red de la oficina utiliza cableado de categoría 6 (CAT6) para soportar velocidades de hasta 10 Gbps en distancias cortas.',
            'tags' => 'infraestructura, cableado, red, cat6, it, tecnico',
            'tipo' => 'infraestructura'
        ]);

        // Firewall
        KnowledgeItem::create([
            'titulo' => 'Reglas de Firewall para Tráfico Saliente (Puerto 80/443)',
            'contenido' => 'Por defecto, todo el tráfico saliente en los puertos HTTP (80) y HTTPS (443) está permitido. Otros puertos requieren solicitud formal.',
            'tags' => 'infraestructura, firewall, seguridad, it, reglas, puerto',
            'tipo' => 'infraestructura'
        ]);

        // --- 8. ACADÉMICO Y UNIVERSITARIO (15 ítems) ---

        // Puntos de Crédito
        KnowledgeItem::create([
            'titulo' => 'Requisitos Mínimos de Puntos de Crédito para Graduación',
            'contenido' => 'Se requieren 300 puntos de crédito para obtener la licenciatura. Los proyectos finales valen 15 puntos cada uno.',
            'tags' => 'academico, creditos, graduacion, licenciatura, requisitos',
            'tipo' => 'academico'
        ]);
        
        // Horario Clases
        KnowledgeItem::create([
            'titulo' => 'Horario de Clases del Primer Semestre 2026',
            'contenido' => 'Los horarios están disponibles en el portal del estudiante: https://portal.universidad.edu/horarios. La inscripción cierra el 15 de enero.',
            'tags' => 'academico, horario, clases, inscripcion, universidad',
            'tipo' => 'academico'
        ]);

        // Contacto Biblioteca
        KnowledgeItem::create([
            'titulo' => 'Contacto y Horario de la Biblioteca Central',
            'contenido' => 'La biblioteca atiende de lunes a viernes de 8:00 a 20:00. Sábados de 9:00 a 14:00. Correo de contacto: biblioteca@universidad.edu.',
            'tags' => 'academico, biblioteca, horario, contacto, recurso',
            'tipo' => 'contacto'
        ]);

        // Exámenes Finales
        KnowledgeItem::create([
            'titulo' => 'Calendario de Exámenes Finales (Junio)',
            'contenido' => 'Consulte las fechas específicas de sus exámenes finales en la cartelera del Departamento de Estudios. Las salas se publicarán una semana antes.',
            'tags' => 'academico, examen, final, calendario, fecha',
            'tipo' => 'fecha_importante'
        ]);
        
        // Beca
        KnowledgeItem::create([
            'titulo' => 'Requisitos para Solicitar la Beca de Excelencia Académica',
            'contenido' => 'Mantener un promedio mínimo de 9.0 y no tener materias reprobadas. La convocatoria abre en agosto de cada año.',
            'tags' => 'academico, beca, excelencia, requisitos, solicitud',
            'tipo' => 'academico'
        ]);
        
        // Servicio Social
        KnowledgeItem::create([
            'titulo' => 'Normativa y Horas de Servicio Social Obligatorio',
            'contenido' => 'Se requieren 480 horas de servicio social para la titulación. Se puede iniciar después de completar el 70% de los créditos de la carrera.',
            'tags' => 'academico, servicio social, titulación, normativa, horas',
            'tipo' => 'academico'
        ]);

        // Tutorías
        KnowledgeItem::create([
            'titulo' => 'Horarios y Ubicación del Centro de Tutorías',
            'contenido' => 'El centro de tutorías gratuitas está en el edificio B, piso 2. Se ofrecen sesiones de matemáticas, física y programación de 16:00 a 18:00.',
            'tags' => 'academico, tutorias, ayuda, estudiante, ubicacion',
            'tipo' => 'academico'
        ]);

        // Reinscripción
        KnowledgeItem::create([
            'titulo' => 'Procedimiento de Reinscripción para Alumnos Regulares',
            'contenido' => 'Realizar el pago de matrícula y seleccionar materias en el portal antes del 1 de febrero. Los alumnos con adeudos no podrán reinscribirse.',
            'tags' => 'academico, reinscripcion, matricula, pago, procedimiento',
            'tipo' => 'procedimiento'
        ]);

        // Materias Optativas
        KnowledgeItem::create([
            'titulo' => 'Listado de Materias Optativas Disponibles (Primavera 2026)',
            'contenido' => 'Incluye: Inteligencia Artificial, Robótica Avanzada, y Gestión de Proyectos. El cupo es limitado para todas las optativas.',
            'tags' => 'academico, materias, optativas, cursos, universidad',
            'tipo' => 'academico'
        ]);

        // Correo Estudiantil
        KnowledgeItem::create([
            'titulo' => 'Activación de la Cuenta de Correo Estudiantil (@alumno.edu)',
            'contenido' => 'Su correo se activa 48 horas después de su inscripción. El formato es: [InicialNombre][Apellido]@alumno.edu. La contraseña inicial es su CURP.',
            'tags' => 'academico, correo, email, estudiante, cuenta',
            'tipo' => 'procedimiento'
        ]);

        // Tesis
        KnowledgeItem::create([
            'titulo' => 'Reglamento para la Presentación y Defensa de Tesis',
            'contenido' => 'El borrador final debe ser entregado al menos 3 meses antes de la defensa. Se requiere la aprobación de tres sinodales y el Director de Tesis.',
            'tags' => 'academico, tesis, reglamento, graduacion, defensa',
            'tipo' => 'politica'
        ]);

        // Cómputo
        KnowledgeItem::create([
            'titulo' => 'Horario y Normas de los Laboratorios de Cómputo',
            'contenido' => 'Los laboratorios están abiertos de 7:00 a 22:00. Prohibido consumir alimentos y bebidas. Guardar archivos solo en la nube o en dispositivos personales.',
            'tags' => 'academico, laboratorio, computo, horario, norma',
            'tipo' => 'ubicacion'
        ]);

        // Intercambio
        KnowledgeItem::create([
            'titulo' => 'Información sobre Programas de Intercambio Estudiantil',
            'contenido' => 'La convocatoria para intercambios europeos abre en marzo. Requisito: Promedio de 8.5, y TOEFL iBT de 80 puntos o más.',
            'tags' => 'academico, intercambio, beca, convocatoria, universidad',
            'tipo' => 'academico'
        ]);
        
        // Baja Temporal
        KnowledgeItem::create([
            'titulo' => 'Procedimiento para Solicitar Baja Temporal de la Carrera',
            'contenido' => 'Llenar el formulario de baja en la Dirección de Servicios Escolares. Se permite una baja temporal de hasta dos semestres sin perder la calidad de alumno.',
            'tags' => 'academico, baja, temporal, procedimiento, carrera',
            'tipo' => 'procedimiento'
        ]);

        // Credencial
        KnowledgeItem::create([
            'titulo' => 'Costo y Procedimiento para Reposición de Credencial',
            'contenido' => 'El costo de reposición es de $150 MXN. Pagar en caja y presentar el comprobante en Servicios Escolares. La entrega tarda 3 días hábiles.',
            'tags' => 'academico, credencial, reposicion, costo, pago',
            'tipo' => 'procedimiento'
        ]);


        // --- 9. FINANZAS Y ADQUISICIONES (15 ítems) ---

        // Presupuesto Anual
        KnowledgeItem::create([
            'titulo' => 'Calendario de Elaboración del Presupuesto Anual (2026)',
            'contenido' => 'Los borradores de presupuesto deben ser enviados a Finanzas antes del 30 de septiembre. La aprobación final se notifica el 1 de diciembre.',
            'tags' => 'finanzas, presupuesto, anual, fecha, limite',
            'tipo' => 'fecha_importante'
        ]);

        // Facturación
        KnowledgeItem::create([
            'titulo' => 'Sistema de Facturación Electrónica (CFDI)',
            'contenido' => 'El portal de facturación se encuentra en https://cfdi.miempresa.com. Los clientes pueden descargar sus facturas ahí usando su ticket de compra.',
            'tags' => 'finanzas, facturacion, cfdi, portal, cliente',
            'tipo' => 'recurso'
        ]);

        // Tarjeta Corporativa
        KnowledgeItem::create([
            'titulo' => 'Normas de Uso de la Tarjeta de Crédito Corporativa',
            'contenido' => 'La tarjeta corporativa es para gastos operativos de la empresa. Prohibido su uso para gastos personales o retiros de efectivo. Límite mensual: $5,000 USD.',
            'tags' => 'finanzas, tarjeta, credito, corporativa, politica, norma',
            'tipo' => 'politica'
        ]);

        // Cierre Mes
        KnowledgeItem::create([
            'titulo' => 'Procedimiento de Cierre de Mes Contable',
            'contenido' => 'Todos los departamentos deben enviar sus ajustes contables a Finanzas antes del día 3 del mes siguiente. El cierre oficial es el día 5.',
            'tags' => 'finanzas, contable, cierre, mes, procedimiento',
            'tipo' => 'procedimiento'
        ]);

        // Activos Fijos
        KnowledgeItem::create([
            'titulo' => 'Inventario y Etiquetado de Activos Fijos',
            'contenido' => 'Todo activo con un valor superior a $200 USD debe ser etiquetado y registrado en el inventario de activos fijos. Reporte el movimiento a Finanzas.',
            'tags' => 'finanzas, inventario, activos, fijos, politica, hardware',
            'tipo' => 'politica'
        ]);

        // Presupuesto Marketing
        KnowledgeItem::create([
            'titulo' => 'Límites de Gasto para Presupuesto de Marketing',
            'contenido' => 'El presupuesto de marketing está limitado al 15% de los ingresos trimestrales. Cualquier gasto superior requiere la aprobación del CEO.',
            'tags' => 'finanzas, marketing, presupuesto, limite, gasto',
            'tipo' => 'politica'
        ]);


        // --- 10. PRODUCTO Y OPERACIONES (15 ítems) ---
        
        // Versión Actual
        KnowledgeItem::create([
            'titulo' => 'Versión Actual del Software de Producción',
            'contenido' => 'La versión que actualmente está en línea para los clientes es la 1.8.4. La próxima actualización (1.9.0) está programada para el 20 de julio.',
            'tags' => 'producto, software, version, produccion, cliente',
            'tipo' => 'recurso'
        ]);

        // Ciclo de Vida
        KnowledgeItem::create([
            'titulo' => 'Ciclo de Vida de Desarrollo de Software (SDLC)',
            'contenido' => 'El proceso sigue las etapas de Planificación, Diseño, Implementación, Testing, Despliegue y Mantenimiento (Metodología DevOps).',
            'tags' => 'producto, desarrollo, sdlc, devops, metodologia',
            'tipo' => 'procedimiento'
        ]);

        // Testing
        KnowledgeItem::create([
            'titulo' => 'Procedimiento de Pruebas y Aseguramiento de Calidad (QA)',
            'contenido' => 'Todas las nuevas características deben pasar pruebas unitarias (80% de cobertura), de integración y de usuario final (UAT) antes del despliegue.',
            'tags' => 'producto, testing, qa, uat, calidad, procedimiento',
            'tipo' => 'procedimiento'
        ]);

        // Defectos
        KnowledgeItem::create([
            'titulo' => 'Defectos Conocidos en la Versión Actual (1.8.4)',
            'contenido' => 'Existe un defecto conocido en el módulo de reportes que afecta la exportación a Excel. ID de JIRA: BUG-456. Se corregirá en 1.9.0.',
            'tags' => 'producto, defecto, bug, error, jira, conocido',
            'tipo' => 'recurso'
        ]);
        
        // Soporte
        KnowledgeItem::create([
            'titulo' => 'Tiempos de Respuesta (SLA) de Soporte',
            'contenido' => 'Prioridad Alta (Caída de Servicio): 1 hora. Prioridad Media (Error Crítico): 4 horas. Prioridad Baja (Consulta): 24 horas.',
            'tags' => 'operaciones, sla, soporte, ticket, kpi, tiempo',
            'tipo' => 'politica'
        ]);

        // Producción
        KnowledgeItem::create([
            'titulo' => 'Ventanas de Mantenimiento de Producción Programadas',
            'contenido' => 'El mantenimiento se realiza el tercer sábado de cada mes, de 1:00 AM a 5:00 AM. Se notifica a los clientes 48 horas antes.',
            'tags' => 'operaciones, produccion, mantenimiento, horario, fecha, it',
            'tipo' => 'fecha_importante'
        ]);

        // Mejora
        KnowledgeItem::create([
            'titulo' => 'Canal para Sugerencias de Mejora',
            'contenido' => 'Las sugerencias de características o mejoras  deben registrarse en el sistema de gestión de ideas de JIRA, usando el proyecto "IDEAS".',
            'tags' => 'producto, mejora, sugerencia, jira, ideas',
            'tipo' => 'recurso'
        ]);

        // Crecimiento
        KnowledgeItem::create([
            'titulo' => 'Proyección de Crecimiento de Usuarios (Q4)',
            'contenido' => 'Se espera un crecimiento de 15% en la base de usuarios activos para el último trimestre del año fiscal, impulsado por la nueva campaña de marketing.',
            'tags' => 'producto, crecimiento, usuarios, kpi, proyeccion',
            'tipo' => 'recurso'
        ]);

        // Mantenimiento
        KnowledgeItem::create([
            'titulo' => 'Recomendaciones de Mantenimiento Preventivo de Hardware',
            'contenido' => 'Limpieza de ventiladores, actualización de firmware y escaneo de disco duro una vez cada 6 meses. Contactar a IT para coordinar.',
            'tags' => 'operaciones, mantenimiento, hardware, it, preventivo',
            'tipo' => 'procedimiento'
        ]);
        
        // Ejecución de la creación de ítems
        // (Aquí iría la ejecución, pero como el código es solo el método run, ya está implícito en los bloques de arriba)
        
    }
} 