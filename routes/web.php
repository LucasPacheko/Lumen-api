<?php

/** @var \Laravel\Lumen\Routing\Router $router */

// use FastRoute\Route;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/
$router->group(['prefix' => "/api"], function() use ($router){
    $router->post("/register", "JornalistasController@register");
    $router->post("/login", "JornalistasController@login");
    $router->post("/me", "JornalistasController@authentication");
});


$router->group(['prefix' => "/api/news"], function() use ($router){
    $router->post("/create", "NewsController@store");
    $router->post("/update/{id_news}", "NewsController@update");
    $router->post("/delete/{id_news}", "NewsController@destroy");
    $router->get("/me", "NewsController@getALL");    
    $router->get("/type/{type_id}", "NewsController@allTypes");    
});
$router->group(['prefix' => "/api/type"], function() use ($router){
    $router->post("/create", "NewsTypeController@store");
    $router->post("/update/{type_id}", "NewsTypeController@update");
    $router->post("/delete/{type_id}", "NewsTypeController@delete");
    $router->get("/me", "NewsTypeController@getALL");    
});

/* 
 As boas praticas ditam que nao se deve usar verbos nos endpoint das rotas,
por que o HTTP ja tem o metodo de requisicao eh um verbo.
decidir por seguir as rotas obrigatorias descritas no teste pratico 
https://stackoverflow.blog/2020/03/02/best-practices-for-rest-api-design/#:~:text=back%20end%20frameworks.-,Use%20nouns%20instead%20of%20verbs%20in%20endpoint%20paths,-We%20shouldn%E2%80%99t%20use

 O
 */
