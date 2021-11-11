<?php

namespace App\Http\Controllers;

use App\Models\Segundavia;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Validation\ValidationException;

class SegundaviaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cpfcnpj = Segundavia::all();
        return view('admin.segundavia.index', compact('segundavia'));
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
            'logo' => 'required|image',
        ]);
        Segundavia::create($request->all());
        return back()->with('success', 'Parceido cadastrado com sucesso');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Segundavia  $cpfcnpj
     * @return Application|Factory|View
     */
    public function edit(Segundavia $cpfcnpj)
    {
        return view('admin.segundavia.edit', compact('segundavia'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  Segundavia  $cpfcnpj
     * @return RedirectResponse
     * @throws ValidationException
     */
    public function update(Request $request, Segundavia $cpfcnpj)
    {
        $this->validate($request, [
            'logo' => 'sometimes|required|image',
        ]);
        $cpfcnpj->update($request->all());
        return redirect()->route('segundavia.index')->with('success', 'Parceido cadastrado com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Segundavia  $cpfcnpj
     * @return bool
     */
    public function destroy(Segundavia $cpfcnpj)
    {
        return $cpfcnpj->delete();
    }
}
