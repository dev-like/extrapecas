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
        list($cotacao_compra, $cotacao_venda) = $this->cotacao();
        $banner = Banner::first();
        $quemSomos = QuemSomos::first();
        // $eventos = Eventos::all()->load('categoria');
        $parceiros = Parceiros::all()->groupBy('tipo_servico');
        return view('index');
    }

    /**
     * @param  string  $slug
     * @return Application|Factory|View
     */
    public function show(string $slug)
    {
        list($cotacao_compra, $cotacao_venda) = $this->cotacao();

        $evento = Eventos::where('slug', $slug)->firstOrFail();
        $eventosRelacionados = Eventos::where('categoria_id', $evento->categoria_id)->limit(2)->get()->load('categoria');
        $quemSomos = QuemSomos::first();

        return view('eventos', compact('cotacao_venda', 'cotacao_compra', 'evento', 'quemSomos', 'eventosRelacionados'));
    }


    public function cotacao(): array
    {
        $ch = curl_init("https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarDia(dataCotacao=@dataCotacao)?@dataCotacao='".date('m-d-Y')."'&format=json");
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $res_curl = curl_exec($ch);
        $resultado = json_decode($res_curl, true);
        if (isset($resultado["value"][0])) {
            $valores = $resultado["value"][0];
            $cotacao_compra = $valores["cotacaoCompra"];
            $cotacao_venda = $valores["cotacaoVenda"];
        } else {
            $cotacao_compra = "Fechado";
            $cotacao_venda = "Fechado";
        }
        curl_close($ch);
        return [$cotacao_compra, $cotacao_venda];
    }
}
