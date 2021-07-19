<?php
namespace App\Repositories;
use Illuminate\Http\Request;

interface JornalistaRepositoryInterface
{
    public function store(Request $request);
    public function login(Request $request);
    public function me();

}