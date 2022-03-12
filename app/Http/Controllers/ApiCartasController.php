<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiCartasController extends Controller
{
    public function cartas(){
        $api= new \GuzzleHttp\Client();
        $responde = $api->request('GET','http://yugiohapi.herokuapp.com/api');
        $datos= json_decode ($responde->getBody()->getContents(),true);

        $cartas = [];
       
        foreach ($datos['cartas'] as $carta){
            $cartas[]= [
                'id'=>$carta['id'],
                'idcarta'=>$carta['idcarta'],
                'nombre'=>$carta['nombre'],
                'tipo'=>$carta['tipo'],
                'imagen'=>$carta['imagen'],
                'descripcion'=>$carta['descripcion']
            ];
        }
        return view('cartas',['cartas'=>$cartas]);
    }
    public function detallecarta($id){
        $api= new \GuzzleHttp\Client();
        $responde = $api->request('GET','http://yugiohapi.herokuapp.com/detalle/'.$id);
        $carta= json_decode ($responde->getBody()->getContents(),true);

        //randoms 3 cartas
        $variable = rand(0,528);
        $api= new \GuzzleHttp\Client();
        $responde = $api->request('GET','http://yugiohapi.herokuapp.com/detalle/'.$variable);
        $carta1 = json_decode ($responde->getBody()->getContents(),true);

        $variable2 = rand(0,528);
        $api= new \GuzzleHttp\Client();
        $responde = $api->request('GET','http://yugiohapi.herokuapp.com/detalle/'.$variable2);
        $carta2 = json_decode ($responde->getBody()->getContents(),true);

        $variable3 = rand(0,528);
        $api= new \GuzzleHttp\Client();
        $responde = $api->request('GET','http://yugiohapi.herokuapp.com/detalle/'.$variable3);
        $carta3 = json_decode ($responde->getBody()->getContents(),true);
        return view('detallecard',['carta1'=>$carta1,'carta2'=>$carta2,'carta3'=>$carta3,'carta'=>$carta]);

    }
}
