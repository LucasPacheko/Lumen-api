<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\TipoNoticia;
use App\Models\TipoNoticia as ModelsTipoNoticia;

class NewsTypeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(ModelsTipoNoticia $tipoNoticia)
    {
        $this->model = $tipoNoticia;
    }

    public function getAll()
    {
        $tipoNoticia = $this->model->all();

        return response()->json($tipoNoticia);
    }
    public function store(Request $request)
    {
        $tipoNoticia = $this->model->create($request->all());

        return response()->json($tipoNoticia);
    }
    public function update($type_id,Request $request)
    {
        $tipoNoticia = $this->model->find($type_id)
        ->update($request->all());

        return response()->json($tipoNoticia);
    }
    public function delete($type_id)
    {
        $tipoNoticia = $this->model->find($type_id)
        ->delete();

        return response()->jason(null);
    }
    //
}
