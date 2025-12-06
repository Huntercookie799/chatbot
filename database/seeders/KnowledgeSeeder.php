<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\KnowledgeItem;
use Illuminate\Support\Facades\DB;

class KnowledgeSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() 
    {
        // --- 1. EVENTOS Y FECHAS IMPORTANTES (10 ítems) ---
        DB::table('knowledge_items')->truncate();
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

        // Vacaciones Colectivas
        KnowledgeItem::create([
            'titulo' => 'Periodo de Vacaciones Diciembre',
            'contenido' => 'El periodo de cierre de fin de año será del 20 de diciembre al 3 de enero. Solo el personal de guardia de soporte IT deberá presentarse.',
            'tags' => 'vacaciones, diciembre, cierre, fecha, limite',
            'tipo' => 'fecha_importante'
        ]);
        
        // Jornada de Bienvenida
        KnowledgeItem::create([
            'titulo' => 'Jornada de Inducción para nuevo ingreso',
            'contenido' => 'Todos los estudiantes de nuevo ingreso deben asistir a la jornada de inducción en las canchas de fútbol según la fecha estipulada, de 8:00 a 13:00.',
            'tags' => 'induccion, bienvenida, actividad',
            'tipo' => 'evento'
        ]);

        // Hackathon
        KnowledgeItem::create([
            'titulo' => 'Hackathon Anual de Innovación Tecnológica',
            'contenido' => 'Inscripciones abiertas para el Hackathon 2025. Se realizará del 10 al 12 de marzo. Premios para las tres mejores soluciones de IA.',
            'tags' => 'hackathon, innovacion, tecnologia, evento, concurso',
            'tipo' => 'evento'
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

        // Curso de Liderazgo
        KnowledgeItem::create([
            'titulo' => 'Taller de Liderazgo y Gestión de Equipos Remotos',
            'contenido' => 'Dirigido a supervisores y gerentes. Martes y jueves de 14:00 a 16:00. Inscripciones abiertas hasta el 25 de septiembre.',
            'tags' => 'curso, taller, liderazgo, equipos, gerencia, rrhh',
            'tipo' => 'curso'
        ]);

        // Tutorial de Correo
        KnowledgeItem::create([
            'titulo' => 'Guía para Configurar Correo Institucional',
            'contenido' => 'Sigue esta guía detallada para configurar tu cuenta de correo institucional.',
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
            'titulo' => 'Dar de alta la red',
            'contenido' => 'Para dar de alta alguno de tus dispositivos en la red institucional debes de ir a sito, ir a la parte de servicios informaticos, nuevo proceso de solicitud y colocar la dirección MAC del dispositivos que quieres dar de alta, pudiendo registrar solo 1.',
            'tags' => 'tutorial, vpn, remoto, acceso, red, seguridad',
            'tipo' => 'tutorial'
        ]);

        // Taller de Excel
        KnowledgeItem::create([
            'titulo' => 'Taller de Funciones Avanzadas de Microsoft Excel',
            'contenido' => 'Enfocado en análisis de datos, tablas dinámicas y macros básicas. Requisito: traer computadora personal con Excel instalado. Duración: 8 horas.',
            'tags' => 'taller, excel, datos, finanzas, capacitacion, office',
            'tipo' => 'curso'
        ]);
        
        // Curso de Idiomas
        KnowledgeItem::create([
            'titulo' => 'Cursos de Inglés de Negocios Nivel B2',
            'contenido' => 'Clases de inglés online disponibles para todos los empleados los miércoles y viernes por la tarde. Inscripción por plataforma e-learning.',
            'tags' => 'curso, ingles, idiomas, negocios, e-learning',
            'tipo' => 'curso'
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
    
        // Gestor de Contraseñas
        KnowledgeItem::create([
            'titulo' => 'Herramienta de Gestión de Contraseñas Seguras',
            'contenido' => 'Se recomienda el uso de LastPass Enterprise para almacenar credenciales. Todos los usuarios nuevos deben ser registrados por IT.',
            'tags' => 'password, contraseña, seguridad, lastpass, it',
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
            'contenido' => 'Documento que detalla las expectativas de comportamiento, respeto y profesionalismo dentro y fuera del ambiente academico.',
            'tags' => 'politica, conducta, etica, rrhh, norma',
            'tipo' => 'politica'
        ]);

        // Uso de Internet
        KnowledgeItem::create([
            'titulo' => 'Política de Uso de Internet y Redes Sociales',
            'contenido' => 'El uso de internet es para fines educativos. Se prohíbe el acceso a contenido ilegal o inapropiado. Las redes sociales deben usarse con discreción.',
            'tags' => 'politica, internet, redes sociales, uso, it',
            'tipo' => 'politica'
        ]);

        // Horarios
        KnowledgeItem::create([
            'titulo' => 'Horarios de clases',
            'contenido' => 'El horario del turno vespertino es de 7:10a.m a 14:40p.m y para el turno matutino es de 17:10p.m a 21:20p.m .',
            'tags' => 'politica, horario, flexibilidad, rrhh',
            'tipo' => 'politica'
        ]);

        // Seguridad Física
        KnowledgeItem::create([
            'titulo' => 'Normas de Acceso y Seguridad Física del Edificio',
            'contenido' => 'Es obligatorio portar la credencial de identificación en todo momento. Prohibido permitir el acceso a personas sin credencial.',
            'tags' => 'politica, seguridad, acceso, edificio, credencial',
            'tipo' => 'politica'
        ]);


        // --- 5. CONTACTOS CLAVE Y UBICACIONES (15 ítems) ---

        // Contacto Base (IT)
        KnowledgeItem::create([
            'titulo' => 'Contacto Soporte Técnico de SITO',
            'contenido' => 'Para problemas técnicos, contactar a soporte a través del correo: soportesito@utleon.edu.mx.',
            'tags' => 'contacto, soporte, it, tecnico, ayuda',
            'tipo' => 'contacto'
        ]);
        
        // Director General
        KnowledgeItem::create([
            'titulo' => 'Contacto Dirección General',
            'contenido' => 'Rector de la universidad: José Christian Padilla Navarro. Correo: jcpadilla@utleon.edu.mx. Solo para asuntos de alto nivel.',
            'tags' => 'contacto, director, gerencia, ejecutivo',
            'tipo' => 'contacto'
        ]);
        
        // Ubicación de Cafetería
        KnowledgeItem::create([
            'titulo' => 'Horarios y Ubicación de la Cafetería',
            'contenido' => 'La cafetería está ubicada entre la biblioteca y el edificio cvd teniendo un horario de 7:10a.m a 21:20p.m.',
            'tags' => 'ubicacion, cafeteria, comida, horario, piso 0',
            'tipo' => 'ubicacion'
        ]);

        // Estacionamiento
        KnowledgeItem::create([
            'titulo' => 'Acceso y Normativa del Estacionamiento',
            'contenido' => 'El estacionamiento será para uso tanto de alumnos como maestros y administrativos, para los alumnos es necesario que sus vehículos tengan la calcomanía la cual se consigue a través de su cuenta de sito en el apartado alumnos > solicitudes > solicitud de calcomanía.',
            'tags' => 'ubicacion, estacionamiento, acceso, vehiculos, seguridad',
            'tipo' => 'ubicacion'
        ]);

        // Casilleros
        KnowledgeItem::create([
            'titulo' => 'Renta de Casilleros Personales',
            'contenido' => 'Para la renta de casilleros se tiene que ir al edificio donde esta el casillero y preguntar si esta disponible para posteriormente hacer el pago en rectoria, siendo este de 78 pesos, deben de traer su propio candado.',
            'tags' => 'ubicacion, casilleros, pertenencias, rrhh',
            'tipo' => 'ubicacion'
        ]);

        // --- 6. PREGUNTAS FRECUENTES Y PROCEDIMIENTOS (25 ítems) ---
        
        // Pregunta: Días de Vacaciones
        KnowledgeItem::create([
            'titulo' => 'FAQ: ¿Cuántos días de vacaciones me quedan?',
            'contenido' => 'Revise el calendario escolar.',
            'tags' => 'faq, vacaciones, dias, rrhh, consulta',
            'tipo' => 'procedimiento'
        ]);
        
        // Procedimiento: Reserva de Sala
        KnowledgeItem::create([
            'titulo' => 'Procedimiento para Reservar Salas de biblioteca',
            'contenido' => 'Para reservar una sala en biblioteca es necesario contar con su credencial institucional, solicitar una sala en la recepción y si esta disponible se le otorgará una llave para la sala, al finalizar su uso no debe dejar basura y cierre con llave la sala, devuelve la llave y su credencial será devuelta.',
            'tags' => 'procedimiento, sala, reunion, reserva, calendario',
            'tipo' => 'procedimiento'
        ]);
        
        // Pregunta: Parking
        KnowledgeItem::create([
            'titulo' => 'FAQ: ¿Hay estacionamiento para bicicletas?',
            'contenido' => 'Sí, existe un área de estacionamiento seguro para bicicletas, junto a la entrada principal.',
            'tags' => 'faq, estacionamiento, bicicletas, ubicacion',
            'tipo' => 'procedimiento'
        ]);

        // Procedimiento: Emergencia
        KnowledgeItem::create([
            'titulo' => 'Ruta de Evacuación y Puntos de Encuentro',
            'contenido' => 'En caso de alarma de incendio o sismo, siga la ruta de evacuación más cercana. El punto de encuentro es el centro de la universidad, frente a biblioteca.',
            'tags' => 'procedimiento, emergencia, evacuacion, seguridad, ubicacion',
            'tipo' => 'procedimiento'
        ]);

        // --- 8. ACADÉMICO Y UNIVERSITARIO (15 ítems) ---

        // Puntos de Crédito
        KnowledgeItem::create([
            'titulo' => 'Requisitos Mínimos de Puntos para Pasar',
            'contenido' => 'Se requieren untotal de 24 puntos en SITO la materia para poder acreditar la misma.',
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
            'contenido' => 'La biblioteca atiende de lunes a viernes de 8:00 a 21:00. Sábados de 9:00 a 14:00. Correo de contacto: etorresp@utleon.edu.mx .',
            'tags' => 'academico, biblioteca, horario, contacto, recurso',
            'tipo' => 'contacto'
        ]);

        // Exámenes Finales
        KnowledgeItem::create([
            'titulo' => 'Calendario de Exámenes Finales',
            'contenido' => 'Consulte las fechas específicas de sus exámenes finales en el calendario institucional.',
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

        // Reinscripción
        KnowledgeItem::create([
            'titulo' => 'Procedimiento de Reinscripción para Alumnos Regulares',
            'contenido' => 'Realizar el pago de matrícula y seleccionar materias en el portal antes del 1 de febrero. Los alumnos con adeudos no podrán reinscribirse.',
            'tags' => 'academico, reinscripcion, matricula, pago, procedimiento',
            'tipo' => 'procedimiento'
        ]);

        // Correo Estudiantil
        KnowledgeItem::create([
            'titulo' => 'Activación de la Cuenta de Correo Estudiantil',
            'contenido' => 'Su correo se activa 48 horas después de su inscripción. El formato es: [folio]@alumnos.utleon.edu.mx La contraseña inicial es su folio, luego tiene que cambiarla para mayor seguridad.',
            'tags' => 'academico, correo, email, estudiante, cuenta',
            'tipo' => 'procedimiento'
        ]);

        // Cómputo
        KnowledgeItem::create([
            'titulo' => 'Horario y Normas de los Laboratorios de Cómputo',
            'contenido' => 'Los laboratorios están abiertos de 7:10a.m a 21:20p.m. Prohibido consumir alimentos y bebidas. Guardar archivos solo en la nube o en dispositivos personales. Si desconecta algún dispositivo antes de iresa tiene que volver a conectarlo. Si algo esta mal en el laboratorio debe de reportarlo con el supervisor de los mismos.',
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
        // Mejora
        KnowledgeItem::create([
            'titulo' => 'Canal para Sugerencias de Mejora',
            'contenido' => 'Las sugerencias de características o mejoras deben enviarse a través del buzón institucional que se encuentra en la página oficial de la utl.',
            'tags' => 'producto, mejora, sugerencia, jira, ideas',
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