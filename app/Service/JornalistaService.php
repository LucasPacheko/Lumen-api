<?php

namespace App\Service;

use App\Repositories\JornalistaRepositoryInterface;
use Illuminate\Support\Facades\Validator; 
use Symfony\Component\HttpFoundation\Response;
use App\Models\ValidationJornalista;
use Illuminate\Database\QueryException;
use Utils\RandomStringGenerator;

class JornalistaService
{
    private $jornalistaRepository;

    public function __construct(JornalistaRepositoryInterface $jornalistaRepository)
    {
        $this->jornalistaRepository = $jornalistaRepository;
    }
    public function register(Request $request)
    {
        $validator = Validator::make(
            $request -> all(),
            ValidationJornalista::RULE_JORNALISTA
        );
        if ($validator->fails()){
            return response()->json($validator->errors(), Response::HTTP_BAD_REQUEST);
        }

        $generator = new RandomStringGenerator();
        $request->token = $generator->generate(20); 
        try {

            $jornalista = $this->model->create($request()->all());
            return response()->json($jornalista, Response::HTTP_CREATED);
        } catch (QueryException $exception) {
            return response()->json(['error'=>'Erro de conexao com o banco de dados'], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
        
    }
    public function getAll()
    {

    }
    //
}

