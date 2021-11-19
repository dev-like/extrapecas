<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Pedido;
use App\Models\Boleto;
use DB;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Validation\ValidationException;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clientes = Cliente::all();


        return view('admin.cliente.index', compact('clientes'));
    }

    public function show($id)
    {
        $cliente = Cliente::FindOrFail($id);
        $cliente->load('pedido');
        $pedido = $cliente->pedido->load('boleto');
        // dd($pedido);
        // dd($pedidos);
        // dd($clientes);

        return view('admin.cliente.show', compact('cliente','pedido'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return RedirectResponse
     * @throws ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $this->validate($request, [
            'nome' => 'required',
            'cpfcnpj' => 'required',
        ]);
        Cliente::create($request->all());
        return back()->with('success', 'Cliente cadastrado com sucesso');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  Segundavia  $cpfcnpj
     * @return Application|Factory|View
     */
    public function edit(Cliente $cliente)
    {
        return view('admin.cliente.edit', compact('cliente'));
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  Segundavia  $cpfcnpj
     * @return RedirectResponse
     * @throws ValidationException
     */
    public function update(Request $request, Cliente $cliente): RedirectResponse
    {
      $this->validate($request, [
          'nome' => 'required',
          'cpfcnpj' => 'required',
      ]);
        $cliente->update($request->all());
        return redirect()->route('cliente.index', [$request->id])->with('success', 'Registro com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Segundavia  $cpfcnpj
     * @return bool
     */
    public function destroy(Pedido $pedido)
    {
        return $pedido->delete();
    }
}
