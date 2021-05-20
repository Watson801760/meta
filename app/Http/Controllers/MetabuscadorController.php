<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MetabuscadorController extends Controller
{

    public function formulario_buscador(){
         return view('metabuscador');
    }

    public function buscar (){
        $termino= $_POST["termino"];
        $motor= $_POST["motores"];

        /*var_dump($_POST);*/
         
        switch($motor){
             
            case 1:return redirect()->to("https://www.google.com/search?q=$termino");
                break;
            case 2:return redirect()->to("https://www.youtube.com/results?search_query=$termino");
                break;
            case 3:return redirect()->to("https://www.facebook.com/search/top?q=$termino");
                break;  
            case 4:return redirect()->to("https://www.bing.com/search?q=$termino");
                break;       
            case 5:return redirect()->to("https://www.ecosia.org/search?q=$termino");
                break;
            case 6:return redirect()->to("https://twitter.com/search?q=$termino");
                break;
            case 7:return redirect()->to("https://duckduckgo.com/?q=$termino");
                break;   
            case 8:return redirect()->to("https://www.findx.com/search?q=$termino");
                break;  
            case 9:return redirect()->to("https://co.pinterest.com/search/pins/?q=$termino");
                break;     
            case 10:return redirect()->to("https://www.ask.com/web?q=$termino");
                break; 

        }
    }
}
