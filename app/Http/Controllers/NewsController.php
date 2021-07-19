<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Noticia;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Database\QueryException;

class NewsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    private $model;
    public function __construct(Noticia $noticia)
    {
        $this->model = $noticia;
    }
    public function getAll()
    {
        
        $noticia = $this->model->all();
        if(count($noticia) > 0){
            return response()->json($noticia, Response::HTTP_OK);
        }else{
            return response()->json([], Response::HTTP_NO_CONTENT);
        } 
  
    }

    public function store(Request $request)
    {
        
        $noticia = $this->model->create($request->all());

        return response()->json($noticia, Response::HTTP_CREATED);
    }

    public function update($id_news,Request $request)
    {
        
        $noticia = $this->model->find($id_news)
        ->update($request->all());
        return response()->json($noticia, Response::HTTP_OK);
    }
    public function destroy($id_news)
    {
        $noticia = $this->model->find($id_news)
        ->delete();

        return response()->jason([], Response::HTTP_OK);
    }

    //
}
