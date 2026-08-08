<?php

// Rotas de alunos

$router->get(
    '/alunos',
    'AlunoController@index'
);

$router->get(
    '/alunos/create',
    'AlunoController@create'
);

$router->post(
    '/alunos/store',
    'AlunoController@store'
);

$router->get(
    '/alunos/edit',
    'AlunoController@edit'
);

$router->post(
    '/alunos/update',
    'AlunoController@update'
);

$router->get(
    '/alunos/delete',
    'AlunoController@delete'
);

// Dashboard

$router->get(
    '/dashboard',
    'DashboardController@index'
);


// Rotas de autenticação

$router->get(
    '/login',
    'AuthController@login'
);

$router->post(
    '/login/autenticar',
    'AuthController@autenticar'
);

$router->get(
    '/logout',
    'AuthController@logout'
);
