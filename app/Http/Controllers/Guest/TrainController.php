<?php

namespace App\Http\Controllers\Guest;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

//Models
use App\Models\Train;

class TrainController extends BaseController
{
    public function index()
    {
        //Recupera tutti gli elementi di questo tipo di dato
        $trains = Train::all(); //dalla tabella Movie prendi tutti gli elementi

        /* dd($movies); //debug per vedere se sta prendendo i dati */
        return view('trains.index', compact('trains'));
    }

    public function show($id)
    {
        //Dalla tabella a cui è collegato il modello prendimi il dato con parametro = id
        $train = Train::find($id);

        return view('trains.show', compact('train'));
    }
}
