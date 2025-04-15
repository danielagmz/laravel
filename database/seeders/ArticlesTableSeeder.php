<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticlesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        DB::table('articles')->delete();
        
        DB::table('articles')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'La Revolución de las Estrellas',
                'content' => 'Exploramos cómo las estrellas guían la navegación estelar y su impacto en la tecnología moderna.',
                'image' => NULL,
                'created_at' => '2024-10-13 17:56:20',
                'updated_at' => '2024-10-13 17:56:20',
                'shared' => 0,
                'author_id' => 2,
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'La Magia de los Hologramas',
                'content' => 'Descubre la ciencia detrás de los hologramas y cómo cambiarán nuestra forma de comunicarnos.',
                'image' => NULL,
                'created_at' => '2024-10-13 17:56:20',
                'updated_at' => '2024-10-13 17:56:20',
                'shared' => 0,
                'author_id' => 2,
            ),
            2 => 
            array (
                'id' => 3,
                'title' => 'El Misterio del Tiempo',
                'content' => 'Un artículo sobre los últimos descubrimientos científicos acerca de la relatividad del tiempo y sus efectos.',
                'image' => NULL,
                'created_at' => '2024-10-13 17:56:20',
                'updated_at' => '2024-10-13 17:56:20',
                'shared' => 0,
                'author_id' => 3,
            ),
            3 => 
            array (
                'id' => 4,
                'title' => 'Inteligencia Artificial: Futuro y Retos',
                'content' => 'Una discusión sobre los beneficios y riesgos de la inteligencia artificial en nuestra sociedad actual.',
                'image' => NULL,
                'created_at' => '2024-10-13 17:56:20',
                'updated_at' => '2024-10-13 17:56:20',
                'shared' => 0,
                'author_id' => 4,
            ),
            4 => 
            array (
                'id' => 5,
                'title' => 'El Arte del Diseño Minimalista',
                'content' => 'El minimalismo en el diseño ha marcado tendencia en los últimos años, simplificando la estética visual.',
                'image' => NULL,
                'created_at' => '2024-10-13 17:56:20',
                'updated_at' => '2024-10-13 17:56:20',
                'shared' => 0,
                'author_id' => 5,
            ),
            5 => 
            array (
                'id' => 6,
                'title' => 'La Evolución de los Videojuegos',
                'content' => 'Desde los primeros juegos de arcade hasta los complejos mundos virtuales de hoy en día, los videojuegos han cambiado radicalmente. La industria del entretenimiento ha adoptado la tecnología de manera innovadora, permitiendo experiencias más inmersivas. Además, los videojuegos no solo son entretenimiento, sino que también son una herramienta educativa, con aplicaciones en campos como la medicina y la formación militar.',
                'image' => NULL,
                'created_at' => '2024-10-13 17:56:20',
                'updated_at' => '2024-10-13 17:56:20',
                'shared' => 0,
                'author_id' => 4,
            ),
            6 => 
            array (
                'id' => 7,
                'title' => 'Los Secretos del Océano Profundo',
                'content' => 'El océano profundo sigue siendo uno de los misterios más grandes de la Tierra. A pesar de los avances en la tecnología de exploración submarina, gran parte de este vasto ecosistema sigue inexplorado. Los científicos creen que podría haber especies completamente nuevas viviendo en sus profundidades, adaptadas a la vida en condiciones extremas. Además, estudiar estos entornos podría ayudarnos a comprender mejor los límites de la vida en la Tierra.',
                'image' => NULL,
                'created_at' => '2024-10-13 17:56:20',
                'updated_at' => '2024-10-13 17:56:20',
                'shared' => 0,
                'author_id' => 2,
            ),
            7 => 
            array (
                'id' => 8,
                'title' => 'Los Drones y su Impacto',
                'content' => 'Los drones están revolucionando la logística.',
                'image' => NULL,
                'created_at' => '2024-10-13 17:56:20',
                'updated_at' => '2024-10-13 17:56:20',
                'shared' => 0,
                'author_id' => 3,
            ),
            8 => 
            array (
                'id' => 9,
                'title' => 'El Auge de la Realidad Aumentada',
            'content' => 'La realidad aumentada (RA) está revolucionando la forma en que interactuamos con el mundo digital. A diferencia de la realidad virtual, que crea un entorno completamente artificial, la RA superpone información digital sobre el mundo real, ofreciendo experiencias interactivas. Desde el entretenimiento hasta la educación, la RA tiene el potencial de transformar una variedad de industrias.',
                'image' => NULL,
                'created_at' => '2024-10-13 17:56:20',
                'updated_at' => '2024-10-13 17:56:20',
                'shared' => 0,
                'author_id' => 4,
            ),
            9 => 
            array (
                'id' => 10,
                'title' => 'El Futuro del Transporte: Coches Autónomos',
                'content' => 'Los coches autónomos ya no son una visión futurista, sino una realidad en desarrollo. Empresas de tecnología y automovilísticas están invirtiendo miles de millones en el perfeccionamiento de estos vehículos, con la promesa de mejorar la seguridad y reducir el tráfico. No obstante, aún quedan preguntas sobre la regulación, la ética y la confianza del público en estos sistemas.',
                'image' => NULL,
                'created_at' => '2024-10-13 17:56:20',
                'updated_at' => '2024-10-13 17:56:20',
                'shared' => 0,
                'author_id' => 5,
            ),
            10 => 
            array (
                'id' => 11,
                'title' => 'El Misterio de los Agujeros Negros',
                'content' => 'Los agujeros negros son uno de los fenómenos más enigmáticos del universo. Su inmensa gravedad atrapa incluso la luz, haciendo imposible ver lo que sucede en su interior. Los científicos creen que en su centro podría haber una singularidad, un punto de densidad infinita donde las leyes de la física tal como las conocemos dejan de aplicarse. Estudiar estos objetos cósmicos podría revelar claves importantes sobre el origen y el destino del universo.',
                'image' => NULL,
                'created_at' => '2024-10-13 17:56:20',
                'updated_at' => '2025-02-02 03:32:17',
                'shared' => 1,
                'author_id' => 3,
            ),
            11 => 
            array (
                'id' => 12,
                'title' => 'Nanotecnología: Un Mundo Invisible',
                'content' => 'La nanotecnología está revolucionando campos como la medicina y la electrónica, permitiendo avances a nivel microscópico. Desde el desarrollo de nuevos materiales hasta la creación de tratamientos médicos altamente específicos, esta tecnología promete cambiar el futuro de la humanidad. Sin embargo, su desarrollo plantea preguntas éticas y desafíos de regulación.',
                'image' => NULL,
                'created_at' => '2024-10-13 17:56:20',
                'updated_at' => '2025-02-02 03:32:04',
                'shared' => 1,
                'author_id' => 2,
            ),
            12 => 
            array (
                'id' => 13,
                'title' => 'Las Bases de la Programación Funcional',
                'content' => 'La programación funcional simplifica el código.',
                'image' => NULL,
                'created_at' => '2024-10-13 17:56:20',
                'updated_at' => '2024-10-13 17:56:20',
                'shared' => 0,
                'author_id' => 3,
            ),
            13 => 
            array (
                'id' => 14,
                'title' => 'Colonización de Marte',
                'content' => 'El sueño de colonizar Marte está más cerca de convertirse en realidad gracias a avances como el cohete Starship de SpaceX. Sin embargo, la idea de establecer una colonia en el planeta rojo plantea numerosos desafíos. Desde la radiación espacial hasta la falta de agua líquida, los futuros colonos necesitarán soluciones tecnológicas innovadoras para sobrevivir en un entorno tan hostil. Aun así, la humanidad parece decidida a expandir sus fronteras más allá de la Tierra.',
                'image' => NULL,
                'created_at' => '2024-10-13 17:56:20',
                'updated_at' => '2024-10-13 17:56:20',
                'shared' => 0,
                'author_id' => 4,
            ),
            14 => 
            array (
                'id' => 15,
                'title' => 'Realidad Virtual en la Educación',
            'content' => 'La realidad virtual (RV) está abriendo nuevas posibilidades en el ámbito educativo, proporcionando a los estudiantes experiencias de aprendizaje inmersivas. Imagina estudiar historia mientras caminas por una recreación del antiguo Egipto, o aprender anatomía explorando el cuerpo humano en 3D. Esta tecnología tiene el potencial de cambiar radicalmente la forma en que aprendemos, haciendo que el conocimiento sea más accesible y atractivo para todos.',
                'image' => NULL,
                'created_at' => '2024-10-13 17:56:20',
                'updated_at' => '2024-10-13 17:56:20',
                'shared' => 0,
                'author_id' => 5,
            ),
            15 => 
            array (
                'id' => 17,
                'title' => 'Robótica en la Industria Moderna',
                'content' => 'La robótica ha transformado el sector industrial, permitiendo una automatización avanzada en procesos de manufactura. Gracias a los robots, se ha logrado incrementar la eficiencia y reducir los costos operativos, además de mejorar la seguridad en el lugar de trabajo. Los robots colaborativos o "cobots" están diseñados para trabajar junto con humanos, abriendo nuevas posibilidades en el campo de la producción y la logística.',
                'image' => NULL,
                'created_at' => '2024-10-13 17:56:20',
                'updated_at' => '2025-02-02 03:33:44',
                'shared' => 1,
                'author_id' => 2,
            ),
            16 => 
            array (
                'id' => 18,
                'title' => 'Los Secretos del ADN',
                'content' => 'El ADN es el manual de instrucciones de la vida.',
                'image' => NULL,
                'created_at' => '2024-10-13 17:56:20',
                'updated_at' => '2024-10-13 17:56:20',
                'shared' => 0,
                'author_id' => 3,
            ),
            17 => 
            array (
                'id' => 19,
                'title' => 'La Impresión 3D en la Arquitectura',
                'content' => 'La impresión 3D está comenzando a revolucionar la forma en que construimos edificios. Esta tecnología permite la creación de estructuras más rápidas, baratas y sostenibles que los métodos tradicionales. Además, está facilitando el diseño de formas arquitectónicas complejas que antes eran imposibles de realizar. Aunque todavía en sus primeras etapas, la impresión 3D promete transformar radicalmente la industria de la construcción en las próximas décadas.',
                'image' => NULL,
                'created_at' => '2024-10-13 17:56:20',
                'updated_at' => '2025-02-02 03:34:21',
                'shared' => 1,
                'author_id' => 4,
            ),
            18 => 
            array (
                'id' => 20,
                'title' => 'El Futuro de la Agricultura con IA',
                'content' => 'La inteligencia artificial está siendo aplicada en la agricultura para optimizar el uso de recursos como el agua y los fertilizantes. Con drones y sensores, los agricultores pueden monitorear sus cultivos de manera más eficiente, lo que reduce costos y aumenta la productividad. Además, la IA está ayudando a predecir plagas y enfermedades, lo que permite tomar decisiones más informadas y mejorar la calidad de los alimentos que consumimos.',
                'image' => NULL,
                'created_at' => '2024-10-13 17:56:20',
                'updated_at' => '2024-10-13 17:56:20',
                'shared' => 0,
                'author_id' => 5,
            ),
            19 => 
            array (
                'id' => 23,
                'title' => 'Importancia de la IA en la Medicina',
                'content' => 'La inteligencia artificial está revolucionando la medicina de maneras sorprendentes y muy valiosas. En primer lugar, la IA permite el análisis de grandes volúmenes de datos médicos, lo que ayuda a los profesionales de la salud a identificar patrones y tendencias que podrían pasar desapercibidos. Esto es especialmente útil en la detección temprana de enfermedades como el cáncer, donde la IA puede analizar imágenes médicas con una precisión asombrosa.

Además, la IA está mejorando la personalización de los tratamientos. A través del análisis de datos genéticos y clínicos, es posible adaptar terapias específicas a las necesidades individuales de cada paciente. Esto no solo aumenta la eficacia del tratamiento, sino que también reduce los efectos secundarios.

Otro aspecto clave es el uso de chatbots y asistentes virtuales en la atención al paciente. Estos sistemas pueden proporcionar información médica básica, gestionar citas e incluso ofrecer apoyo emocional, permitiendo que los profesionales de la salud se concentren en casos más complejos.

Finalmente, la IA también juega un papel importante en la investigación médica. Con su capacidad para procesar y analizar datos rápidamente, puede acelerar el desarrollo de nuevos medicamentos y tratamientos.',
                'image' => NULL,
                'created_at' => '2024-11-10 17:53:47',
                'updated_at' => '2025-02-02 03:32:32',
                'shared' => 1,
                'author_id' => 8,
            ),
            20 => 
            array (
                'id' => 24,
                'title' => 'ඞ',
                'content' => 'ඞ',
                'image' => NULL,
                'created_at' => '2024-12-02 15:36:50',
                'updated_at' => '2024-12-02 15:36:50',
                'shared' => 0,
                'author_id' => 18,
            ),
            21 => 
            array (
                'id' => 25,
                'title' => 'Articulo totalmente normal',
                'content' => 'No hay amongus',
                'image' => NULL,
                'created_at' => '2024-12-02 19:18:39',
                'updated_at' => '2024-12-04 14:56:49',
                'shared' => 0,
                'author_id' => 18,
            ),
            22 => 
            array (
                'id' => 35,
                'title' => 'Habia una vez, un circo que alegraba',
                'content' => 'AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA',
                'image' => NULL,
                'created_at' => '2024-12-04 15:30:55',
                'updated_at' => '2024-12-04 16:00:29',
                'shared' => 0,
                'author_id' => 28,
            ),
            23 => 
            array (
                'id' => 40,
                'title' => 'a',
                'content' => 'a',
                'image' => NULL,
                'created_at' => '2025-02-28 17:46:14',
                'updated_at' => '2025-02-28 17:46:14',
                'shared' => 1,
                'author_id' => 1,
            ),
            24 => 
            array (
                'id' => 41,
                'title' => 'Bebecito',
                'content' => 'Bebecito el que lo lea &lt;3',
                'image' => NULL,
                'created_at' => '2025-02-28 17:57:03',
                'updated_at' => '2025-03-18 18:21:10',
                'shared' => 1,
                'author_id' => 1,
            ),
            25 => 
            array (
                'id' => 44,
                'title' => 'Bebecito 2',
                'content' => 'Bebecito 2 el que lo lea &lt;3',
                'image' => NULL,
                'created_at' => '2025-03-18 18:23:50',
                'updated_at' => '2025-03-18 18:23:50',
                'shared' => 0,
                'author_id' => 1,
            ),
        ));
        
        
    }
}