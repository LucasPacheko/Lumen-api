<?php

namespace App\Repositories;

use App\Models\Jornalista;
use App\Repositories\JornalistaRepositoryInterface;
use Illuminate\Http\Request;

class JornalistaRepositoryEloquent implements JornalistaRepositoryInterface
{
    private $model;

    public function __construct(Jornalista $jornalista){
        $this -> model = $jornalista;
    }
    public function store(Request $request){

        return $this->model->create($request->all());
    }
    public function login(Request $request){
        return response()->json($request->all());;
    }
    public function me(){
        return $this->model->all();
    }
}