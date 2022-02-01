<?php

namespace App\Http\Controllers;
 
use App\Http\Requests\CadastroRequest;
use App\Http\Resources\CadastroResource;
use App\Models\Cadastro;

class CadastroController extends Controller
{
    public function index(){
        return view('cadastro.cadastro');
    }
    public function store(CadastroRequest $request){
        
        
        return new CadastroResource(Cadastro::create($request->input())); 
    }}