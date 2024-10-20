<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PaymentMethod;
use Illuminate\Http\Request;

class Payment_MethodsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $payment_methods = PaymentMethod::all();
        return view('admin.payment_methods.index', compact('payment_methods'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.payment_methods.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        PaymentMethod::create($request->all());
        return redirect()->route('admin.payment_methods.index')->with('success', 'Registrado');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $paymeth = PaymentMethod::find($id);
        return view('admin.payment_methods.edit', compact('paymeth'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $paymeth = PaymentMethod::find($id);
        $paymeth->update($request->all());
        return redirect()->route('admin.payment_methods.index')->with('success', 'Actualizado');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // $paymeth = PaymentMethod::find($id);
        // $paymeth->delete();
        // return redirect()->route('admin.payment_methods.index')->with('success', 'Eliminado');
        $paymeth = PaymentMethod::find($id);

        if ($paymeth) {
            $paymeth->delete();
            return redirect()->route('admin.payment_methods.index')->with('success', 'Eliminado');
        } else {
            return redirect()->route('admin.payment_methods.index')->with('error', 'Registro no encontrado');
        }
    }
}
