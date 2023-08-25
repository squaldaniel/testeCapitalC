<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\ClientesModel;


class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clients = DB::table('clientes')->simplePaginate(7);

        return view('bootstrap.online.clientes', ['title'=>'Clientes', 'clientes'=>$clients]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $newClient = ClientesModel::create([$request->post(),
            'nome'=>$request->post('nome'),
            'email'=>$request->post('email'),
            'cpf'=>$request->post('cpf'),
            'nascimento'=>$request->post('nascimento'),
            'cidade'=>$request->post('cidade'),
            'estado'=>$request->post('estado'),
            'cep'=>$request->post('cep'),
            'rua'=>$request->post('rua'),
            'sexo'=>$request->post('sexo'),
            'num_compl'=>$request->post('num_compl')
        ]);
        return redirect()->to('clientes/edit/'.$newClient->id);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        $client = ClientesModel::find($id);
        return view('bootstrap.online.editcliente', [
            'title'=>'Editar Cliente',
            'cliente'=>$client]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        //$request->post()[] = null;
        //dd($request->post());
        ClientesModel::where('id', $request->input('id'))->update([$request->post()]);
        return $request;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    public function createForm()
    {
        return view('bootstrap.online.addcliente', ['title'=>'Adicionar Clientes']);
    }
}
