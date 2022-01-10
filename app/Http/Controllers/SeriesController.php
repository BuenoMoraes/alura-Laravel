<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index() {
         $series = [
            'Grey\'s Anatomy',
            'Lost',
            'Agents of SHIELD'
        ];
    /*Retornar a view e compact para passar uma variavel do controller para a view no caso o array series */
        return view('series.index', compact('series'));
    }

    public function create() {
        return view('series.create');
    }

}