<?php

namespace App\Http\Controllers;

use App\Area;
use App\Zona;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class AreaController extends Controller
{
  public function get_tipo()
  {
    $tipo = Area::select('tipo')->groupBy('tipo')->get();

    $data_tipo = [];
    array_push($data_tipo, ['tipo' => 'Elija una opcion']);
    foreach ($tipo as $item) {
      $data_tipo[] = [
        'tipo' => $item->tipo,
      ];
    }
    array_push($data_tipo, ['tipo' => 'Todo']);
    return $data_tipo;
  }

  public function get_zonas()
  {
    $zonas = Zona::select('*')->where('distrito', Input::get('distrito'))->get();
    return $zonas;
  }

  public function get_areas()
  {

    if (Input::get('tipo')) {
      if (Input::get('tipo') == 'Todo'){
        $area =Area::select('*')->get();
        return response()->json($area,200);
      }else{
        $area = Area::select('*')->where('tipo', '=', Input::get('tipo'))->get();
        return response()->json($area,200);
      }
    }

  }
}