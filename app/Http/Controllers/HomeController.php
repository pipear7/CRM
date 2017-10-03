<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bloque;
use App\Formulario;
use App\Pregunta;
use Laracasts\Flash\Flash;

class HomeController extends Controller
{


    public function principal()
    {
    	return  \View::make('welcome');
    }

    public function formulario()
    {
    	return  \View::make('formulario');
    }

    public function guardarFormulario(Request $request)
    {


        $observacion1 = $request->get('observacion1');
        $observacion2 = $request->get('observacion2');
        $observacion3 = $request->get('observacion3');
        $observacion4 = $request->get('observacion4');

        $sugerencias = $request->get('sugerencias');

        $p1a= $request->get('p1a');
        $p1b= $request->get('p1b');
        $p1c= $request->get('p1c');
        $p1d= $request->get('p1d');
        $p1e= $request->get('p1e');
        $p1f= $request->get('p1f');

        $p2a= $request->get('p2a');
        $p2b= $request->get('p2b');
        $p2c= $request->get('p2c');
        $p2d= $request->get('p2d');
        $p2e= $request->get('p2e');
        $p2f= $request->get('p2f');

        $p3a= $request->get('3a');
        $p3b= $request->get('3b');
        $p3c= $request->get('3c');
        $p3d= $request->get('3d');

        $p4a= $request->get('4a');
        
        $calificacion1a="";
        $nombre1a="La invitación a la capacitación se realizo en forma oportuna";
        $indice1a="a";
        $num_pregunta1=1;
        $num_pregunta2=2;
        $num_pregunta3=3;
        $num_pregunta4=4;
        $calificacion1b="";
        $nombre1b="El sitio de capacitación fue";
        $indice1b="b";
        $calificacion1c="";
        $nombre1c="La duración de las actividades fueron";
        $indice1c="c";
        $calificacion1d="";
        $nombre1d="La duración de los descansos fueron";
        $indice1d="d";
        $calificacion1e="";
        $nombre1e="La organización, Preparación y comodidad del sitio de capacitación";
        $indice1e="e";
        $calificacion1f="";
        $nombre1f="Se contaron con los medios visuales y audiovisuales adecuados";
        $indice1f="f";
        $calificacion2a="";
        $nombre2a="Se presentaron al inicio los objetivos de manera";
        $indice2a="a";
        $calificacion2b="";
        $nombre2b="El contenido del tema respondió a sus expectativas de manera";
        $indice2b="b";
        $calificacion2c="";
        $nombre2c="La metodología utilizada fue";
        $indice2c="c";
        $calificacion2d="";
        $nombre2d="El tema es acorde a las necesidades de la empresa";
        $indice2d="d";
        $calificacion2e="";
        $nombre2e="El tema es útil para mejorar sus habilidades en el desarrollo del puesto de trabajo";
        $indice2e="e";
        $calificacion2f="";
        $nombre2f="Los comentarios de los contenidos de formación fueron";
        $indice2f="f";
        $calificacion3a="";
        $nombre3a="El lenguaje utilizado por el facilitador fue";
        $indice3a="a";
        $calificacion3b="";
        $nombre3b="El horario programado se cumplió en forma";
        $indice3b="b";
        $calificacion3c="";
        $nombre3c="El manejo del tema por parte del facilitador fue";
        $indice3c="c";
        $calificacion3d="";
        $nombre3d="Sus dudas fueron resueltas en forma";
        $indice3d="d";
        $calificacion4="";
        $nombre4="";
        $indice4="";
        
        
        if($p1a==1){
            $calificacion1a="Deficiente";
        } else {
            if ($p1a==2){
                $calificacion1a="Regular";
            } else {
                if($p1a==3){
                    $calificacion1a="Aceptable";
                } else {
                     if($p1a==4){
                        $calificacion1a="Buena";
                     } else {
                         $calificacion1a="Excelente";
                     }
                }      
                
            }
        }
                
        if($p1b==1){
            $calificacion1b="Deficiente";
        } else {
            if ($p1b==2){
                $calificacion1b="Regular";
            } else {
                if($p1b==3){
                    $calificacion1b="Aceptable";
                } else {
                     if($p1b==4){
                        $calificacion1b="Buena";
                     } else {
                         $calificacion1b="Excelente";
                     }
                }      
                
            }
        }
        
        if($p1c==1){
            $calificacion1c="Deficiente";
        } else {
            if ($p1c==2){
                $calificacion1c="Regular";
            } else {
                if($p1c==3){
                    $calificacion1c="Aceptable";
                } else {
                     if($p1c==4){
                        $calificacion1c="Buena";
                     } else {
                         $calificacion1c="Excelente";
                     }
                }      
                
            }
        }
        
        if($p1d==1){
            $calificacion1d="Deficiente";
        } else {
            if ($p1d==2){
                $calificacion1d="Regular";
            } else {
                if($p1d==3){
                    $calificacion1d="Aceptable";
                } else {
                     if($p1d==4){
                        $calificacion1d="Buena";
                     } else {
                         $calificacion1d="Excelente";
                     }
                }      
                
            }
        }
        
        if($p1e==1){
            $calificacion1e="Deficiente";
        } else {
            if ($p1e==2){
                $calificacion1e="Regular";
            } else {
                if($p1e==3){
                $calificacion1e="Aceptable";
                } else {
                     if($p1e==4){
                        $calificacion1e="Buena";
                     } else {
                         $calificacion1e="Excelente";
                     }
                }      
                
            }
        }
        
        if($p1f==1){
            $calificacion1f="Deficiente";
        } else {
            if ($p1f==2){
                $calificacion1f="Regular";
            } else {
                if($p1f==3){
                    $calificacion1f="Aceptable";
                } else {
                     if($p1f==4){
                        $calificacion1f="Buena";
                     } else {
                         $calificacion1f="Excelente";
                     }
                }      
                
            }
        }
        
        if($p2a==1){
            $calificacion2a="Deficiente";
        } else {
            if ($p2a==2){
                $calificacion2a="Regular";
            } else {
                if($p2a==3){
                    $calificacion2a="Aceptable";
                } else {
                     if($p2a==4){
                        $calificacion2a="Buena";
                     } else {
                         $calificacion2a="Excelente";
                     }
                }      
                
            }
        }
        
        if($p2b==1){
            $calificacion2b="Deficiente";
        } else {
            if ($p2b==2){
                $calificacion2b="Regular";
            } else {
                if($p2b==3){
                    $calificacion2b="Aceptable";
                } else {
                     if($p2b==4){
                        $calificacion2b="Buena";
                     } else {
                         $calificacion2b="Excelente";
                     }
                }      
                
            }
        }
        
        if($p2c==1){
            $calificacion2c="Deficiente";
        } else {
            if ($p2c==2){
                $calificacion2c="Regular";
            } else {
                if($p2c==3){
                    $calificacion2c="Aceptable";
                } else {
                     if($p2c==4){
                        $calificacion2c="Buena";
                     } else {
                         $calificacion2c="Excelente";
                     }
                }      
                
            }
        }
        
        if($p2d==1){
            $calificacion2d="Deficiente";
        } else {
            if ($p2d==2){
                $calificacion2d="Regular";
            } else {
                if($p2d==3){
                    $calificacion2d="Aceptable";
                } else {
                     if($p2d==4){
                        $calificacion2d="Buena";
                     } else {
                         $calificacion2d="Excelente";
                     }
                }      
                
            }
        }
        
        if($p2e==1){
            $calificacion2e="Deficiente";
        } else {
            if ($p2e==2){
                $calificacion2e="Regular";
            } else {
                if($p2e==3){
                    $calificacion2e="Aceptable";
                } else {
                     if($p2e==4){
                        $calificacion2e="Buena";
                     } else {
                         $calificacion2e="Excelente";
                     }
                }      
                
            }
        }
        
        if($p2f==1){
            $calificacion2f="Deficiente";
        } else {
            if ($p2f==2){
                $calificacion2f="Regular";
            } else {
                if($p2f==3){
                    $calificacion2f="Aceptable";
                } else {
                     if($p2f==4){
                        $calificacion2f="Buena";
                     } else {
                         $calificacion2f="Excelente";
                     }
                }      
                
            }
        }
        
        if($p3a==1){
            $calificacion3a="Deficiente";
        } else {
            if ($p3a==2){
                $calificacion3a="Regular";
            } else {
                if($p3a==3){
                    $calificacion3a="Aceptable";
                } else {
                     if($p3a==4){
                        $calificacion3a="Buena";
                     } else {
                         $calificacion3a="Excelente";
                     }
                }      
                
            }
        }
        
        if($p3b==1){
            $calificacion3b="Deficiente";
        } else {
            if ($p3b==2){
                $calificacion3b="Regular";
            } else {
                if($p3b==3){
                    $calificacion3b="Aceptable";
                } else {
                     if($p3b==4){
                        $calificacion3b="Buena";
                     } else {
                         $calificacion3b="Excelente";
                     }
                }      
                
            }
        }
        
        if($p3c==1){
            $calificacion3c="Deficiente";
        } else {
            if ($p3c==2){
                $calificacion3c="Regular";
            } else {
                if($p3c==3){
                    $calificacion3c="Aceptable";
                } else {
                     if($p3c==4){
                        $calificacion3c="Buena";
                     } else {
                         $calificacion3c="Excelente";
                     }
                }      
                
            }
        }
        
        if($p3d==1){
            $calificacion3d="Deficiente";
        } else {
            if ($p3d==2){
                $calificacion3d="Regular";
            } else {
                if($p3d==3){
                    $calificacion3d="Aceptable";
                } else {
                     if($p3d==4){
                        $calificacion3d="Buena";
                     } else {
                         $calificacion3d="Excelente";
                     }
                }      
                
            }
        }
        
        if($p4a==1){
            $calificacion4="Deficiente";
            $nombre4="No me parece importante y no tiene ninguna aplicación en mis actividades diarias";
            $indice4="a";
        } else {
            if ($p4a==2){
                $calificacion4="Regular";
                $nombre4="Solo un aspecto de la capacitación fue importante y tiene aplicación en mis actividades diarias";
                $indice4="b";
            } else {
                if($p4a==3){
                    $calificacion4="Aceptable";
                    $nombre4="Varias de las acciones propuestas en la capacitación me son útiles y tienen aplicación";
                    $indice4="c";
                } else {
                        $calificacion4="Buena";
                        $nombre4="Toda la capacitación me da herramientas para mejorar el desempeño en las actividades diarias asignadas";
                        $indice4="d";        
                }      
                
            }
        }
      
    

     // dd($user);

       // $bloque2 = new Bloque();
       // $bloque2->id = 2;
       // $bloque2->nombre = 'Manejo del Tema';
       // $bloque2->save();

       // $bloque3 = new Bloque();
       // $bloque3->id = 3;
       // $bloque3->nombre = 'Facilitador (es)';
       // $bloque3->save();

       // $bloque4 = new Bloque();
       // $bloque4->id = 4;
       // $bloque4->nombre = 'Organización de la Capacitación';
       // $bloque4->save();

       //dd($bloque1,$bloque2,$bloque3,$bloque4); 

       //dd($nombre,$tema,$entidad,$proceso,$horas,$facilitador,$sugerencia,$nombrePregunta16);


       // $user = Bloque::find(1);

       // dd($user->nombre);

       //  foreach($user as $r){
       //   echo "<title>".$r."</title>";
       //   }


       // $pregunta1 = new Pregunta();
       // $pregunta1->id = 1;
       // $pregunta1->nombre = 'La invitación a la capacitación se realizo en forma oportuna:';
       // $pregunta1->bloque_id = 1;
       // $pregunta1->save();

       // $pregunta2 = new Pregunta();
       // $pregunta2->id = 2;
       // $pregunta2->nombre = 'El sitio de capacitación fue:';
       // $pregunta2->bloque_id = 1;
       // $pregunta2->save();

       // $pregunta3 = new Pregunta();
       // $pregunta3->id = 3;
       // $pregunta3->nombre = 'La duración de las actividades fueron:';
       // $pregunta3->bloque_id = 1;
       // $pregunta3->save();

       // $pregunta4 = new Pregunta();
       // $pregunta4->id = 4;
       // $pregunta4->nombre = 'La duración de los descansos fueron:';
       // $pregunta4->bloque_id = 1;
       // $pregunta4->save();

       // $pregunta5 = new Pregunta();
       // $pregunta5->id = 5;
       // $pregunta5->nombre = 'La organización, Preparación y comodidad del sitio de capacitación:';
       // $pregunta5->bloque_id = 1;
       // $pregunta5->save();

       // $pregunta6 = new Pregunta();
       // $pregunta6->id = 6;
       // $pregunta6->nombre = 'Se contaron con los medios visuales y audiovisuales adecuados:';
       // $pregunta6->bloque_id = 1;
       // $pregunta6->save();

       // $pregunta7 = new Pregunta();
       // $pregunta7->id = 7;
       // $pregunta7->nombre = 'Se presentaron al inicio los objetivos de manera:';
       // $pregunta7->bloque_id = 2;
       // $pregunta7->save();

       // $pregunta8 = new Pregunta();
       // $pregunta8->id = 8;
       // $pregunta8->nombre = 'El contenido del tema respondió a sus expectativas de manera:';
       // $pregunta8->bloque_id = 2;
       // $pregunta8->save();

       // $pregunta9 = new Pregunta();
       // $pregunta9->id = 9;
       // $pregunta9->nombre = 'La metodología utilizada fue:';
       // $pregunta9->bloque_id = 2;
       // $pregunta9->save();

       // $pregunta10 = new Pregunta();
       // $pregunta10->id = 10;
       // $pregunta10->nombre = 'El tema es acorde a las necesidades de la empresa:';
       // $pregunta10->bloque_id = 2;
       // $pregunta10->save();

       // $pregunta11 = new Pregunta();
       // $pregunta11->id = 11;
       // $pregunta11->nombre = 'El tema es útil para mejorar sus habilidades en el desarrollo del puesto de trabajo:';
       // $pregunta11->bloque_id = 2;
       // $pregunta11->save();

       // $pregunta12 = new Pregunta();
       // $pregunta12->id = 12;
       // $pregunta12->nombre = 'Los comentarios de los contenidos de formación fueron:';
       // $pregunta12->bloque_id = 2;
       // $pregunta12->save();

       // $pregunta13 = new Pregunta();
       // $pregunta13->id = 13;
       // $pregunta13->nombre = 'El lenguaje utilizado por el facilitador fue:';
       // $pregunta13->bloque_id = 3;
       // $pregunta13->save();

       // $pregunta14 = new Pregunta();
       // $pregunta14->id = 14;
       // $pregunta14->nombre = 'El horario programado se cumplió en forma:';
       // $pregunta14->bloque_id = 3;
       // $pregunta14->save();

       // $pregunta15 = new Pregunta();
       // $pregunta15->id = 15;
       // $pregunta15->nombre = 'El manejo del tema por parte del facilitador fue:';
       // $pregunta15->bloque_id = 3;
       // $pregunta15->save();

       // $pregunta16 = new Pregunta();
       // $pregunta16->id = 16;
       // $pregunta16->nombre = 'Sus dudas fueron resueltas en forma:';
       // $pregunta16->bloque_id = 3;
       // $pregunta16->save();

       // $pregunta17 = new Pregunta();
       // $pregunta17->id = 17;
       // $pregunta17->nombre = 'No me parece importante y no tiene ninguna aplicación en mis actividades diarias';
       // $pregunta17->bloque_id = 4;
       // $pregunta17->save();

       // $pregunta18 = new Pregunta();
       // $pregunta18->id = 18;
       // $pregunta18->nombre = 'Solo un aspecto de la capacitación fue importante y tiene aplicación en mis actividades diarias';
       // $pregunta18->bloque_id = 4;
       // $pregunta18->save();

       // $pregunta19 = new Pregunta();
       // $pregunta19->id = 19;
       // $pregunta19->nombre = 'Varias de las acciones propuestas en la capacitación me son útiles y tienen aplicación';
       // $pregunta19->bloque_id = 4;
       // $pregunta19->save();

       // $pregunta20 = new Pregunta();
       // $pregunta20->id = 20;
       // $pregunta20->nombre = 'Toda la capacitación me da herramientas para mejorar el desempeño en las actividades diarias asignadas';
       // $pregunta20->bloque_id = 4;
       // $pregunta20->save();


       
                $cedula = $request->get('cedula');
                $nombre = $request->get('nombre');
                $tema = $request->get('tema');
                $entidad = $request->get('entidad');
                $proceso = $request->get('proceso');
                $horas = $request->get('horas');
                $facilitador = $request->get('facilitador');
                $sugerencia = $request->get('sugerencia');
               
                $formularios = Formulario::all();

                if ($formularios->count() == 0) {
                    # code...
                    echo "1";


                           $formulario = new Formulario();
                           $formulario->cedula = $cedula;
                           $formulario->nombre = $nombre;
                           $formulario->tema = $tema;
                           $formulario->entidad = $entidad;
                           $formulario->proceso = $proceso;
                           $formulario->horas = $horas;
                           $formulario->facilitador = $facilitador;
                           $formulario->sugerencia = $sugerencia;

                            $formulario->save();

                            return  \View::make('welcome');
                            
                }
                else
                {
                    foreach ($formularios as $form ) {
                    # code...
                    if($form->cedula == $cedula)
                    {
                        echo("La cédula ya existe");
                       
                    }
                    else
                    {



                           $formulario = new Formulario();
                           $formulario->cedula = $cedula;
                           $formulario->nombre = $nombre;
                           $formulario->tema = $tema;
                           $formulario->entidad = $entidad;
                           $formulario->proceso = $proceso;
                           $formulario->horas = $horas;
                           $formulario->facilitador = $facilitador;
                           $formulario->sugerencia = $sugerencia;

                            $formulario->save();
                            echo "2";
                    }
                }
                }
                




                  


                  

              

       
        // $form = Formulario::where('cedula', $cedula);
        // dd($form);


       

       


       


    }
   

}
