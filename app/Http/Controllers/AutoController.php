<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

class AutoController extends Controller
{
    public function index(){

        $cars = Car::all();
        return response()->json(["cars" => cars],);
    }
    public function create(Request $request){
        $input = $request->all();
        $car = new Car();

        $car->rendszam = $request["rendszam"];
        $car->marka = $request["marka"];
        $car->urtartalom = $request["urtartalom"];
        $car->ar = $request["ar"];
        
        $car->save();

       return response()->json(["message" => "Kiírva"],200);
    }
    public function update(Request $request, $id){
        $car = Car::find($id);
        $car->rendszam = $request["rendszam"];
        $car->marka = $request["marka"];
        $car->urtartalom = $request["urtartalom"];
        $car->ar = $request["ar"];

        $car->save();
        return response()->json(["message" => "Módosítva", "car"=>$car],200);
    }
    public function delete($id){
        $car = Car::find($id);
        $car->delete();

        return response()->json(["message" => "Törölve","car" => $car],200);
    }
}
