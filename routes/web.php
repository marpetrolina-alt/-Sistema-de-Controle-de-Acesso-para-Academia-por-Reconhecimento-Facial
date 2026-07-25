<?php

$router->get('/alunos', 'AlunoController@index');

$router->get('/alunos/create', 'AlunoController@create');

$router->post('/alunos/store', 'AlunoController@store');

$router->get('/alunos/edit', 'AlunoController@edit');

$router->post('/alunos/update', 'AlunoController@update');

$router->get('/alunos/delete', 'AlunoController@delete');
