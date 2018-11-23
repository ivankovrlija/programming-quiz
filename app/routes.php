 <?php

$router->get('', 'PagesController@home');
$router->post('war/', 'GameController@index');
$router->post('war/finish', 'FinishGameController@show');
