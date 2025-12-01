<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Synonym;

class SynonymSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() 
    {
        $synonyms = [
            // --- EVENTOS Y ACTIVIDADES ---
            ['palabra' => 'evento', 'sinonimo' => 'actividad'],
            ['palabra' => 'evento', 'sinonimo' => 'acto'],
            ['palabra' => 'evento', 'sinonimo' => 'encuentro'],
            ['palabra' => 'evento', 'sinonimo' => 'reunion'],
            ['palabra' => 'actividad', 'sinonimo' => 'evento'],
            ['palabra' => 'seminario', 'sinonimo' => 'conferencia'],
            ['palabra' => 'seminario', 'sinonimo' => 'charla'],
            ['palabra' => 'conferencia', 'sinonimo' => 'charla'],
            ['palabra' => 'conferencia', 'sinonimo' => 'ponencia'],
            ['palabra' => 'taller', 'sinonimo' => 'workshop'],
            ['palabra' => 'taller', 'sinonimo' => 'curso'],
            ['palabra' => 'curso', 'sinonimo' => 'taller'],
            // Nuevos sinónimos para Eventos y Actividades
            ['palabra' => 'celebracion', 'sinonimo' => 'festejo'],
            ['palabra' => 'jornada', 'sinonimo' => 'dia'],
            ['palabra' => 'jornada', 'sinonimo' => 'sesion'],
            ['palabra' => 'programa', 'sinonimo' => 'horario'],
            ['palabra' => 'programa', 'sinonimo' => 'plan'],

            // --- INGENIERÍA Y TECNOLOGÍA ---
            ['palabra' => 'ingenieria', 'sinonimo' => 'ingenieril'],
            ['palabra' => 'ingenieria', 'sinonimo' => 'tecnica'],
            ['palabra' => 'tecnologia', 'sinonimo' => 'tecnica'],
            ['palabra' => 'tecnologia', 'sinonimo' => 'innovacion'],
            ['palabra' => 'software', 'sinonimo' => 'programa'],
            ['palabra' => 'software', 'sinonimo' => 'aplicacion'],
            ['palabra' => 'hardware', 'sinonimo' => 'equipo'],
            ['palabra' => 'hardware', 'sinonimo' => 'computadora'],
            ['palabra' => 'computadora', 'sinonimo' => 'ordenador'],
            ['palabra' => 'computadora', 'sinonimo' => 'pc'],
            // Nuevos sinónimos para Ingeniería y Tecnología
            ['palabra' => 'aplicacion', 'sinonimo' => 'app'],
            ['palabra' => 'aplicacion', 'sinonimo' => 'software'],
            ['palabra' => 'sistema', 'sinonimo' => 'plataforma'],
            ['palabra' => 'dispositivo', 'sinonimo' => 'aparato'],
            ['palabra' => 'dispositivo', 'sinonimo' => 'terminal'],
            ['palabra' => 'desarrollo', 'sinonimo' => 'programacion'],
            ['palabra' => 'desarrollo', 'sinonimo' => 'creacion'],

            // --- PROBLEMAS Y SOLUCIONES ---
            ['palabra' => 'problema', 'sinonimo' => 'dificultad'],
            ['palabra' => 'problema', 'sinonimo' => 'inconveniente'],
            ['palabra' => 'problema', 'sinonimo' => 'contratiempo'],
            ['palabra' => 'error', 'sinonimo' => 'falla'],
            ['palabra' => 'error', 'sinonimo' => 'fallo'],
            ['palabra' => 'error', 'sinonimo' => 'equivocacion'],
            ['palabra' => 'falla', 'sinonimo' => 'defecto'],
            ['palabra' => 'falla', 'sinonimo' => 'averia'],
            ['palabra' => 'solucion', 'sinonimo' => 'respuesta'],
            ['palabra' => 'solucion', 'sinonimo' => 'solucionar'],
            ['palabra' => 'arreglar', 'sinonimo' => 'reparar'],
            ['palabra' => 'arreglar', 'sinonimo' => 'corregir'],
            // Nuevos sinónimos para Problemas y Soluciones
            ['palabra' => 'duda', 'sinonimo' => 'pregunta'],
            ['palabra' => 'duda', 'sinonimo' => 'consulta'],
            ['palabra' => 'arreglo', 'sinonimo' => 'reparacion'],
            ['palabra' => 'solucionar', 'sinonimo' => 'resolver'],
            ['palabra' => 'incidente', 'sinonimo' => 'problema'],

            // --- TIEMPO Y FECHAS ---
            ['palabra' => 'fecha', 'sinonimo' => 'dia'],
            ['palabra' => 'fecha', 'sinonimo' => 'fechas'],
            ['palabra' => 'hora', 'sinonimo' => 'horario'],
            ['palabra' => 'hora', 'sinonimo' => 'tiempo'],
            ['palabra' => 'mañana', 'sinonimo' => 'amanecer'],
            ['palabra' => 'tarde', 'sinonimo' => 'atardecer'],
            ['palabra' => 'noche', 'sinonimo' => 'nocturno'],
            ['palabra' => 'urgente', 'sinonimo' => 'inmediato'],
            ['palabra' => 'urgente', 'sinonimo' => 'prioritario'],
            ['palabra' => 'pronto', 'sinonimo' => 'rapido'],
            // Nuevos sinónimos para Tiempo y Fechas
            ['palabra' => 'calendario', 'sinonimo' => 'agenda'],
            ['palabra' => 'plazo', 'sinonimo' => 'fecha limite'],
            ['palabra' => 'actual', 'sinonimo' => 'presente'],
            ['palabra' => 'anterior', 'sinonimo' => 'pasado'],
            ['palabra' => 'proximo', 'sinonimo' => 'siguiente'],

            // --- LUGARES Y UBICACIONES ---
            ['palabra' => 'lugar', 'sinonimo' => 'ubicacion'],
            ['palabra' => 'lugar', 'sinonimo' => 'sitio'],
            ['palabra' => 'lugar', 'sinonimo' => 'localizacion'],
            ['palabra' => 'auditorio', 'sinonimo' => 'salon'],
            ['palabra' => 'auditorio', 'sinonimo' => 'sala'],
            ['palabra' => 'oficina', 'sinonimo' => 'despacho'],
            ['palabra' => 'edificio', 'sinonimo' => 'construccion'],
            ['palabra' => 'edificio', 'sinonimo' => 'inmueble'],
            // Nuevos sinónimos para Lugares y Ubicaciones
            ['palabra' => 'campus', 'sinonimo' => 'recinto'],
            ['palabra' => 'direccion', 'sinonimo' => 'ubicacion'],
            ['palabra' => 'area', 'sinonimo' => 'zona'],
            ['palabra' => 'piso', 'sinonimo' => 'planta'],
            ['palabra' => 'entrada', 'sinonimo' => 'acceso'],

            // --- PERSONAS Y CONTACTOS ---
            ['palabra' => 'persona', 'sinonimo' => 'individuo'],
            ['palabra' => 'persona', 'sinonimo' => 'usuario'],
            ['palabra' => 'usuario', 'sinonimo' => 'cliente'],
            ['palabra' => 'cliente', 'sinonimo' => 'consumidor'],
            ['palabra' => 'profesor', 'sinonimo' => 'docente'],
            ['palabra' => 'profesor', 'sinonimo' => 'maestro'],
            ['palabra' => 'estudiante', 'sinonimo' => 'alumno'],
            ['palabra' => 'estudiante', 'sinonimo' => 'educando'],
            ['palabra' => 'ayuda', 'sinonimo' => 'asistencia'],
            ['palabra' => 'ayuda', 'sinonimo' => 'soporte'],
            // Nuevos sinónimos para Personas y Contactos
            ['palabra' => 'contacto', 'sinonimo' => 'informacion de contacto'],
            ['palabra' => 'contacto', 'sinonimo' => 'telefono'],
            ['palabra' => 'personal', 'sinonimo' => 'empleado'],
            ['palabra' => 'personal', 'sinonimo' => 'trabajador'],
            ['palabra' => 'jefe', 'sinonimo' => 'supervisor'],
            ['palabra' => 'jefe', 'sinonimo' => 'encargado'],

            // --- ACADÉMICO Y EDUCACIÓN ---
            ['palabra' => 'universidad', 'sinonimo' => 'universitario'],
            ['palabra' => 'universidad', 'sinonimo' => 'facultad'],
            ['palabra' => 'carrera', 'sinonimo' => 'estudio'],
            ['palabra' => 'carrera', 'sinonimo' => 'licenciatura'],
            ['palabra' => 'examen', 'sinonimo' => 'evaluacion'],
            ['palabra' => 'examen', 'sinonimo' => 'prueba'],
            ['palabra' => 'examen', 'sinonimo' => 'test'],
            ['palabra' => 'calificacion', 'sinonimo' => 'nota'],
            ['palabra' => 'calificacion', 'sinonimo' => 'puntuacion'],
            ['palabra' => 'aprender', 'sinonimo' => 'estudiar'],
            ['palabra' => 'aprender', 'sinonimo' => 'instruirse'],
            // Nuevos sinónimos para Académico y Educación
            ['palabra' => 'grado', 'sinonimo' => 'titulo'],
            ['palabra' => 'materia', 'sinonimo' => 'asignatura'],
            ['palabra' => 'inscripcion', 'sinonimo' => 'registro'],
            ['palabra' => 'investigacion', 'sinonimo' => 'estudio'],
            ['palabra' => 'investigacion', 'sinonimo' => 'analisis'],

            // --- DOCUMENTOS Y ARCHIVOS ---
            ['palabra' => 'documento', 'sinonimo' => 'archivo'],
            ['palabra' => 'documento', 'sinonimo' => 'papel'],
            ['palabra' => 'informe', 'sinonimo' => 'reporte'],
            ['palabra' => 'informe', 'sinonimo' => 'reportaje'],
            ['palabra' => 'formulario', 'sinonimo' => 'formato'],
            ['palabra' => 'formulario', 'sinonimo' => 'formularios'],
            ['palabra' => 'solicitud', 'sinonimo' => 'peticion'],
            ['palabra' => 'solicitud', 'sinonimo' => 'requerimiento'],
            // Nuevos sinónimos para Documentos y Archivos
            ['palabra' => 'manual', 'sinonimo' => 'guia'],
            ['palabra' => 'credencial', 'sinonimo' => 'identificacion'],
            ['palabra' => 'expediente', 'sinonimo' => 'registro'],
            ['palabra' => 'copia', 'sinonimo' => 'ejemplar'],
            ['palabra' => 'descarga', 'sinonimo' => 'bajar'],

            // --- SISTEMAS Y REDES ---
            ['palabra' => 'sistema', 'sinonimo' => 'plataforma'],
            ['palabra' => 'sistema', 'sinonimo' => 'sistemas'],
            ['palabra' => 'red', 'sinonimo' => 'network'],
            ['palabra' => 'internet', 'sinonimo' => 'web'],
            ['palabra' => 'internet', 'sinonimo' => 'online'],
            ['palabra' => 'pagina', 'sinonimo' => 'web'],
            ['palabra' => 'pagina', 'sinonimo' => 'sitio'],
            ['palabra' => 'contraseña', 'sinonimo' => 'password'],
            ['palabra' => 'contraseña', 'sinonimo' => 'clave'],
            ['palabra' => 'usuario', 'sinonimo' => 'username'],
            // Nuevos sinónimos para Sistemas y Redes
            ['palabra' => 'servidor', 'sinonimo' => 'server'],
            ['palabra' => 'acceso', 'sinonimo' => 'login'],
            ['palabra' => 'cuenta', 'sinonimo' => 'perfil'],
            ['palabra' => 'navegador', 'sinonimo' => 'browser'],
            ['palabra' => 'enlace', 'sinonimo' => 'link'],

            // --- ESTADOS Y CONDICIONES ---
            ['palabra' => 'activo', 'sinonimo' => 'activado'],
            ['palabra' => 'activo', 'sinonimo' => 'funcionando'],
            ['palabra' => 'inactivo', 'sinonimo' => 'desactivado'],
            ['palabra' => 'inactivo', 'sinonimo' => 'parado'],
            ['palabra' => 'completo', 'sinonimo' => 'terminado'],
            ['palabra' => 'completo', 'sinonimo' => 'finalizado'],
            ['palabra' => 'pendiente', 'sinonimo' => 'espera'],
            ['palabra' => 'pendiente', 'sinonimo' => 'proceso'],
            // Nuevos sinónimos para Estados y Condiciones
            ['palabra' => 'listo', 'sinonimo' => 'preparado'],
            ['palabra' => 'disponible', 'sinonimo' => 'accesible'],
            ['palabra' => 'agotado', 'sinonimo' => 'vendido'],
            ['palabra' => 'agotado', 'sinonimo' => 'terminado'],

            // --- VERBOS COMUNES ---
            ['palabra' => 'buscar', 'sinonimo' => 'encontrar'],
            ['palabra' => 'buscar', 'sinonimo' => 'localizar'],
            ['palabra' => 'buscar', 'sinonimo' => 'hallar'],
            ['palabra' => 'necesitar', 'sinonimo' => 'requerir'],
            ['palabra' => 'necesitar', 'sinonimo' => 'precisar'],
            ['palabra' => 'querer', 'sinonimo' => 'desear'],
            ['palabra' => 'poder', 'sinonimo' => 'capacidad'],
            ['palabra' => 'poder', 'sinonimo' => 'facultad'],
            ['palabra' => 'saber', 'sinonimo' => 'conocer'],
            ['palabra' => 'saber', 'sinonimo' => 'informarse'],
            // Nuevos sinónimos para Verbos Comunes
            ['palabra' => 'cambiar', 'sinonimo' => 'modificar'],
            ['palabra' => 'cambiar', 'sinonimo' => 'reemplazar'],
            ['palabra' => 'crear', 'sinonimo' => 'generar'],
            ['palabra' => 'crear', 'sinonimo' => 'hacer'],
            ['palabra' => 'enviar', 'sinonimo' => 'mandar'],
            ['palabra' => 'recibir', 'sinonimo' => 'obtener'],

            // --- ADJETIVOS COMUNES ---
            ['palabra' => 'bueno', 'sinonimo' => 'excelente'],
            ['palabra' => 'bueno', 'sinonimo' => 'optimoo'],
            ['palabra' => 'bueno', 'sinonimo' => 'positivo'],
            ['palabra' => 'malo', 'sinonimo' => 'negativo'],
            ['palabra' => 'malo', 'sinonimo' => 'deficiente'],
            ['palabra' => 'malo', 'sinonimo' => 'pobre'],
            ['palabra' => 'rapido', 'sinonimo' => 'veloz'],
            ['palabra' => 'rapido', 'sinonimo' => 'agil'],
            ['palabra' => 'lento', 'sinonimo' => 'pausado'],
            ['palabra' => 'lento', 'sinonimo' => 'despacio'],
            ['palabra' => 'facil', 'sinonimo' => 'sencillo'],
            ['palabra' => 'facil', 'sinonimo' => 'simple'],
            ['palabra' => 'dificil', 'sinonimo' => 'complicado'],
            ['palabra' => 'dificil', 'sinonimo' => 'complejo'],
            // Nuevos sinónimos para Adjetivos Comunes
            ['palabra' => 'grande', 'sinonimo' => 'mayor'],
            ['palabra' => 'pequeño', 'sinonimo' => 'menor'],
            ['palabra' => 'importante', 'sinonimo' => 'relevante'],
            ['palabra' => 'nuevo', 'sinonimo' => 'reciente'],
            ['palabra' => 'antiguo', 'sinonimo' => 'viejo'],
            ['palabra' => 'general', 'sinonimo' => 'comun'],

            // --- CORRECCIONES ORTOGRÁFICAS COMUNES ---
            ['palabra' => 'probelema', 'sinonimo' => 'problema'],
            ['palabra' => 'probrema', 'sinonimo' => 'problema'],
            ['palabra' => 'ingeneria', 'sinonimo' => 'ingenieria'],
            ['palabra' => 'ingenieria', 'sinonimo' => 'ingenieria'],
            ['palabra' => 'eveneto', 'sinonimo' => 'evento'],
            ['palabra' => 'evneto', 'sinonimo' => 'evento'],
            ['palabra' => 'sistemas', 'sinonimo' => 'sistema'],
            ['palabra' => 'sistma', 'sinonimo' => 'sistema'],
            ['palabra' => 'universida', 'sinonimo' => 'universidad'],
            ['palabra' => 'univercidad', 'sinonimo' => 'universidad'],
            ['palabra' => 'documeto', 'sinonimo' => 'documento'],
            ['palabra' => 'documneto', 'sinonimo' => 'documento'],
            ['palabra' => 'informacion', 'sinonimo' => 'informacion'],
            ['palabra' => 'informcion', 'sinonimo' => 'informacion'],
            // Nuevas correcciones ortográficas
            ['palabra' => 'conferecnia', 'sinonimo' => 'conferencia'],
            ['palabra' => 'talleer', 'sinonimo' => 'taller'],
            ['palabra' => 'solucionn', 'sinonimo' => 'solucion'],
            ['palabra' => 'ussuario', 'sinonimo' => 'usuario'],
            ['palabra' => 'tecnolgia', 'sinonimo' => 'tecnologia'],
            ['palabra' => 'compuadora', 'sinonimo' => 'computadora'],
        ];

        foreach ($synonyms as $synonym) {
            Synonym::create($synonym);
        }
    }
} 