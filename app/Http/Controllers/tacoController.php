<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tacos;


class tacoController extends Controller
{
    

    public function inicio()
    {
        //Se manda a llamar los datos de la tabla
        $taco=tacos::find(1);
        $taco1=tacos::find(2);
        $taco2=tacos::find(13);
        $taco3=tacos::find(15);
        

        

       
        return view('index', ['taco' => $taco, 'taco1' => $taco1,'taco2' => $taco2,'taco3' => $taco3]);

        
    }

    public function tipos()
    {
        $taco=tacos::where('id', '>', '2')->where('id', '<', '13')->get();
        $tacos=[];

        foreach($taco as $tac)
        {
            $tacos[]=
            [
                'Tituilo'=>$tac['titulo'],
                'Subtitulo'=>$tac['subtitulo'],
                'Parrafo1'=>$tac['parrafo1'],
                'Parrafo2'=>$tac['parrafo2'],
                'Parrafo3'=>$tac['parrafo3'],
                'Parrafo4'=>$tac['parrafo4'],
                'Imagen'=>$tac['imagen'],
            ];
        }
        return view('generic', ['taco'=>$taco]);
    }

    public function tacosdato()
    {

        $taco=tacos::find(13);

        

    
        return view('elements', ['taco' => $taco, 'taco1']);

        return view('elements');
    }

    public function tacobe()
    {
        $taco=tacos::find(15);
        $taco1=tacos::find(16);

        

    
        return view('taco', ['taco' => $taco, 'taco1' => $taco1]);

        
    }




}


