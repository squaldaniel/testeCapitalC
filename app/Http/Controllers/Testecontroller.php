<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Database\Seeders\ClienteSeed;
use App\Models\ClientesModel;

class Testecontroller extends Controller
{
    public function teste()
    {
        return ClientesModel::where('sexo', 'M')->count();;
    }
}
