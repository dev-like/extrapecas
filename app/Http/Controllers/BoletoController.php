<?php

namespace App\Http\Controllers;
use DB;
use App\Models\Boleto;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class BoletoController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return JsonResponse
     * @throws ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $this->validate($request, [
            'file' => 'required',
            'vencimento'=>'required',
            'pedido_id' => 'required',
        ]);


          Boleto::create($request->all());
          return back()->with('success', 'Boletos cadastrados com sucesso');
    }

    public function edit(Boleto $boleto)
    {
      $boleto = DB::table('boletos')
      ->join('pedidos','pedidos.id','=','boletos.pedido_id')
        ->join('clientes','clientes.id','=','pedidos.cliente_id')
        ->select(['boletos.file as file', 'boletos.vencimento as vencimento','nome', 'titulo', 'clientes.id as cliente_id', 'pedidos.id as pedido_id', 'clientes.id as cliente_id','boletos.id'])->where('boletos.id',$boleto->id)->first();

      // dd($boleto);

        return view('admin.boleto.index', compact('boleto'));
    }

    public function update(Request $request, Boleto $boleto): RedirectResponse
    {

      $this->validate($request, [
          // 'file' => 'required',
          'vencimento'=>'required',
          'pedido_id' => 'required',
      ]);

        $boleto->update($request->all());
        // $boleto = Boleto::create($input);
        // dd($request->cliente_id);


        return redirect()->route('cliente.show', [$request->cliente_id])->with('success', 'Boletos atualizados com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Boleto  $galerium
     * @return bool|null
     */
    public function destroy(Boleto $boleto): ?bool
    {
        return $boleto->delete();
    }
}
