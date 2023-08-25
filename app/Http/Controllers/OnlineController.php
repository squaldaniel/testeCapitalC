<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ClientesModel;
class OnlineController extends Controller
{
    public function index()
    {
        $quantMan = ClientesModel::where('sexo', 'M')->count();
        $quantwoman = ClientesModel::where('sexo', 'F')->count();
        return view('bootstrap.online.on_index', [
            'title'=>'Online',
            'man'=>$quantMan,
            'woman'=>$quantwoman
        ]);
    }
}
