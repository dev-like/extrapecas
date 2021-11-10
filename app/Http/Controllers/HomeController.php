<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Eventos;
use App\Models\Parceiros;
use App\Models\QuemSomos;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class HomeController extends Controller
{
    /**
     * @return Application|Factory|View
     */
    public function index()
    {
        $banner = Banner::where('deleted_at')->get();
        $quemSomos = QuemSomos::first();
        $eventos = Eventos::all()->load('categoria');
        $parceiros = Parceiros::all();
        return view('index',compact('banner', 'quemSomos','eventos','parceiros'));
    }

    /**
     * @param  string  $slug
     * @return Application|Factory|View
     */
    public function show(string $slug)
    {

        $evento = Eventos::where('slug', $slug)->firstOrFail();
        $eventosRelacionados = Eventos::where('categoria_id', $evento->categoria_id)->limit(2)->get()->load('categoria');
        $quemSomos = QuemSomos::first();

        return view('eventos', compact('evento', 'quemSomos', 'eventosRelacionados'));
    }

    public function list()
    {

        $evento = Eventos::all();
        // $eventosRelacionados = Eventos::where('categoria_id', $evento->categoria_id)->limit(2)->get()->load('categoria');
        // $quemSomos = QuemSomos::first();

        return view('listagem', compact('evento'));
    }

}
