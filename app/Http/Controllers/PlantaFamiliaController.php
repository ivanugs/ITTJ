<?php

namespace App\Http\Controllers;

use App\Models\PlantaFamilia;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class PlantaFamiliaController extends Controller
{
    public function index(){
        $plantas = PlantaFamilia::where('type', 'planta')
                        ->orderBy('scientific_name', 'asc') // Reemplaza 'nombre_del_campo' con el nombre real del campo
                        ->paginate();
        return view('plantas.index', compact('plantas'))
                ->with('i', (request()->input('page', 1) - 1) * $plantas->perPage());
    }
    

    public function show($id){
        $plantas = PlantaFamilia::find($id);
        return view('plantas.show', compact('plantas'));
    }

    public function indexPorLetra($letra){
        $plantas = PlantaFamilia::where('type', 'planta')
        ->where('scientific_name', 'LIKE', $letra . '%')
        ->orderBy('scientific_name', 'asc')
        ->get();
        return view('plantas.index', compact('plantas'));
    }

    public function searchSpecies(Request $request){
        $data = trim($request->valor);
        $result = DB::table('planta_familias')
        ->where('type', 'planta')
        ->where('scientific_name','like','%'.$data.'%')
        ->limit(5)
        ->get();

        return response()->json([
            'estado'=>1,
            'result'=> $result
        ]);
    }

    public function families(){
        $familias = PlantaFamilia::where('type', 'familia')
        ->orderBy('scientific_name', 'asc')
        ->get();
        return view('familias.index', compact('familias'));
    }

    public function showFamilies($id){
        $familias = PlantaFamilia::find($id);
        $plantas = PlantaFamilia::where('type', 'planta')
        ->where('family', $familias->id)
        ->get();
        return view('familias.show', compact('familias', 'plantas'));
    }

    public function searchFamilies(Request $request){
        $data = trim($request->valor);
        $result = DB::table('planta_familias')
        ->where('type', 'familia')
        ->where('scientific_name','like','%'.$data.'%')
        ->limit(5)
        ->get();

        return response()->json([
            'estado'=>1,
            'result'=> $result
        ]);
    }
}
