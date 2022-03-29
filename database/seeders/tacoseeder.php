<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class tacoseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('taco')->insert(
            [
                [
                    'Titulo'=>'¿Cuál es el origen del taco?',
                    'Subtitulo'=>'',
                    'Parrafo1'=>'Una de las teorías más aceptadas se remonta a una dieta olmeca, donde se cree que tuvieron lugar los primeros vestigios del maíz nixtamalizado. ',
                    'Parrafo2'=>'En una entrevista para la Smithsonian Magazine, Jeffrey M. Pilcher, investigador de la Universidad de Minnesota, habló sobre algunos de los capítulos de su libro Historia Global de la Comida Mexicana, donde el mismo menciona que:',
                    'Parrafo3'=>'Mi teoría es que data del siglo XVIII y de las minas de plata en México. Mientras que las primeras referencias a este platillo en cualquier tipo de archivo se dieron a finales del siglo XIX',
                    'Parrafo4'=>'Otra de las versiones del origen del taco habla sobre Moctezuma utilizaba la tortilla -actual basel del taco- como una especie de “cuchara”, y que las tortillas eran preparadas sobre piedras calientes, complementadas con cochinilla, chile y frijol.',
                    'Imagen'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQThmC8kapSWCsJkrXthX-OkthWc853vd8nXQ&usqp=CAU',
                ],

                [
                    'Titulo'=>'Tipos de taco',
                    'Subtitulo'=>'Tacos dorados',
                    'Parrafo1'=>'Por lo regular de carne deshebrada de pollo, res, cerdo o barbacoa, frijol o bien de papa con queso; la tortilla se enrolla y se fríe en abundante aceite o manteca de cerdo para que tome una consistencia dorada y firme. Cuando se sirven, regular se les pone encima una capa de crema, queso rallado, lechuga picada y salsa al gusto verde o roja. ',
                    'Parrafo2'=>'',
                    'Parrafo3'=>'',
                    'Parrafo4'=>'',
                    'Imagen'=>'https://i0.wp.com/mejoresrecetas.me/wp-content/uploads/2021/04/image-1.png?fit=653%2C433&ssl=1',
                ],

                [
                    'Titulo'=>'',
                    'Subtitulo'=>'Tacos de canasta',
                    'Parrafo1'=>'Son tacos que se preparan con pequeñas tortillas de maíz y se calientan con vapor utilizando una olla llamada “vaporera”. Estos tacos se distinguen por ser aceitosos, sudados. Los guisos generalmente son de papa, frijoles, carne deshebrada de res y de chicharrón de puerco, papa, mole verde o tinga de pollo así como de picadillo, el cual puede ser simple carne de res molida con verduras',
                    'Parrafo2'=>'',
                    'Parrafo3'=>'',
                    'Parrafo4'=>'',
                    'Imagen'=>'https://cdn2.cocinadelirante.com/sites/default/files/styles/gallerie/public/images/2021/01/como-hacer-100-tacos-de-canasta.jpg',
                ],
                
                [
                    'Titulo'=>'',
                    'Subtitulo'=>'Tacos de guisado',
                    'Parrafo1'=>'Son tacos hechos de platillos típicos mexicanos, como son: chicharrón en salsa verde, costilla en chile morita, entomatado de lomo de cerdo, chiles rellenos de queso, rellena, mole verde con pollo o puerco, picadillo, bistec en chile pasilla, huevo con jamón, huevo en salsa, longaniza con papas, etc.',
                    'Parrafo2'=>'',
                    'Parrafo3'=>'',
                    'Parrafo4'=>'',
                    'Imagen'=>'https://www.cardamomo.news/__export/1614113338043/sites/debate/img/2021/02/23/tacos_de_guisado_para_negocio_5_recetas_para_empezar_a_vender_crop1614113255773.jpeg_242310155.jpeg',
                ],
                
                [
                    'Titulo'=>'',
                    'Subtitulo'=>'Tacos de guisado',
                    'Parrafo1'=>'Son tacos hechos de platillos típicos mexicanos, como son: chicharrón en salsa verde, costilla en chile morita, entomatado de lomo de cerdo, chiles rellenos de queso, rellena, mole verde con pollo o puerco, picadillo, bistec en chile pasilla, huevo con jamón, huevo en salsa, longaniza con papas, etc.',
                    'Parrafo2'=>'',
                    'Parrafo3'=>'',
                    'Parrafo4'=>'',
                    'Imagen'=>'https://www.cardamomo.news/__export/1614113338043/sites/debate/img/2021/02/23/tacos_de_guisado_para_negocio_5_recetas_para_empezar_a_vender_crop1614113255773.jpeg_242310155.jpeg',
                ],  

                [
                    'Titulo'=>'Variedades',
                    'Subtitulo'=>'Tacos de carnitas',
                    'Parrafo1'=>'Elaborados con carne de cerdo cocida en manteca (grasa) del mismo.',
                    'Parrafo2'=>'',
                    'Parrafo3'=>'',
                    'Parrafo4'=>'',
                    'Imagen'=>'https://saboryestilo.com.mx/wp-content/uploads/2020/08/receta-tacos-de-carnitas.jpg',
                ],  

                
                [
                    'Titulo'=>'',
                    'Subtitulo'=>'Taco de longaniza',
                    'Parrafo1'=>'Preparado con longaniza, un embutido largo, relleno de carne de cerdo picada',
                    'Parrafo2'=>'',
                    'Parrafo3'=>'',
                    'Parrafo4'=>'',
                    'Imagen'=>'https://recetaland.com/wp-content/uploads/2020/10/102520425_138882517792423_6562952182186349906_n.jpg',
                ],  
                
                [
                    'Titulo'=>'',
                    'Subtitulo'=>'Tacos al carbón',
                    'Parrafo1'=>'Contienen cualquier carne asada en brasas de carbón, comúnmente es carn de res, cerdo o pollo.',
                    'Parrafo2'=>'',
                    'Parrafo3'=>'',
                    'Parrafo4'=>'',
                    'Imagen'=>'https://blog.tacoguru.com/wp-content/uploads/2019/11/IMG_0469.jpg',
                ],  
                
                [
                    'Titulo'=>'',
                    'Subtitulo'=>'Tacos de carne asada',
                    'Parrafo1'=>'Como su nombre indica, son tacos con carne asada de res. Se consumen generalmente en restaurantes especializados en carne asada.',
                    'Parrafo2'=>'',
                    'Parrafo3'=>'',
                    'Parrafo4'=>'',
                    'Imagen'=>'https://comidamexicana.online/wp-content/uploads/2021/03/receta-de-tacos-de-carne-asada-500x500.jpg',
                ],  
                
                [
                    'Titulo'=>'',
                    'Subtitulo'=>'Taco de barbacoa',
                    'Parrafo1'=>'Contiene carne de borrego, carnero o res en los estados del norte. Puede servirse en la forma tradicional, con tortilla suave, o con la tortilla enrollada cubriendo la carne o bien frito en aceite, cubierto de crema y queso fresco. Por lo general se acompaña por el consomé o caldo del borrego, el cual contiene arroz y garbanzos.',
                    'Parrafo2'=>'',
                    'Parrafo3'=>'',
                    'Parrafo4'=>'',
                    'Imagen'=>'https://sibeti.com/wp-content/uploads/2021/09/Receta-de-Tacos-de-barbacoa.jpg',
                ],  
                
                [
                    'Titulo'=>'',
                    'Subtitulo'=>'Campechanas',
                    'Parrafo1'=>'Son forzosamente de tortilla de harina de trigo; los ingredientes son bistec de res y carne al pastor y se acompañan con queso fundido. Son similares a las gringas y a los piratas.',
                    'Parrafo2'=>'',
                    'Parrafo3'=>'',
                    'Parrafo4'=>'',
                    'Imagen'=>'https://www.vvsupremo.com/wp-content/uploads/2019/01/Campechano-Tacos.jpg',
                ],  
                                
                [
                    'Titulo'=>'',
                    'Subtitulo'=>'Burritos',
                    'Parrafo1'=>'Son de tortilla de harina de trigo y originarios de los estados de Sonora, Chihuahua y Durango. Populares en el norte de México y en los Estados Unidos. Las variedades son muchas, por ejemplo de carne asada, carne deshebrada con papas y chile, de frijol, chile relleno, de papas con chorizo, chicharrón en salsa verde, de rajas con queso.',
                    'Parrafo2'=>'',
                    'Parrafo3'=>'',
                    'Parrafo4'=>'',
                    'Imagen'=>'https://t2.rg.ltmcdn.com/es/posts/2/4/8/burritos_de_carne_y_queso_71842_orig.jpg',
                ],  

                            
                [
                    'Titulo'=>'Datos interesantes',
                    'Subtitulo'=>'¿Los conocías?',
                    'Parrafo1'=>'Salvador Novo relata que hubo “carnitas en taco, con tortillas calientes” en el banquete triunfal de Hernán Cortés durante la Conquista.',
                    'Parrafo2'=>'Las taquerías existen (según registros) desde finales del siglo XIX, aunque no como las conocemos actualmente sino como puestitos ambulantes.',
                    'Parrafo3'=>'El primer taco en venderse, como tal, en la Ciudad de México fue el taco de canasta (nacido en las regiones mineras de Hidalgo y Guanajuato).',
                    'Parrafo4'=>'En 1998, el astronauta John Glenn incluyó a la tortilla en el menú del trasbordador espacial Discovery, encargado de lanzar el telescopio espacial Hubble.',
                    'Imagen'=>'https://media.glamour.mx/photos/61905bc0a6e030d6480f63a0/master/w_3000,h_1714,c_limit/254163.jpg',
                ], 
                
                         
                [
                    'Titulo'=>'¿El día del taco existe?',
                    'Subtitulo'=>'¿Sabías que se celebraba?',
                    'Parrafo1'=>'Se celebra el 31 de marzo en México. Se trata de un día en el que sobre todo los mexicanos disfrutan de uno de los platos típicos de este país, los tacos',
                    'Parrafo2'=>'',
                    'Parrafo3'=>'',
                    'Parrafo4'=>'',
                    'Imagen'=>'',
                ], 
                      
                [
                    'Titulo'=>'¿Cómo surgió Taco Bell?',
                    'Subtitulo'=>'',
                    'Parrafo1'=>'Una vez que concluyó la Segunda Guerra Mundial, Glen Bell dejó el Cuerpo humano de Marines de USA y regresó a su hogar en San Bernardino, donde en 1946 se puso a laborar en un puesto de perritos calientes. Era ya 1962 una vez que Glen Bell entregó un nuevo rumbo al comercio creando el primer Taco Bell en Downey. Y Kermit Becky, un expolicia de los Ángeles, compró la primera franquicia de Taco Bell en 1964. ',
                    'Parrafo2'=>'Taco Bell abrió su primer restaurante internacional en 1977, en Guam comenzó una política de expansión por el mundo que nos ha llevado a día de hoy a tener más de 6.000 restaurantes',
                    'Parrafo3'=>'',
                    'Parrafo4'=>'',
                    'Imagen'=>'https://i.pinimg.com/736x/9d/4a/10/9d4a1012a6fb4793dda702116d87c264.jpg',
                ], 
                      
                [
                    'Titulo'=>'¿El día del taco existe?',
                    'Subtitulo'=>'¿Los conocías',
                    'Parrafo1'=>'Se celebra el 31 de marzo en México. Se trata de un día en el que sobre todo los mexicanos disfrutan de uno de los platos típicos de este país, los tacos',
                    'Parrafo2'=>'',
                    'Parrafo3'=>'',
                    'Parrafo4'=>'',
                    'Imagen'=>'',
                ], 

            ]);
        

    }
}
