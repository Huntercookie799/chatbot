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
        // === I. FILOSOFÍA, UBICACIÓN Y COSTOS ===
        KnowledgeItem::create([
            'titulo' => 'Filosofía Institucional UTL: Misión y Visión',
            'contenido' => 'La misión de la UTL es formar ciudadanas y ciudadanos del mundo con educación tecnológica de calidad a través de la docencia, la investigación aplicada, la difusión del conocimiento y la vinculación, que contribuyan a la innovación y al desarrollo sustentable. Su visión es ser una Universidad reconocida por su calidad internacional, sus aportaciones al desarrollo de la tecnología y al bienestar de la sociedad. Los valores que rigen la institución incluyen Dignidad, Honestidad, Búsqueda de la verdad, Responsabilidad y Justicia.',
            'tags' => 'mision, vision, valores, filosofia, institucional',
            'tipo' => 'institucional'
        ]);

        KnowledgeItem::create([
            'titulo' => 'Información General y Costos de Colegiatura UTL (Aproximado)',
            'contenido' => 'La UTL se ubica en Blvd. Universidad Tecnológica #225, Col. San Carlos, CP. 37670, León, Gto. El costo aproximado de inscripción cuatrimestral para TSU es de $2,111.00 pesos. El costo cuatrimestral para el nivel de Ingeniería o Licenciatura es de $2,214.00 pesos. La duración del TSU es de 6 cuatrimestres (2 años), y la de Ingeniería/Licenciatura es de 5 cuatrimestres adicionales (1 año, 8 meses), exclusiva para egresados TSU.',
            'tags' => 'contacto, ubicacion, costos, colegiatura, admisiones, telefono, cuatrimestre, tsu, ingenieria',
            'tipo' => 'general'
        ]);

        KnowledgeItem::create([
            'titulo' => 'Planteles y Sedes de la Universidad Tecnológica de León',
            'contenido' => 'La UTL opera a través de tres planteles: el Campus Central León (sede principal con 13 edificios de aulas, laboratorios y servicios), el Campus II León, y el Campus Acámbaro. El Campus Central está ubicado junto al Hospital Regional de Alta Especialidad del Bajío. El Campus Acámbaro ofrece programas de TSU e Ingeniería adaptados a la región sur del estado.',
            'tags' => 'campus, planteles, leon, acambaro, ubicacion, sede, central, campus ii',
            'tipo' => 'general'
        ]);

        KnowledgeItem::create([
            'titulo' => 'Fecha de Fundación y Contexto Histórico UTL',
            'contenido' => 'La Universidad Tecnológica de León (UTL) fue fundada el 14 de octubre de 1995, con lo que cuenta con más de tres décadas de experiencia en la formación de profesionales tecnológicos. Forma parte del Subsistema de Universidades Tecnológicas de México, un modelo educativo que busca la vinculación directa con el sector productivo y el desarrollo regional.',
            'tags' => 'fundacion, historia, 1995, subsistema, aniversario',
            'tipo' => 'institucional'
        ]);

        KnowledgeItem::create([
            'titulo' => 'Estructura de Autoridades Institucionales (Rectorado)',
            'contenido' => 'La máxima autoridad ejecutiva de la institución es el Rector. Actualmente, la UTL está encabezada por el Mtro. Héctor Salgado Banda. El Rectorado tiene la responsabilidad de dirigir las estrategias académicas, administrativas y de vinculación de la universidad, asegurando el cumplimiento de la misión y visión institucional.',
            'tags' => 'rector, hector salgado banda, autoridades, direccion, rectorado, estructura',
            'tipo' => 'institucional'
        ]);

        // === II. OFERTA EDUCATIVA Y CALIDAD ===
        KnowledgeItem::create([
            'titulo' => 'Oferta Educativa UTL: Nivel Técnico Superior Universitario (TSU)',
            'contenido' => 'La UTL ofrece diversos programas TSU con duración de 6 cuatrimestres. Áreas destacadas incluyen: Tecnologías de la Información (Desarrollo de Software Multiplataforma, Infraestructura de Redes Digitales, Entornos Virtuales); Ingeniería (Mecatrónica, Mantenimiento Industrial, Procesos Industriales en Automotriz, Manufactura y Plásticos); Negocios (Capital Humano, Mercadotecnia); y Servicios (Gastronomía, Turismo).',
            'tags' => 'tsu, tecnico superior universitario, carreras, oferta educativa, mecatronica, ti, software, negocios, logistica, gastronomia',
            'tipo' => 'carrera'
        ]);

        KnowledgeItem::create([
            'titulo' => 'Oferta Educativa UTL: Nivel Ingeniería y Licenciatura',
            'contenido' => 'Los programas de Ingeniería y Licenciatura tienen una duración de 5 cuatrimestres y están dirigidos a egresados de TSU. Las Ingenierías incluyen: Tecnologías de la Información, Mecatrónica, Sistemas Productivos, Mantenimiento Industrial, y Ambiental y Sustentabilidad. Las Licenciaturas incluyen: Gestión del Capital Humano, Innovación de Negocios y Mercadotecnia, Gestión y Desarrollo Turístico, y Gastronomía.',
            'tags' => 'ingenieria, licenciatura, carreras, oferta educativa, ti, mecatronica, sistemas productivos, mantenimiento, negocios, turismo',
            'tipo' => 'carrera'
        ]);

        KnowledgeItem::create([
            'titulo' => 'Oferta de Posgrado: Maestría en Sistemas Integrados de Gestión',
            'contenido' => 'La UTL complementa su oferta educativa con posgrados de especialidad. Destaca la Maestría en Sistemas Integrados de Gestión de la Calidad, Seguridad e Higiene y Ambiente. Este programa está diseñado para formar profesionales capaces de implementar y auditar sistemas de gestión integrados que cumplan con normas internacionales (como ISO) en entornos industriales y de servicio.',
            'tags' => 'posgrado, maestria, sistemas integrados, gestion, calidad, seguridad, higiene, ambiente',
            'tipo' => 'carrera'
        ]);

        KnowledgeItem::create([
            'titulo' => 'Certificaciones de Calidad Institucional Vigentes',
            'contenido' => 'La Universidad Tecnológica de León asegura la calidad de sus servicios educativos a través de certificaciones en normas internacionales. Las certificaciones vigentes incluyen la ISO 9001:2015 (Sistema de Gestión de Calidad), ISO 14001:2015 (Sistema de Gestión Ambiental), y la NMX-R-025-SCFI-2015 (Igualdad Laboral y No Discriminación). Estas certificaciones tienen una vigencia hasta diciembre de 2027.',
            'tags' => 'certificaciones, calidad, iso 9001, iso 14001, nmx, gestion, ambiental',
            'tipo' => 'calidad'
        ]);

        KnowledgeItem::create([
            'titulo' => 'Acreditación de Programas Educativos por COPAES',
            'contenido' => 'La mayoría de los programas educativos de la UTL están acreditados en calidad por organismos reconocidos por el COPAES. Ejemplos incluyen: TSU en TI por CONAIC, Licenciaturas en Capital Humano y Mercadotecnia por CACECA, e Ingeniería en Mantenimiento Industrial por los CIEES.',
            'tags' => 'acreditaciones, copaes, ciees, conaic, caceca, calidad educativa, programas',
            'tipo' => 'calidad'
        ]);

        // === III. MODELO EDUCATIVO Y VINCULACIÓN ===
        KnowledgeItem::create([
            'titulo' => 'Modelo Educativo de la UTL (Estructura y Enfoque)',
            'contenido' => 'El modelo educativo de la UTL se basa en un enfoque tecnológico y práctico. Se estructura en dos niveles: TSU (6 cuatrimestres) y continuidad a Ingeniería/Licenciatura (5 cuatrimestres), haciendo énfasis en la Estadía Empresarial, permitiendo a los alumnos egresar con experiencia profesional.',
            'tags' => 'modelo educativo, tsu, ingenieria, licenciatura, cuatrimestres, estadia, practica profesional',
            'tipo' => 'institucional'
        ]);

        KnowledgeItem::create([
            'titulo' => 'Estructura Modular de Planes de Estudio TSU',
            'contenido' => 'Los planes de estudio de TSU están organizados en módulos que integran conocimientos teóricos con habilidades prácticas. Cada cuatrimestre se centra en el desarrollo de una competencia específica, lo que asegura que el estudiante adquiera progresivamente las aptitudes necesarias, culminando con la estadía profesional que valida la competencia adquirida en un entorno real.',
            'tags' => 'estructura, modular, planes de estudio, tsu, competencias, cuatrimestre, formacion',
            'tipo' => 'programa'
        ]);

        KnowledgeItem::create([
            'titulo' => 'La Estadía Empresarial: Práctica y Proyecto Obligatorio',
            'contenido' => 'La Estadía es una práctica profesional obligatoria donde el alumno desarrolla un proyecto que resuelve una necesidad real en la empresa. La evaluación es tripartita: asesor académico (25%), asesor laboral (25%), y presentación del informe final ante sinodales. Es la base para egresar con experiencia profesional.',
            'tags' => 'estadia, practicas, proyecto, egreso, evaluacion, tsu, ingenieria',
            'tipo' => 'programa'
        ]);

        KnowledgeItem::create([
            'titulo' => 'Modelo de Educación Dual UTL',
            'contenido' => 'La Educación Dual es un modelo educativo innovador que alterna periodos de formación en el aula con la experiencia práctica en el entorno laboral de una empresa. Este esquema busca formar talento humano "a la medida" de las necesidades de la industria, desarrollando competencias laborales desde las primeras etapas de la carrera.',
            'tags' => 'educacion dual, modelo dual, empresa, teoria, practica, laboral, innovacion',
            'tipo' => 'programa'
        ]);

        KnowledgeItem::create([
            'titulo' => 'Vinculación Estratégica con el Sector Automotriz',
            'contenido' => 'La UTL tiene una fuerte vinculación con el cluster automotriz y de proveeduría en Guanajuato. Mantiene convenios con empresas como Mazda, General Motors y diversas proveedoras, facilitando la educación dual, las estadías empresariales y el desarrollo de proyectos de Investigación y Desarrollo (I+D).',
            'tags' => 'vinculacion, automotriz, cluster, mazda, general motors, industria, investigacion, proyectos',
            'tipo' => 'institucional'
        ]);

        // === IV. SERVICIOS ESTUDIANTILES E INSTALACIONES (Generales) ===
        KnowledgeItem::create([
            'titulo' => 'Servicios Integrales y Desarrollo Estudiantil',
            'contenido' => 'La universidad pone a disposición de sus estudiantes una variedad de Servicios Integrales: Centro de Idiomas, Programa Institucional de Tutorías (PIT), Servicio de Atención Psicopedagógica (SAP), fomento al Emprendimiento, Centro de Información, Laboratorios Especializados, Centros de Cómputo, y diversas Actividades Culturales y Deportivas.',
            'tags' => 'servicios, estudiantes, centro de idiomas, tutorias, psicopedagogico, emprendimiento, cultural, deportivo',
            'tipo' => 'servicio'
        ]);

        KnowledgeItem::create([
            'titulo' => 'Centro Incubador de Empresas (CIEM) - Proceso y Logros',
            'contenido' => 'El CIEM de la UTL fomenta el emprendimiento e innovación. Ofrece asesoría especializada para crear negocios. El proceso se divide en tres etapas: Pre-incubación (idea), Incubación (plan de negocios) y Post-incubación (consolidación). El CIEM ha sido reconocido con galardones a nivel nacional como "Mejor Incubadora".',
            'tags' => 'ciem, incubadora, empresas, emprendimiento, innovacion, negocios, preincubacion, logros',
            'tipo' => 'servicio'
        ]);

        KnowledgeItem::create([
            'titulo' => 'Modelo Bilingüe, Internacional y Sustentable (MBIS) e Idiomas',
            'contenido' => 'El MBIS busca desarrollar la competencia lingüística avanzada (B2/C1 MCERL) en programas selectos (principalmente inglés y francés). El Centro de Idiomas ofrece cursos de inglés, francés, japonés y alemán, siendo un servicio clave para la movilidad y la competitividad laboral global.',
            'tags' => 'mbis, bilingue, internacional, sustentable, idiomas, centro de idiomas, ingles, frances, movilidad',
            'tipo' => 'programa'
        ]);

        KnowledgeItem::create([
            'titulo' => 'Laboratorios Especializados de Ingeniería y Manufactura',
            'contenido' => 'La UTL dispone de infraestructura tecnológica de vanguardia. Destacan los laboratorios de Control Numérico Computarizado (CNC) para programación de maquinaria en Mecatrónica y Sistemas Productivos, y el Laboratorio de Metrología para asegurar la calidad de las mediciones y procesos de manufactura.',
            'tags' => 'laboratorios, cnc, control numerico, metrologia, ingenieria, mecatronica, manufactura, tecnologia',
            'tipo' => 'instalacion'
        ]);

        KnowledgeItem::create([
            'titulo' => 'Unidad de Gestión Ambiental y Sustentabilidad (UGAS)',
            'contenido' => 'La UTL opera la UGAS, que coordina todas las acciones institucionales enfocadas en el desarrollo sostenible. Esto incluye programas de eficiencia energética, manejo integral de residuos, promoción de la cultura ambiental y proyectos de reforestación, alineados a su certificación ISO 14001.',
            'tags' => 'sustentabilidad, medio ambiente, ugas, iso 14001, energia, residuos, reforestacion',
            'tipo' => 'servicio'
        ]);

        // === V. INFORMACIÓN CUANTITATIVA, NORMATIVA Y ADMISIÓN ===
        KnowledgeItem::create([
            'titulo' => 'Matrícula Total y Posicionamiento Nacional',
            'contenido' => 'La UTL atiende a una matrícula total de aproximadamente 14,500 estudiantes. Se posiciona como una de las instituciones más grandes del Subsistema de Universidades Tecnológicas por matrícula, formando anualmente a más de 40 mil profesionistas desde su fundación.',
            'tags' => 'matricula, estadisticas, cifras, estudiantes, posicionamiento, volumen, institucional',
            'tipo' => 'institucional'
        ]);

        KnowledgeItem::create([
            'titulo' => 'Servicio Social Obligatorio y Horas Requeridas',
            'contenido' => 'El Servicio Social es una actividad formativa obligatoria para los alumnos de nivel TSU. El reglamento establece que el alumno debe dedicar 240 horas, las cuales deben prestarse preferentemente a partir del tercer cuatrimestre de la carrera, en programas o dependencias que contribuyan a la comunidad.',
            'tags' => 'servicio social, obligatorio, tsu, horas, reglamento, comunidad',
            'tipo' => 'programa'
        ]);

        KnowledgeItem::create([
            'titulo' => 'Programas de Becas y Apoyos Económicos',
            'contenido' => 'La UTL gestiona diversos programas de apoyo económico para facilitar la continuidad de los estudios. Las becas disponibles incluyen becas de manutención, becas de excelencia académica, y la Beca Benito Juárez (federal), además de la Beca de Servicio (que requiere 32 horas de servicio becario cuatrimestral en la institución).',
            'tags' => 'becas, apoyos, benito juarez, manutencion, excelencia, servicio becario, economico',
            'tipo' => 'servicio'
        ]);

        KnowledgeItem::create([
            'titulo' => 'Reglamento: Código de Vestimenta y Conducta',
            'contenido' => 'El reglamento interno exige a los alumnos una vestimenta pulcra y formal. Se prohíbe el uso de shorts, minifaldas, pantalones rotos, blusas sin mangas, sandalias, leggings, tatuajes expuestos (en algunos casos), gorras en interiores y piercings. El código busca promover una adecuada presencia personal y profesional en el ámbito universitario.',
            'tags' => 'reglamento, vestimenta, conducta, codigo, normas, prohibiciones, formalidad',
            'tipo' => 'institucional'
        ]);

        KnowledgeItem::create([
            'titulo' => 'Reglamento: Opciones y Requisitos de Titulación',
            'contenido' => 'La titulación se otorga al haber cursado y aprobado la totalidad del plan y programa de estudios. Para los egresados de TSU, la titulación suele ser automática al completar el proyecto de estadía. Para Ingeniería y Licenciatura existen opciones adicionales de titulación, como tesis, examen global o promedio de excelencia, dependiendo del plan de estudios específico.',
            'tags' => 'titulacion, egreso, requisitos, tesis, examen, promedio, tsu, ingenieria',
            'tipo' => 'programa'
        ]);

        KnowledgeItem::create([
            'titulo' => 'Centro de Información: Acceso a Bases de Datos EBSCO',
            'contenido' => 'Como parte de sus recursos digitales, el Centro de Información garantiza acceso a bases de datos especializadas como EBSCO. Esto permite a la comunidad universitaria consultar miles de artículos académicos, revistas científicas y libros electrónicos, apoyando directamente la investigación aplicada y la calidad de los proyectos de estadía y tesis.',
            'tags' => 'biblioteca, centro de informacion, ebsco, bases de datos, digital, investigacion, tesis, articulos',
            'tipo' => 'servicio'
        ]);

        KnowledgeItem::create([
            'titulo' => 'Programas de Movilidad e Intercambio Internacional',
            'contenido' => 'La UTL mantiene convenios con instituciones en el extranjero para la realización de intercambios y estancias cortas. Los destinos incluyen países como Francia, Canadá, España, Estados Unidos y Colombia, permitiendo a los estudiantes desarrollar una visión global y obtener una experiencia curricular valiosa.',
            'tags' => 'movilidad, intercambio, internacional, francia, españa, estancias, programas',
            'tipo' => 'programa'
        ]);

        KnowledgeItem::create([
            'titulo' => 'Apoyo a la Investigación Estudiantil (Programas DELFÍN)',
            'contenido' => 'La universidad impulsa la investigación entre sus alumnos a través de programas como el Programa Interinstitucional para el Fortalecimiento de la Investigación y el Posgrado del Pacífico (Programa DELFÍN). Esto permite a estudiantes de alto rendimiento realizar estancias de investigación con científicos de México y el extranjero.',
            'tags' => 'investigacion, delfin, estudiantes, posgrado, ciencia, desarrollo, talento',
            'tipo' => 'programa'
        ]);

        KnowledgeItem::create([
            'titulo' => 'Vida Estudiantil: Infraestructura Deportiva',
            'contenido' => 'La infraestructura deportiva del Campus Central incluye canchas de fútbol soccer, canchas de usos múltiples (baloncesto y voleibol), y un gimnasio. Estos espacios son utilizados tanto para las clases de actividades deportivas curriculares como para los entrenamientos de los equipos representativos y el esparcimiento general de la comunidad.',
            'tags' => 'deportes, infraestructura, canchas, gimnasio, futbol, baloncesto, voleibol, vida estudiantil',
            'tipo' => 'instalacion'
        ]);

        KnowledgeItem::create([
            'titulo' => 'Sistema de Información SITO (Servicios en Línea)',
            'contenido' => 'SITO es el Sistema de Información de la Tecnológica de León, la plataforma en línea central para el alumnado. A través de SITO, los estudiantes gestionan trámites escolares, consultan calificaciones, revisan el calendario académico, registran proyectos de estadía y acceden a otros servicios integrales, como el correo institucional.',
            'tags' => 'sito, sistema de informacion, plataforma, en linea, calificaciones, estadia, correo, tramites',
            'tipo' => 'tecnologia'
        ]);

        // === VI. OTROS SERVICIOS, TECNOLOGÍA Y DETALLES ESPECÍFICOS ===
        KnowledgeItem::create([
            'titulo' => 'Centro de Desarrollo de Software y Consultoría',
            'contenido' => 'El Centro de Desarrollo de Software funciona como una consultora interna, permitiendo a los alumnos de TSU e Ingeniería en TI desarrollar proyectos reales de software empresarial y aplicaciones móviles para el sector productivo de la región. Esto simula un ambiente laboral profesional y fortalece la vinculación empresa-universidad.',
            'tags' => 'ti, software, consultoria, desarrollo, proyectos, aplicaciones, ingenieria',
            'tipo' => 'instalacion'
        ]);

        KnowledgeItem::create([
            'titulo' => 'Modelo Flexible: Carreras y Oferta Discontinua',
            'contenido' => 'La modalidad Mixta o Flexible se ofrece principalmente en carreras de las áreas de Tecnologías de la Información y Administración. Esta modalidad, a menudo con turno discontinuo (fines de semana o vespertino), está dirigida a personas que trabajan y necesitan alternar su vida laboral con la académica.',
            'tags' => 'modelo flexible, modalidad mixta, discontinuo, vespertino, ti, administracion, laboral',
            'tipo' => 'programa'
        ]);

        KnowledgeItem::create([
            'titulo' => 'Ponderación para el Examen de Admisión',
            'contenido' => 'El proceso de admisión considera el puntaje obtenido en dos factores principales: el promedio de estudios de nivel medio superior (bachillerato), que tiene una ponderación del 30%, y el resultado del Examen de Ingreso (EXANI II de CENEVAL), que representa el 70% restante. La admisión se da con base en la calificación global obtenida.',
            'tags' => 'admision, examen, ponderacion, promedio, ceneval, bachillerato, ingreso',
            'tipo' => 'institucional'
        ]);

        KnowledgeItem::create([
            'titulo' => 'Certificación de Inglés TOEFL (Centro Aplicador)',
            'contenido' => 'El Centro de Idiomas de la UTL funge como centro aplicador de certificaciones de inglés de reconocimiento internacional, incluyendo el TOEFL ITP (Institutional Testing Program). Esto permite a los estudiantes y al público general obtener una certificación avalada para propósitos académicos y profesionales a nivel global.',
            'tags' => 'toefl, certificacion, ingles, centro de idiomas, examen, aplicador, internacional',
            'tipo' => 'servicio'
        ]);

        KnowledgeItem::create([
            'titulo' => 'Clínicas de Asesoría Académica y Recuperación',
            'contenido' => 'La universidad ofrece clínicas y asesorías académicas para apoyar a los estudiantes con rezago o aquellos que buscan fortalecer sus conocimientos en materias clave (como matemáticas o física). Estas clínicas son parte de las acciones remediales y extraordinarias para ayudar a los alumnos a alcanzar los resultados de aprendizaje requeridos.',
            'tags' => 'asesoria, clinicas, rezago, recuperacion, academicas, extraordinario, matematicas',
            'tipo' => 'servicio'
        ]);

        KnowledgeItem::create([
            'titulo' => 'Extensión Universitaria: Servicios de Capacitación Empresarial',
            'contenido' => 'A través de su área de Vinculación y Extensión Universitaria, la UTL ofrece servicios de capacitación, desarrollo tecnológico y consultoría al sector productivo. Estos servicios permiten a las empresas actualizar a su personal y aprovechar la experiencia y los recursos tecnológicos de la universidad.',
            'tags' => 'extension, capacitacion, empresas, consultoria, vinculacion, industria, desarrollo tecnologico',
            'tipo' => 'servicio'
        ]);

        KnowledgeItem::create([
            'titulo' => 'Historia: Demanda del Sector Empresarial para Fundación',
            'contenido' => 'La fundación de la UTL en 1995 fue una respuesta directa a una petición del Consejo Coordinador Empresarial de León. El sector productivo identificó la necesidad de un centro de educación superior tecnológica que estuviera íntimamente vinculado con el aparato productivo de la localidad para formar talento especializado.',
            'tags' => 'historia, empresarial, fundacion, consejo coordinador, sector productivo, demanda',
            'tipo' => 'institucional'
        ]);

        KnowledgeItem::create([
            'titulo' => 'Oferta Educativa Específica Campus Acámbaro',
            'contenido' => 'El Campus Acámbaro tiene una oferta educativa adaptada a la región sur de Guanajuato. Las carreras clave incluyen: Ingeniería en Tecnologías de la Información con TSU en Entornos Virtuales, Ingeniería en Sistemas Productivos con TSU en Procesos Industriales, Licenciatura en Gestión del Capital Humano, y Licenciatura en Innovación de Negocios y Mercadotecnia.',
            'tags' => 'campus acambaro, oferta educativa, tsu, ingenieria, sistemas productivos, ti, sur de guanajuato',
            'tipo' => 'carrera'
        ]);

        KnowledgeItem::create([
            'titulo' => 'Alianzas Estratégicas: Red Universitaria de las Artes (RUA)',
            'contenido' => 'La UTL formalizó su ingreso a la Red Universitaria de las Artes (RUA) para impulsar la cultura, el arte y la ciencia en la región. Esta alianza fortalece las actividades culturales y artísticas ofrecidas a los estudiantes y permite la colaboración con otras instituciones de educación superior en proyectos relacionados con las bellas artes.',
            'tags' => 'alianzas, rua, arte, cultura, ciencia, convenios, bellas artes',
            'tipo' => 'institucional'
        ]);

        KnowledgeItem::create([
            'titulo' => 'Proceso de Reinscripción y Requisitos Cuatrimestrales',
            'contenido' => 'Para la reinscripción cuatrimestral, los alumnos deben cumplir con dos requisitos principales: haber aprobado todas las asignaturas cursadas en el periodo anterior y no tener adeudos por concepto de cuotas escolares o material (como biblioteca o laboratorios). Este proceso se gestiona a través del sistema SITO y debe completarse según el calendario escolar.',
            'tags' => 'reinscripcion, requisitos, cuatrimestre, adeudos, asignaturas, sito, calendario',
            'tipo' => 'programa'
        ]);

        // === VII. VIDA ACADÉMICA Y SERVICIOS DETALLADOS (NUEVAS 21-50) ===
        // --- Detalle de Servicios y Apoyo ---
        KnowledgeItem::create([
            'titulo' => 'Servicio Médico y Primeros Auxilios',
            'contenido' => 'La UTL cuenta con un servicio médico y de enfermería dentro del campus para brindar atención de primeros auxilios y seguimiento a padecimientos menores de la comunidad universitaria. Este servicio es esencial para la salud y el bienestar de estudiantes y personal durante el horario escolar.',
            'tags' => 'servicio medico, primeros auxilios, salud, bienestar, enfermeria, campus',
            'tipo' => 'servicio'
        ]);

        KnowledgeItem::create([
            'titulo' => 'Seguimiento a Egresados y Encuestas de Empleabilidad',
            'contenido' => 'El área de Seguimiento a Egresados realiza estudios periódicos para evaluar la pertinencia de los planes de estudio y la inserción laboral de sus profesionistas. Estas encuestas de empleabilidad retroalimentan a la universidad para mantener sus programas alineados con las demandas del sector productivo.',
            'tags' => 'egresados, seguimiento, empleabilidad, encuestas, planes de estudio, pertinencia',
            'tipo' => 'servicio'
        ]);

        KnowledgeItem::create([
            'titulo' => 'Apoyo al Desarrollo de Patentes y Propiedad Intelectual',
            'contenido' => 'A través del Centro Incubador de Empresas (CIEM) y las áreas de Investigación, la UTL ofrece asesoría y acompañamiento a estudiantes y docentes para el registro de patentes, modelos de utilidad y otras formas de propiedad intelectual, fomentando la protección de las innovaciones tecnológicas generadas en la institución.',
            'tags' => 'patentes, propiedad intelectual, ciem, innovacion, registro, investigacion',
            'tipo' => 'servicio'
        ]);

        KnowledgeItem::create([
            'titulo' => 'Tienda Institucional "Somos Leones" y Artículos Oficiales',
            'contenido' => 'La universidad cuenta con la tienda institucional "Somos Leones", donde se comercializan artículos, uniformes y souvenirs oficiales. Su objetivo es fomentar el sentido de pertenencia y utilizar los ingresos para apoyar actividades estudiantiles o proyectos internos de la institución.',
            'tags' => 'tienda, somos leones, souvenirs, uniformes, pertenencia, institucional',
            'tipo' => 'servicio'
        ]);

        KnowledgeItem::create([
            'titulo' => 'Costo por Examen Extraordinario y Remedial',
            'contenido' => 'Los trámites académicos de recuperación, como el examen extraordinario o remedial, tienen un costo asociado que debe ser cubierto por el alumno antes de la aplicación. Estos costos varían según el cuatrimestre y el tipo de examen, y se gestionan a través del sistema de Servicios Escolares.',
            'tags' => 'costos, examen, extraordinario, remedial, recuperacion, tramites, academico',
            'tipo' => 'general'
        ]);
        
        // --- Detalle de Instalaciones y Tecnología ---
        KnowledgeItem::create([
            'titulo' => 'Laboratorio de Redes y Ciberseguridad',
            'contenido' => 'La UTL dispone de laboratorios especializados para la carrera de Tecnologías de la Información, específicamente en el área de Infraestructura de Redes Digitales y Ciberseguridad. Estos laboratorios permiten a los estudiantes realizar prácticas de configuración de servidores, redes complejas y simulaciones de ataques para fortalecer las defensas informáticas.',
            'tags' => 'laboratorios, redes, ciberseguridad, ti, infraestructura, simulacion, instalacion',
            'tipo' => 'instalacion'
        ]);

        KnowledgeItem::create([
            'titulo' => 'Área de Mantenimiento Industrial y Talleres Específicos',
            'contenido' => 'Para las carreras de Mantenimiento Industrial y Mecatrónica, la UTL cuenta con amplios talleres donde se realizan prácticas de hidráulica, neumática, electricidad y soldadura. Estos talleres replican ambientes industriales reales y están equipados con maquinaria didáctica para el desarrollo de competencias prácticas.',
            'tags' => 'mantenimiento, industrial, talleres, hidraulica, neumatica, mecatronica, soldadura, instalacion',
            'tipo' => 'instalacion'
        ]);

        KnowledgeItem::create([
            'titulo' => 'Infraestructura para la Carrera de Gastronomía',
            'contenido' => 'La carrera de Gastronomía se apoya en instalaciones de primer nivel, incluyendo cocinas industriales totalmente equipadas, laboratorios de panadería y repostería, y un restaurante-escuela. Este último permite a los alumnos realizar prácticas de servicio y gestión de alimentos en un ambiente profesional abierto al público.',
            'tags' => 'gastronomia, cocinas, restaurante escuela, panaderia, repostería, servicios, instalacion',
            'tipo' => 'instalacion'
        ]);

        KnowledgeItem::create([
            'titulo' => 'Aulas Interactivas y Tecnología Educativa',
            'contenido' => 'La mayoría de las aulas de la UTL están equipadas con tecnología educativa moderna, incluyendo proyectores de alta definición, pizarrones interactivos y acceso a la red institucional de alta velocidad. Esto facilita la implementación de metodologías pedagógicas innovadoras y el uso de recursos digitales.',
            'tags' => 'aulas, interactivas, tecnologia, proyectores, pizarrones, educativa, instalacion',
            'tipo' => 'tecnologia'
        ]);

        KnowledgeItem::create([
            'titulo' => 'Ubicación del Campus II León (Referencia)',
            'contenido' => 'El Campus II de León está ubicado en Camino a Granja Santa Teresa s/n, Predio San Carlos. Aunque es más pequeño que el Campus Central, atiende a una parte significativa de la matrícula y tiene aulas y laboratorios propios, especialmente para carreras con demanda en esa zona de la ciudad.',
            'tags' => 'campus ii, leon, ubicacion, santa teresa, planteles',
            'tipo' => 'general'
        ]);

        // --- Detalle Académico y Normativo ---
        KnowledgeItem::create([
            'titulo' => 'Política de Calidad Institucional Detallada',
            'contenido' => 'La política de calidad de la UTL se centra en la mejora continua y la eficacia de su Sistema de Gestión Integral (SGI), abarcando servicios educativos, servicios tecnológicos para la industria e incubación de negocios, asegurando la satisfacción de los estudiantes y el sector productivo.',
            'tags' => 'calidad, politica, sgi, mejora continua, servicios, institucional',
            'tipo' => 'institucional'
        ]);

        KnowledgeItem::create([
            'titulo' => 'Cultura de Paz y Liderazgo Colaborativo (Valores Adicionales)',
            'contenido' => 'Además de los valores fundamentales, la UTL promueve activamente la Cultura de Paz, el Liderazgo Colaborativo, la Empatía y la Visión de Futuro entre su comunidad. Estos valores buscan formar líderes tecnológicos no solo competentes, sino también socialmente responsables y comprometidos con el entorno.',
            'tags' => 'valores, cultura de paz, liderazgo, empatia, vision de futuro, institucional',
            'tipo' => 'institucional'
        ]);

        KnowledgeItem::create([
            'titulo' => 'Reglamento: Faltas de Asistencia y Consecuencias',
            'contenido' => 'El reglamento académico es estricto con la asistencia. Un alumno puede perder el derecho a ser evaluado en una materia si supera el límite de faltas establecido por el docente, generalmente un porcentaje mínimo de asistencia obligatorio para tener derecho a la calificación ordinaria del cuatrimestre.',
            'tags' => 'reglamento, faltas, asistencia, evaluacion, ordinaria, consecuencias',
            'tipo' => 'institucional'
        ]);

        KnowledgeItem::create([
            'titulo' => 'Reglamento: Daños a la Propiedad Universitaria',
            'contenido' => 'El reglamento establece que los alumnos están obligados a cubrir el importe de los desperfectos o daños causados a los equipos, instalaciones y demás bienes de la Universidad, especialmente cuando estos daños son resultado de conductas intencionales, negligencia o falta de cuidado.',
            'tags' => 'reglamento, daños, propiedad, instalaciones, negligencia, sanciones',
            'tipo' => 'institucional'
        ]);

        KnowledgeItem::create([
            'titulo' => 'Proceso de Bajas (Temporal y Definitiva)',
            'contenido' => 'El alumno que no pueda o no deseé reinscribirse al cuatrimestre siguiente debe solicitar formalmente su baja, la cual puede ser temporal (por un periodo definido con opción a reingreso) o definitiva. La solicitud y el trámite se gestionan a través de la Dirección de Servicios Escolares.',
            'tags' => 'baja, temporal, definitiva, reingreso, servicios escolares, tramites',
            'tipo' => 'programa'
        ]);

        // --- Detalle de Extensión y Eventos ---
        KnowledgeItem::create([
            'titulo' => 'Eventos: Conferencias y Seminarios de Vinculación',
            'contenido' => 'La UTL organiza constantemente conferencias, seminarios, foros y congresos con la participación de expertos del sector empresarial y académico. Estos eventos buscan actualizar el conocimiento de los estudiantes en tendencias tecnológicas, de negocios y de sustentabilidad, fortaleciendo la vinculación con el exterior.',
            'tags' => 'eventos, conferencias, seminarios, congresos, vinculacion, expertos, tendencias',
            'tipo' => 'evento'
        ]);

        KnowledgeItem::create([
            'titulo' => 'Certificación de Francés DELF/DALF',
            'contenido' => 'El Centro de Idiomas de la UTL prepara y, en algunos casos, aplica los exámenes de certificación de francés DELF (Diplôme d\'Études en Langue Française) y DALF (Diplôme Approfondi de Langue Française), necesarios para la movilidad académica a países francófonos y para validar el nivel requerido por el Modelo MBIS.',
            'tags' => 'certificacion, frances, delf, dalf, idiomas, movilidad, mbis',
            'tipo' => 'servicio'
        ]);

        KnowledgeItem::create([
            'titulo' => 'Programa de Estancias e Intercambios Nacionales',
            'contenido' => 'Además de la movilidad internacional, la UTL participa en programas de intercambio nacional que permiten a los estudiantes realizar estancias académicas en otras Universidades Tecnológicas y Politécnicas dentro de México, enriqueciendo su formación con contextos productivos y culturales diferentes.',
            'tags' => 'movilidad, intercambio, nacional, estancias, universidades tecnologicas, politécnicas',
            'tipo' => 'programa'
        ]);

        KnowledgeItem::create([
            'titulo' => 'Educación Continua y Diplomados para la Comunidad',
            'contenido' => 'El área de Educación Continua ofrece diplomados, cursos y talleres de especialización abiertos a la comunidad externa y a los egresados de la UTL. Esta oferta permite la actualización profesional en áreas de alta demanda como Lean Manufacturing, Logística o Ciberseguridad, y genera ingresos propios para la institución.',
            'tags' => 'educacion continua, diplomados, cursos, especializacion, logistica, ciberseguridad, egresados',
            'tipo' => 'servicio'
        ]);

        KnowledgeItem::create([
            'titulo' => 'Uso de la Plataforma Moodle en el Aula Virtual',
            'contenido' => 'La plataforma tecnológica utilizada como base para el Aula Virtual de la UTL es Moodle, un sistema de gestión de aprendizaje (LMS) de código abierto. Moodle permite la flexibilidad, la entrega de tareas, foros de discusión y el acceso a recursos las 24 horas del día, esencial para la modalidad mixta y el apoyo a la docencia presencial.',
            'tags' => 'moodle, aula virtual, lms, e-learning, tecnologia, plataforma',
            'tipo' => 'tecnologia'
        ]);

        KnowledgeItem::create([
            'titulo' => 'Seguridad y Vigilancia dentro del Campus',
            'contenido' => 'La UTL mantiene un sistema de seguridad y vigilancia permanente en sus instalaciones. Esto incluye personal de seguridad, cámaras de circuito cerrado y control de acceso vehicular y peatonal para garantizar un entorno seguro para todos los estudiantes y miembros de la comunidad universitaria, especialmente durante los turnos vespertinos.',
            'tags' => 'seguridad, vigilancia, campus, circuito cerrado, control de acceso, instalacion',
            'tipo' => 'instalacion'
        ]);

        KnowledgeItem::create([
            'titulo' => 'Estrategia de Desarrollo de Software a la Medida',
            'contenido' => 'El Centro de Desarrollo de Software no solo es un laboratorio, sino que se alinea con una estrategia de consultoría para ofrecer soluciones de TI a la medida para pequeñas y medianas empresas (PyMES). Esto genera experiencia laboral directa para los estudiantes y apoya la digitalización del sector productivo local.',
            'tags' => 'software, desarrollo, consultoria, pymes, ti, digitalizacion, estrategia',
            'tipo' => 'servicio'
        ]);

        KnowledgeItem::create([
            'titulo' => 'Horarios de Operación General de la UTL',
            'contenido' => 'El horario de operación general para actividades académicas y administrativas en el Campus Central es de lunes a viernes, comenzando usualmente a las 7:00 a.m. y extendiéndose hasta las 9:00 p.m. o 10:00 p.m. para cubrir los turnos matutino, vespertino y mixto.',
            'tags' => 'horarios, operacion, campus, matutino, vespertino, mixto, general',
            'tipo' => 'general'
        ]);

        KnowledgeItem::create([
            'titulo' => 'Énfasis en el Modelo de Formación por Competencias',
            'contenido' => 'El modelo educativo de las Universidades Tecnológicas se basa fundamentalmente en la formación por competencias, lo que significa que el proceso de enseñanza-aprendizaje se centra en que el estudiante demuestre que "sabe hacer" (habilidad práctica) en un entorno real, más allá del conocimiento teórico. Esto es clave para la rápida inserción laboral.',
            'tags' => 'competencias, formacion, modelo educativo, habilidades, saber hacer, laboral',
            'tipo' => 'programa'
        ]);

        KnowledgeItem::create([
            'titulo' => 'Programa de Tutorías: Función de Orientación Profesional',
            'contenido' => 'Además del apoyo académico, el Programa Institucional de Tutorías (PIT) tiene una función de orientación profesional. El tutor ayuda al estudiante a identificar su perfil vocacional, a tomar decisiones sobre la continuidad a Ingeniería/Licenciatura y a planificar su desarrollo de carrera a largo plazo.',
            'tags' => 'pit, tutorias, orientacion, profesional, vocacional, carrera, servicio',
            'tipo' => 'servicio'
        ]);

        KnowledgeItem::create([
            'titulo' => 'Apoyo Psicológico y Socioemocional (SAP)',
            'contenido' => 'El Servicio de Atención Psicopedagógica (SAP) brinda apoyo individual y grupal en la gestión de conflictos, manejo de estrés, desarrollo de inteligencia emocional y prevención de riesgos psicosociales. Este enfoque integral busca el equilibrio mental y emocional del estudiante para potenciar su rendimiento académico.',
            'tags' => 'sap, psicologico, socioemocional, estres, inteligencia emocional, bienestar',
            'tipo' => 'servicio'
        ]);

        KnowledgeItem::create([
            'titulo' => 'Capacitación Docente y Formación en Innovación Educativa',
            'contenido' => 'La UTL invierte en la capacitación continua de su profesorado a través de diplomados y cursos como el "Diplomado en Innovación Educativa". Esto asegura que los docentes se mantengan actualizados en las últimas tendencias tecnológicas y pedagógicas, mejorando la calidad de la enseñanza en el modelo por competencias.',
            'tags' => 'docente, capacitacion, formacion, innovacion educativa, pedagogia, calidad',
            'tipo' => 'institucional'
        ]);

        KnowledgeItem::create([
            'titulo' => 'Uso del Correo Institucional (Office 365)',
            'contenido' => 'Todos los alumnos y el personal de la UTL cuentan con un correo electrónico institucional, generalmente vinculado a plataformas de colaboración como Office 365 o Google Workspace. Este correo es el canal oficial de comunicación para avisos académicos, acceso a SITO y herramientas de colaboración.',
            'tags' => 'correo institucional, office 365, google workspace, comunicacion, sito, tecnologia',
            'tipo' => 'tecnologia'
        ]);

        KnowledgeItem::create([
            'titulo' => 'Gestión de Residuos y Sistema de Gestión Ambiental (SGA)',
            'contenido' => 'La UTL implementa un Sistema de Gestión Ambiental (SGA) bajo la norma ISO 14001 para el manejo adecuado de residuos sólidos urbanos, peligrosos y especiales generados en los laboratorios. El SGA promueve la separación, reducción y reciclaje dentro de las instalaciones, reforzando la UGAS.',
            'tags' => 'sga, iso 14001, residuos, gestion ambiental, reciclaje, laboratorios',
            'tipo' => 'institucional'
        ]);

        KnowledgeItem::create([
            'titulo' => 'Revista de Investigación Institucional (REAXIÓN)',
            'contenido' => 'La universidad publica la revista científica y tecnológica "REAXIÓN", un espacio que difunde los resultados de las investigaciones, proyectos y desarrollos tecnológicos realizados por la comunidad docente y estudiantil, así como por investigadores externos. Su objetivo es contribuir a la difusión del conocimiento aplicado.',
            'tags' => 'investigacion, reaxion, revista, cientifica, tecnologia, difusion, docente',
            'tipo' => 'institucional'
        ]);

        KnowledgeItem::create([
            'titulo' => 'Laboratorio de Idiomas y Certificación de Lenguas',
            'contenido' => 'El Centro de Idiomas cuenta con un laboratorio multimedia especializado para el autoaprendizaje y la práctica guiada de lenguas extranjeras. Este espacio está equipado con software interactivo para el desarrollo de las habilidades auditivas y de pronunciación, esenciales para alcanzar los niveles B2/C1 del MBIS.',
            'tags' => 'laboratorio de idiomas, multimedia, autoaprendizaje, lenguas, certificacion, mbis',
            'tipo' => 'instalacion'
        ]);

        KnowledgeItem::create([
            'titulo' => 'Equipos Deportivos de Alto Rendimiento',
            'contenido' => 'Los equipos representativos de la UTL compiten en eventos nacionales de la CONDE (Comisión Nacional Deportiva Estudiantil de Instituciones Particulares) y el CONDDE (Consejo Nacional del Deporte de la Educación). La universidad invierte en entrenadores especializados y becas deportivas para fomentar el alto rendimiento y la representación institucional.',
            'tags' => 'deportes, alto rendimiento, conde, condde, equipos, representativos, becas',
            'tipo' => 'servicio'
        ]);

        KnowledgeItem::create([
            'titulo' => 'Vinculación con Cámaras y Organismos Empresariales',
            'contenido' => 'La UTL mantiene convenios activos con cámaras industriales, asociaciones y organismos empresariales, como CANACINTRA o COPARMEX. Estos lazos estratégicos facilitan la colocación de estudiantes en estadías, la identificación de necesidades de capacitación y la retroalimentación constante sobre el perfil de egreso requerido por el mercado.',
            'tags' => 'vinculacion, camaras, canacintra, coparmex, organismos, empresariales, mercado laboral',
            'tipo' => 'institucional'
        ]);

        KnowledgeItem::create([
            'titulo' => 'Convenios para Ahorro de Transporte (Estudiantes)',
            'contenido' => 'Aunque no administra directamente el transporte, la universidad gestiona convenios o participa en programas locales que facilitan el acceso de los estudiantes al campus mediante tarifas preferenciales o rutas especiales de transporte público, dada su ubicación en las afueras de la mancha urbana de León.',
            'tags' => 'transporte, convenios, ahorro, tarifas, rutas, estudiantes',
            'tipo' => 'servicio'
        ]);

        KnowledgeItem::create([
            'titulo' => 'Comedores y Cafeterías del Campus',
            'contenido' => 'El Campus Central cuenta con amplias instalaciones de cafetería y comedores que ofrecen una variedad de alimentos y servicios de comida a precios accesibles para los estudiantes. El edificio de la cafetería también alberga aulas destinadas específicamente a la carrera de Gastronomía.',
            'tags' => 'comedores, cafeterias, alimentos, gastronomia, precios, instalacion',
            'tipo' => 'instalacion'
        ]);

        KnowledgeItem::create([
            'titulo' => 'Reglamento de Servicios Bibliotecarios',
            'contenido' => 'El uso del Centro de Información está regido por un Reglamento de Servicios Bibliotecarios que establece los procedimientos para el préstamo de material (a domicilio y en sala), el uso de equipos de cómputo y las sanciones por retraso o daño a los ejemplares. El cumplimiento es un requisito para la reinscripción.',
            'tags' => 'reglamento, biblioteca, servicios bibliotecarios, prestamo, sanciones, material',
            'tipo' => 'institucional'
        ]);

        KnowledgeItem::create([
            'titulo' => 'Promoción de la Cultura y las Bellas Artes',
            'contenido' => 'La UTL promueve activamente las bellas artes, no solo a través de talleres y grupos representativos (danza, música, teatro), sino también organizando exposiciones, festivales y eventos culturales abiertos a la comunidad, reforzando su reciente alianza con la Red Universitaria de las Artes (RUA).',
            'tags' => 'cultura, bellas artes, exposiciones, festivales, rua, teatro, danza',
            'tipo' => 'evento'
        ]);
    }
}